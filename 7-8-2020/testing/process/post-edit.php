<?php
    print_r($_POST);
    include('includes/permissions.php');
    include('includes/db_credentials.php');
    $post = $_POST['post_id'];
    $text = $_POST['text'];
    $users = $_POST['user_id'];
    $post_id = $_POST['poster_id'];

    if ($_SESSION['id'] ==! $post_id ){
            header('LOCATION:index.php');
        }
    $sql = "UPDATE posts SET text='{$text}' WHERE id='{$post}'";
    if ($conn->query($sql) !== TRUE){
        echo "Error: " . $sql . '<br>' . $conn->error;

    }
    $conn->close();
    header("LOCATION: ../profile.php?id={$users}" );
    ?>
