<?php
    include ('process/includes/permissions.php');
    include ('process/includes/db_credentials.php');

?>

<!doctype html>
<html lang="en">
    <head>

        <title>ZBOOK</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body id="profile-about">

        <?php include 'process/includes/nav-bar.php'?>


        <div class="container">

            <header>
                <img src="img/beach.jpg" alt="" class="cover-photo">


                <?php include('process/includes/menu-bar.php'); ?>

                <img src="img/profile-photo.jpg" alt="" class="profile-photo" style="width: 200px;">            </header>


            <div id="profile-friends">
                <div class="about__title">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h3>Friends</h3>
                </div>
                <?php
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT * FROM friends WHERE friend_one = '{$user_id}' or friend_two = '{$user_id}'";
                    $result = mysqli_query($conn, $sql);
                    $friend_list = []
                ?>

                <?php while($row = mysqli_fetch_assoc($result)){

                    foreach($row as $key=> $value){
                        if($key=='friend_one' && $value !== $user_id){
                            $friend_list[] = $value;
                        }
                        if($key=='friend_two' && $value !== $user_id){
                            $friend_list[] = $value;
                        }

                    }
                }
                $num_friend_list = count($friend_list);
                ?>
                <div class="profile-friends__list">

                    <div class="row">

                        <div class="one-of-two">


                        <?php for ($i = 0; $i < $num_friend_list; $i++): ?>
                            <?php
                                $sql = "SELECT * FROM users WHERE id={$friend_list[$i]} LIMIT 1";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>

                            <div class="profile-friend__single">
                                <img src="img/profile-photo.jpg" alt="">

                                <a><h2><?php echo $row['first_name'] . ' ' . $row['last_name'];?></h2></a>

                                <form action="process/unfriend.php" method="post" >
                                    <input type="hidden" name = "friend_id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id?>">
                                    <button class="profile-friend__unfriend-btn" onclick="return confirm('<?php echo 'Are you sure you want to unfriend' . $row['first_name'] ; ?>');">Unfriend</button>
                                </form>
                            </div>
                        <?php endfor ?>

                        </div>



                    </div> <!--END ROW-->




                </div>

            </div>

        </div>

    </body>
</html>