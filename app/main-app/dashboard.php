<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/output.css">
    <title>MyLittleArchive</title>
</head>

<body>
    <p>Hello and welcome to the dashboard, <?= $_SESSION["user"] ?>!</p>
</body>

</html>