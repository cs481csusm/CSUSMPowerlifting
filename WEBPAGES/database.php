<?php

$host = "localhost";
$dbname = "finalproject";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection Error:" . $mysqli->connect_errno);
}

return $mysqli;