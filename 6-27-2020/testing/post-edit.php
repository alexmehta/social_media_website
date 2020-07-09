<?php
    include ('process/includes/permissions.php');
    $posts = $_POST['post_id'];
    $users = $_POST['user_id'];
    print_r($_POST);
    
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



    <div class="container">

        <header>
            <img src="img/beach.jpg" alt="" class="cover-photo">
            <?php include('process/includes/menu-bar.php'); ?>

            <img src="img/profile-photo.jpg" alt="" class="profile-photo">
        </header>


        <div class="about">
            <div class="about__title">
                <h3>Edit Post</h3>
            </div>

            <div class="about__details">

                <form method="post" action="process/post-edit.php" class="about__form">
                    <input type="hidden" name="post_id" value="<?php echo $posts; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $users; ?>">
                    <textarea name="text" id="" cols="30" rows="10" class="post-edit__textarea"></textarea>

                    <input type="submit" class="about__submit">

                </form>

            </div>

        </div>

    </div>

    </body>
</html>