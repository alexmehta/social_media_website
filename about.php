<?php
    include ('process/includes/permissions.php');
    include ('process/includes/db_credentials.php');

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id='{$user_id}' LIMIT 1";

    $result = mysqli_query($conn, $sql);
    $db_user_data = mysqli_fetch_assoc($result);
    $conn->close();
/*
    $sql = "SELECT * FROM users WHERE id='{$user_id}' LIMIT=1";
    $results = mysqli_query($conn, $sql);//comes back in numeric array
    $db_user_data = mysqli_fetch_assoc($results);//get element 0
    $conn->close();
*/


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

        <nav class="login-nav">
            <img src="img/zbook-logo.png" alt="" class="nav__zbook-logo">

            <form>
                <input type="text">

                <button>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>

            </form>

            <div class="profile-nav__options">
                <a class="profile-nav__photo-link">
                    <img src="img/profile-photo.jpg" alt="" class="profile-nav__photo">
                </a>
                <a class="profile-nav__name-link"><span class="profile-nav__name">James</span></a>
                <a><span class="profile-nav__home">Home</span></a>
                <a class="profile-nav__friends">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="profile-nav__friends-num">5</span>
                </a>
            </div>
        </nav>




        <div class="container">

            <header>
                <img src="img/beach.jpg" alt="" class="cover-photo">

                <?php include('process/includes/menu-bar.php'); ?>


                <img src="img/profile-photo.jpg" alt="" class="profile-photo" style="width: 200px;">
            </header>


            <div class="about">
                <div class="about__title">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h3>About</h3>
                </div>

                <div class="about__details">
                    <div class="about__details-left">
                        <ul>
                            <li>Contact and Basic Info</li>
                        </ul>
                    </div>
                    
                    <div class="about__details-right">


                        <div class="row">
                            <div class="one-of-four">
                                Mobile Phone
                            </div>
                            <div class="three-of-four">
                                <?php echo $db_user_data['phone_number'];?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="one-of-four">
                                Email
                            </div>
                            <div class="three-of-four">
                                <?php echo $db_user_data['email'];?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="one-of-four">
                                Birth Date
                            </div>
                            <div class="three-of-four">
                                <?php echo date('F d Y', strtotime($db_user_data['dob']));?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="one-of-four">
                                Gender
                            </div>
                            <div class="three-of-four">
                                <?php echo $db_user_data['gender'];?>
                            </div>
                        </div>

                        <div class="row about__edit-btn">
                            <div class="one-of-four">
                                &zwnj;
                            </div>
                            <div class="three-of-four">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <a href="about-edit.php">Edit</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>





    </body>
</html>