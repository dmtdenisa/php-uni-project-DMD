<?php

function emptyInputSignup($email, $username, $password)
{
    if (empty($email) or empty($username) or empty($password)) {
        return true;
    } else {
        return false;
    }
}

function emptyInputLogIn($username, $password)
{
    if (empty($username) or empty($password)) {
        return true;
    } else {
        return false;
    }
}

function createNewUser($connection, $username, $email, $password)
{
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', PASSWORD('$password'));";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function logIn($connection, $username, $password)
{
    $sql = "SELECT userId, email, username  FROM users WHERE username = '$username' AND password = PASSWORD('$password');";

    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        return $row;
    } else {
        return false;
    };
};