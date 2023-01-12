<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/output.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>MyLittleArchive</title>
</head>
<?php include_once("header.php") ?>

<body>
    <main>
        <div class="cards-container flex flex-column flex-wrap gap-y-4 pt-16 pb-0">
            <div class="flex flex-row w-full justify-center space-x-4">
                <a href="./movies.php" class="card w-80 h-64 flex flex-col justify-center items-center gap-y-5 cursor-pointer hover:scale-105 shadow-md bg-gray-50">
                    <h1 class=" text-2xl font-extrabold font-sans">Movies</h1>
                    <img class=" w-24" src="../assets/clapperboard.png">
                </a>

                <a href="./books.php" class="card w-80 h-64 flex flex-col justify-center items-center gap-y-5 cursor-pointer hover:scale-105 shadow-md bg-gray-50">
                    <h1 class=" text-2xl font-extrabold font-sans">Books</h1>
                    <img class=" w-24" src="../assets/books.png">
                </a>
            </div>

            <div class="flex flex-row w-full justify-center space-x-4">
                <a href="./articles.php" class="card w-80 h-64 flex flex-col justify-center items-center gap-y-5 cursor-pointer hover:scale-105 shadow-md bg-gray-50">
                    <h1 class=" text-2xl font-extrabold font-sans">Articles</h1>
                    <img class=" w-24" src="../assets/newspaper.png">
                </a>

                <a href="./albums.php" class="card w-80 h-64 flex flex-col justify-center items-center gap-y-5 cursor-pointer hover:scale-105 shadow-md bg-gray-50">
                    <h1 class=" text-2xl font-extrabold font-sans">Albums</h1>
                    <img class=" w-24" src="../assets/music-album.png">
                </a>
            </div>

        </div>
    </main>
</body>

</html>