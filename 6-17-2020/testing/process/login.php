<?php
    session_start();
    include 'include/credentials.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='{$email}' LIMIT 1";

    $result = mysqli_query($conn, $sql);
    $db_user_data = mysqli_fetch_assoc($result);
    $conn -> close();

    if ($password == $db_user_data['password']){
        $_SESSION['permission'] = 1;
        $_SESSION['user_id'] = $db_user_data['id'];
        header('LOCATION:../profile.php');
    } else{
        header('LOCATION: ../index.php');
}