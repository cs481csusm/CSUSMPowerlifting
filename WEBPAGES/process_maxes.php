<?php

session_start();
$mysqli = require __DIR__ . "/database.php";

$maxsquat = $_POST["maxsquat"];
$maxdeadlift = $_POST["maxdeadlift"];
$maxbench = $_POST["maxbench"];
$userid = $_SESSION['user_id'];

$check_user = mysqli_query($mysqli, "SELECT userid FROM maxes where userid = '$userid' ");

if(mysqli_num_rows($check_user) > 0){
    $query = "UPDATE maxes
    SET maxsquat = '$maxsquat', maxdeadlift= '$maxdeadlift', maxbench='$maxbench'
    WHERE userid = '$userid'";  
}
else if(mysqli_num_rows($check_user) == 0){
    $query = "INSERT INTO maxes (maxsquat, maxdeadlift, maxbench, userid)
        VALUES ('$maxsquat', '$maxdeadlift', '$maxbench','$userid')";
}

$run = mysqli_query($mysqli, $query);   

if($run){
    header("Location: maxesSuccess.html");
    exit;
}