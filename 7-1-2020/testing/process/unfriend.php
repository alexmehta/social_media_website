<?php
    include 'includes/db_credentials.php';
    include 'includes/permissions.php';
    $sql = "DELETE FROM friends WHERE friend_two = '{$_POST['friend_id']}'";
    mysqli_query($conn, $sql);
    $conn ->close();
    header('LOCATION: ../friends.php');
    ?>
