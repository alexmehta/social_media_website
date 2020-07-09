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
    <body id="profile-about">

    <?php include 'process/includes/nav-bar.php'?>


    <div class="container">

            <header>
                <img src="img/beach.jpg" alt="" class="cover-photo">

                <?php include('process/includes/menu-bar.php'); ?>


                <img src="img/profile-photo.jpg" alt="" class="profile-photo" style="width: 200px;">            </header>


            <div id="profile-photos">
                <div class="about__title">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <h3>Photos</h3>

                    <form>
                        <input type="file">
                        <button>+Add</button>
                    </form>
                </div>

                <div class="profile-photos">

                    <div class="row">

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                    </div> <!--END ROW-->

                    <div class="row">

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                    </div> <!--END ROW-->

                    <div class="row">

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                        <div class="one-of-four">
                            <a><img src="img/profile-photo.jpg" alt="" style="width: 100%; border: 10px solid white"></a>
                        </div>

                    </div> <!--END ROW-->

                </div>

            </div>

        </div>

    </body>
</html>