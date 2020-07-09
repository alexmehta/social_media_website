<?php
    include ('process/includes/permissions.php')
?>

<!doctype html>
<html lang="en">
    <head>

        <title>ZBOOK</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body id="timeline">

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

        <div class="newsfeed">

            <div class="text-wall-post white-background">
                <div class="text-wall-post__details">
                    <img src="img/profile-photo.jpg" alt="">
                    <p class="text-wall-post__name">James Bond</p>
                </div>

                <div class="text-wall-post__content">
                    <p>Happy Birthday!</p>
                    <form class="text-wall-post__actions">

                        <button><i class="fa fa-thumbs-up" aria-hidden="true"></i><h3>Like</h3></button>

                    </form>
                </div>

            </div> <!--END TEXT WALL POST-->

            <div class="text-wall-post white-background">
                <div class="text-wall-post__details">
                    <img src="img/profile-photo.jpg" alt="">
                    <p class="text-wall-post__name">James Bond</p>
                </div>

                <div class="text-wall-post__content">
                    <p>Happy Birthday!</p>
                    <form class="text-wall-post__actions">

                        <button><i class="fa fa-thumbs-up" aria-hidden="true"></i><h3>Like</h3></button>

                    </form>
                </div>

            </div> <!--END TEXT WALL POST-->

            <div class="text-wall-post white-background">
                <div class="text-wall-post__details">
                    <img src="img/profile-photo.jpg" alt="">
                    <p class="text-wall-post__name">James Bond</p>
                </div>

                <div class="text-wall-post__content">
                    <p>Happy Birthday!</p>
                    <form class="text-wall-post__actions">

                        <button><i class="fa fa-thumbs-up" aria-hidden="true"></i><h3>Like</h3></button>

                    </form>
                </div>

            </div> <!--END TEXT WALL POST-->

            <div class="text-wall-post white-background">
                <div class="text-wall-post__details">
                    <img src="img/profile-photo.jpg" alt="">
                    <p class="text-wall-post__name">James Bond</p>
                </div>

                <div class="text-wall-post__content">
                    <p>Happy Birthday!</p>
                    <form class="text-wall-post__actions">

                        <button><i class="fa fa-thumbs-up" aria-hidden="true"></i><h3>Like</h3></button>

                    </form>
                </div>

            </div> <!--END TEXT WALL POST-->

        </div>


    </body>
</html>