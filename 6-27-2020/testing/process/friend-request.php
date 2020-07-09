<?php
    session_start();
    include 'includes/db_credentials.php';
    $requester_id = $_SESSION['user_id'];
    $requestee_id = $_POST['requestee_id'];

    /* Check if the friendship exists*/
    $sql = "SELECT * FROM friend_request WHERE
            (requester_id = {$requester_id} AND requestee_id = {$requestee_id} OR 
            (requester_id ={$requestee_id} and requestee_id={$requester_id})";

    $result =mysqli_query($conn, $sql);
    $num_results = mysqli_num_rows($result);

    if ($num_results>=1){
        //match found
        header("LOCATION: ../search.php");

    }else{
        //no match found
        /*add friend request*/
        $sql = "INSERT INTO friend_requests(requester_id, requestee_id) VALUES ('{$requester_id}', '{$requestee_id}')";
        if ($conn->query($sql) !==TRUE){
            echo "error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_query($conn, $sql);
        $conn->close();
        header("LOCATION: ../search.php");
    }