<?php

session_start();
$mysqli = require __DIR__ . "/database.php";

$maxsquat = $_POST["maxsquat"];
$maxdeadlift = $_POST["maxdeadlift"];
$maxbench = $_POST["maxbench"];
$userid = $_SESSION['user_id'];


$query = "INSERT INTO maxes (maxsquat, maxdeadlift, maxbench, userid)
        VALUES ('$maxsquat', '$maxdeadlift', '$maxbench','$userid')";

$run = mysqli_query($mysqli, $query);

if($run){
    header("Location: maxesSuccess.html");
    exit;
}