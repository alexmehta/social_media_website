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
    <body id="profile">

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


            <div id="left-panel">
                <div class="intro white-background">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <h2>Intro</h2>

                    <a>+ Describe who you are</a>

                    <a>+ Add info about you</a>
                </div>

                <div class="friends white-background">
                    <div class="friends__heading">
                        <i class="fa fa-users" aria-hidden="true"></i>

                        <h2>Friends</h2> <span>20</span>
                    </div>


                    <div class="container">
                        <div class="row">

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                        </div> <!--END ROW-->

                        <div class="row">

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a class="friends__name">James Bond</a>
                            </div>

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                        </div> <!--END ROW-->

                        <div class="row">

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a  class="friends__name">James Bond</a>
                            </div>

                            <div class="one-of-three">
                                <a>
                                    <img src="img/profile-photo.jpg" alt="">
                                </a>

                                <a class="friends__name">James Bond</a>
                            </div>

                        </div> <!--END ROW-->
                    </div>




                </div>



            </div>


            <div id="right-panel">

                <div class="status-update white-background">
                    <form>
                        <input type="text" placeholder="What's on your mind?">
                        <input type="submit">
                    </form>
                </div>
                
                <div class="profile-wall">

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

                            <a class="text-wall-post__actions">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>

                            <form class="text-wall-post__actions">
                                <button>
                                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                    Delete
                                </button>
                            </form>


                        </div>

                    </div> <!--END TEXT WALL POST-->

                </div>

                <div class="profile-wall">

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

                            <a class="text-wall-post__actions">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>

                            <form class="text-wall-post__actions">
                                <button>
                                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                    Delete
                                </button>
                            </form>


                        </div>

                    </div> <!--END TEXT WALL POST-->

                </div>

                <div class="profile-wall">

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

                            <a class="text-wall-post__actions">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>

                            <form class="text-wall-post__actions">
                                <button>
                                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                    Delete
                                </button>
                            </form>


                        </div>

                    </div> <!--END TEXT WALL POST-->

                </div>

            </div>

        </div>

    </body>
</html>