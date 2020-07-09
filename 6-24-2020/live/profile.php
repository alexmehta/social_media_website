<?php
    include ('process/includes/permissions.php');
    include ('process/includes/db_credentials.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE receiver_id='{$id}'";
    $posts = mysqli_query($conn, $sql);
    //$conn->close();
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
                    <form action="process/post-create.php" method="post">
                        <input type="hidden" name="receiver_id" value="<?php echo $_GET['id']; ?>">
                        <input type="text" name="text" placeholder="What's on your mind?">
                        <input type="submit">
                    </form>
                </div>
                <?php while ($post = mysqli_fetch_assoc($posts)): ?>
                    <?php
                        $poster_id = $post['poster_id'];
                        $name_sql = "SELECT * FROM users WHERE id='{$poster_id}'";
                        $name_result = mysqli_query($conn, $name_sql);
                        $name_row = mysqli_fetch_assoc($name_result);
                    ?>
                    <div class="profile-wall">

                        <div class="text-wall-post white-background">
                            <div class="text-wall-post__details">
                                <img src="img/profile-photo.jpg" alt="">
                                <p class="text-wall-post__name"><?php echo $name_row['first_name'] . ' ' . $name_row['last_name'];?></p>
                            </div>

                            <div class="text-wall-post__content">
                                <p><?php echo $post['text']; ?></p>
                                <form class="text-wall-post__actions">

                                    <button><i class="fa fa-thumbs-up" aria-hidden="true"></i><h3>Like</h3></button>

                                </form>

                                    <form action ="post-edit.php" method="post" class="text-wall-post__actions">
                                        <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                                        <button>
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            Edit
                                        </button>

                                    </form>


                                <form action = "process/post_delete.php" method="post" class="text-wall-post__actions">
                                    <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                                    <input type="hidden" name="receiver_id" value="<?php echo $post['receiver_id']; ?>">

                                    <button>
                                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                        Delete
                                    </button>
                                </form>


                            </div>

                        </div> <!--END TEXT WALL POST-->

                    </div>
                <?php endwhile; ?>

            </div>

        </div>

    </body>
</html>