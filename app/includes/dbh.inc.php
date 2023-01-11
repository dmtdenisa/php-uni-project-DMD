<?php

$server = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "projectura";

$connection = mysqli_connect($server, $dbUser, $dbPassword, $dbName);

if (!$connection) {
    die("Connection to db failed: " . mysqli_connect_error());
}
