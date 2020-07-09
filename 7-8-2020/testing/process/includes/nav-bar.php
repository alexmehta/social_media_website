<?php
    include 'db_credentials.php';
    $sql = "SELECT * FROM users WHERE id='{$_SESSION['user_id']}'";
    $name = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($name);
    $username_id = $_SESSION['user_id'];
    $query = "SELECT * FROM friend_requests WHERE requestee_id='{$username_id}'";
    $friends_result = mysqli_query($conn, $query);
    $num_of_results = mysqli_num_rows($friends_result);
?>
<nav class="login-nav">
    <img src="img/zbook-logo.png" alt="" class="nav__zbook-logo">

    <form action="search.php" method="POST">
        <input type="text" name="search_query">

        <button>
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>

    </form>

    <div class="profile-nav__options">
        <a class="profile-nav__photo-link">
            <img src="img/profile-photo.jpg" alt="" class="profile-nav__photo">
        </a>
        <a class="profile-nav__name-link"><span class="profile-nav__name"><?php echo $result['first_name']; ?></span></a>
        <a href="profile.php?id=<?php echo $username_id?>"><span class="profile-nav__home">Home</span></a>
        <a class="profile-nav__friends">
            <a href="friends-accept.php"><i  class="fa fa-users" aria-hidden="true" ></i></a>
            <span <?php if ($num_of_results>0){echo 'style="background-color:red;"';} ?>class="profile-nav__friends-num"><?php echo $num_of_results?></span>
        </a>
    </div>
</nav>
