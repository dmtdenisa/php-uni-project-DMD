<?php

$username = $_POST["username"];
$password = $_POST["password"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputLogIn($username, $password) !== false) {
    header("location: ../login/login.php?error=emptyinput");
    exit();
}

$user = logIn($connection, $username, $password);

if ($user) {
    session_start();
    $_SESSION["user"] = $user["username"];
    header("location: ../main-app/dashboard.php?user=$username");
    exit();
} else {
    header("location: ../login/login.php?error=authFailed");
    exit();
}
