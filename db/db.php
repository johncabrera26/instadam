<?php
include 'config.php';

function getPosts() {
    $conn = connectDB();
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    $posts = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }
    }
    mysqli_close($conn);
    return $posts;
}

function getUsersPosts($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM posts Where user_id= $id";
    echo $sql;
   
    $result = mysqli_query($conn, $sql);
    $posts = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }
    }
    mysqli_close($conn);
    return $posts;
}
?>