<?php
    include 'includes/db_credentials.php';
    include 'includes/permissions.php';
    print_r($_POST);
    $sql = "DELETE FROM friends WHERE friend_one='{$_POST['user_id']}' and friend_two='{$_POST['friend_id']}' or friend_one='{$_POST['friend_id']}' and friend_two='{$_POST['user_id']}'";
    mysqli_query($conn, $sql);
    $check = "SELECT * FROM friends WHERE friend_one='{$_POST['user_id']}' or friend_two='{$_POST['user_id']}'";
    $response_back = mysqli_query($conn, $check);
    $n_of_results = mysqli_num_rows($response_back);
    echo $n_of_results;
    if($n_of_results == 0){
        header("LOCATION: ../profile.php?id={$_POST['user_id']}");

    }else
    {
        header('LOCATION: ../friends.php');

    }







