<?php
    print_r($_POST);
    include('includes/permissions.php');
    include('includes/db_credentials.php');
    $post = $_POST['post_id'];
    $text = $_POST['text'];
    $users = $_POST['user_id'];

    $sql = "UPDATE posts SET text='{$text}' WHERE id='{$post}'";
    if ($conn->query($sql) !== TRUE){
        echo "Error: " . $sql . '<br>' . $conn->error;
    }
    $conn->close();

    header("LOCATION: ../profile.php?id={$users}" );

    ?>
