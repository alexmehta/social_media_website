<?php
    include 'includes/db_credentials.php';

    $post_id = $_POST['post_id'];
    $sql = "DELETE FROM posts WHERE id='{$post_id}'";
    mysqli_query($conn, $sql);
    $conn->close();

    $receiver_id = $_POST['receiver_id'];
    header("LOCATION: ../profile.php?id={$receiver_id}");
