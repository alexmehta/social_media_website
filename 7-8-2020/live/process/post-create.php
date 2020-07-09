<?php
    include 'includes/db_credentials.php';
    include 'includes/permissions.php';

    $poster_id = $_SESSION['user_id'];
    $receiver_id = $_POST['receiver_id'];
    $text = $_POST['text'];

    $sql = "INSERT INTO posts (poster_id, receiver_id, text) VALUES ('{$poster_id}', '{$receiver_id}', '{$text}')";

    if ($conn ->query($sql) !== TRUE){
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    header("LOCATION: ../profile.php?id={$receiver_id}");