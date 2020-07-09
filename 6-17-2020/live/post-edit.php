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
        <div class="menu-bar">
            <ul>
                <li><a>Timeline</a></li>
                <li><a>About</a></li>
                <li><a>Friends</a></li>
                <li><a>Photos</a></li>
            </ul>
        </div>
        <img src="img/profile-photo.jpg" alt="" class="profile-photo">
    </header>


    <div class="about">
        <div class="about__title">
            <h3>Edit Post</h3>
        </div>

        <div class="about__details">

            <form class="about__form">

                <textarea id="" cols="30" rows="10" class="post-edit__textarea"></textarea>

                <input type="submit" class="about__submit">

            </form>

        </div>

    </div>

</div>

</body>
</html>