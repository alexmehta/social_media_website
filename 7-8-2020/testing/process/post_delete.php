<?php
    include 'includes/db_credentials.php';
    include 'includes/permissions.php';
    echo $post_id;
    print_r($_POST);
    if ($_SESSION['id']==!$_POST['poster_id'] or $_SESSION['id']==!$_POST['receiver_id']){
        header("LOCATION:../index.php");
    }
    $post_id = $_POST['post_id'];
    $sql = "DELETE FROM posts WHERE id='{$post_id}'";
    mysqli_query($conn, $sql);
    $conn->close();

    $receiver_id = $_POST['receiver_id'];
    header("LOCATION: ../profile.php?id={$receiver_id}");
