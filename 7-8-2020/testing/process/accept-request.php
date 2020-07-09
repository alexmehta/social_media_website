<?php
    include 'includes/db_credentials.php';
    include 'includes/permissions.php';
    $friend_one = $_POST['user_id'];
    $friend_two = $_POST['friend_id'];
    print_r($_POST);
    $sql = "INSERT INTO friends(friend_one, friend_two) VALUES ('$friend_one','$friend_two')";
    if ($conn->query($sql) !==TRUE){
        echo "error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_query($conn, $sql);
    $query = "DELETE FROM friend_requests WHERE 
                (requester_id = '{$friend_two}' AND requestee_id='{$friend_one}') OR 
                (requester_id='{$friend_one}' AND requestee_id='{$friend_two}')";
    mysqli_query($conn, $query);
    if ($conn->query($query) !==TRUE){
        echo "error: " . $query . "<br>" . $conn->error;
    }
    $check = "SELECT * FROM friend_requests WHERE requestee_id='{$friend_one}'";
    $response_back = mysqli_query($conn, $check);

    if ($conn->query($check) !==TRUE){
        echo "error: " . $query . "<br>" . $conn->error;
    }
    $n_of_results = mysqli_num_rows($response_back);
    $conn->close();
    if ($n_of_results == 0){
        header("LOCATION: ../profile.php?id={$friend_one}");
    }else{
        header('LOCATION: ../friends-accept.php');
    }

