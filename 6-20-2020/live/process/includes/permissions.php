<?php
    session_start();
    if(!isset($_SESSION['permission']) || $_SESSION['permission'] !== 1){
        header('LOCATION: index.php');
    }
    ?>
