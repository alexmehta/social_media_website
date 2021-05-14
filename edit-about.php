<?php
    include('process/includes/permissions.php');
    include('process/includes/db_credentials.php');

    $phone= $_POST['phone_number'];
    $email = $_POST['email'];
    $dob = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
    $id = $_SESSION['user_id'];
    $gender = $_POST['gender'];

    $sql = "UPDATE users SET phone_number='{$phone}', email = '{$email}', dob='{$dob}', gender='{$gender}' WHERE id = '{$id}'";
    mysqli_query($conn, $sql);
    if ($conn->query($sql) !== TRUE){
        echo "Error: " . $sql . '<br>' . $conn->error;
    }
    $conn->close();

    header('LOCATION: about.php');

