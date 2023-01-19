<?php

session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';
$username = $_SESSION["user"];

if ($_SESSION["user"]) {
    $data = array("title" => $_POST["title"], "director" => $_POST["director"], "releaseYear" => $_POST["release"], "genre" => $_POST["genre"], "watchedDate" => $_POST["watched"], "rating" => $_POST["rating"], "comment" => $_POST["comment"], "pictureLink" => $_POST["pictureLink"]);
    addMovie($connection, $_SESSION["userID"], $data);
    header("location: ../main-app/movies.php");
    exit();
} else {
    echo "Something went wrong";
    header("location: ../main-app/add-movie.php");
    exit();
}
