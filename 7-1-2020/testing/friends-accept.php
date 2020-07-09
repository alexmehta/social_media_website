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
<body id="search">

    <?php include 'process/includes/nav-bar.php'?>


<div class="search-results">
    <div class="container">
        <?php
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM friend_requests WHERE requestee_id='{$username_id}'";
        $result = mysqli_query($conn, $sql); ?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
            <?php
                $query = "SELECT * FROM users where id='{$row['requester_id']}'";
                $users_info = mysqli_fetch_assoc(mysqli_query($conn, $query));
            ?>

            <div class="search-results__single">
                    <img src="img/profile-photo.jpg" alt="">
                    <a><?php echo $users_info['first_name'] . ' ' . $users_info['last_name']?></a>

                    <form method="post" action="process/accept-request.php">
                        <button>
                            <input type="hidden" name="user_id" value=<?php echo $user_id; ?>>
                            <input type="hidden" name="friend_id" value="<?php echo $row['requester_id']?>"
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <span>Accept Request</span>
                        </button>
                    </form>
                </div>
        <?php endwhile ?>
    </div>


</div>







</body>
</html>