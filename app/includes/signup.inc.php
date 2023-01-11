<?php


$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignup($email, $username, $password) !== false) {
    header("location: ../login/signup.php?error=emptyinput");
    exit();
}

$user = createNewUser($connection, $username, $email, $password);

if ($user !== false) {
    header("location: ../login/login.php?error=none");
    exit();
} else {
    header("location: ../login/signup.php?error=nousercreated");
    exit();
}
