<?php
    include 'includes/db_credentials.php';
    include 'includes/permissions.php';
    print_r($_POST);
    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];
    $_SESSION['user3'] = $user_id;

    $like_sql = "INSERT INTO likes (post_id, user_liked_id) VALUES ('{$post_id}', '{$user_id}') ";

    if ($conn->query($like_sql) !== TRUE){
        echo "Error: " . $sql . '<br>' . $conn->error;

    }
    $conn->close();
    header("LOCATION: ../profile.php?id={$user_id}");