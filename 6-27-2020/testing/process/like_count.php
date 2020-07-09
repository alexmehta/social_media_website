<?php
    include 'includes/db_credentials.php';
    $like_sql = $sql = "SELECT * FROM likes where post_id= '{$post['id']}'";

    $likes_result = mysqli_query($conn , $like_sql);
    $likes_nums['likes'] = mysqli_num_rows($likes_result);
    echo $likes_nums['likes'];