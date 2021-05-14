<?php

    include 'includes/db_credentials.php';

    //extract vars from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day']; //2020-5-17

    $sql = "INSERT INTO users (first_name, last_name, email, password, dob, gender)
        values('{$first_name}', '{$last_name}', '{$email}','{$password}', '{$dob}','{$gender}')";

    if ($conn ->query($sql) !== TRUE){
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("LOCATION:../index.php");