<?php
    session_start();
    require_once '../includes/dbh.inc.php';
    $userID = $_SESSION["userID"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLittleArchive</title>
</head>
<?php include_once("header.php") ?>

<body>
    <main class="flex flex-col items-center h-screen">
        <form method="post" action="../includes/add-movie.inc.php" class="w-full">
            <div class="w-full p-6 rounded">
                <div class="flex flex-col w-full items-center gap-6">
                    <div class="flex flex-col w-1/3">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="Enter movie title" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="director">Director</label>
                        <input type="text" name="director" placeholder="Enter director" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="release">Release Year</label>
                        <input type="text" name="release" placeholder="Enter release ex.2022" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="genre">Genre</label>
                        <input type="text" name="genre" placeholder="Enter genre" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="watched">Date Watched</label>
                        <input type="text" name="watched" placeholder="Enter date ex.2022-01-02" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="rating">Rating</label>
                        <input type="text" name="rating" placeholder="Enter rating from 1 to 5" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="comment">Comment</label>
                        <input class="input input-bordered w-full max-w-xs" name="comment" placeholder="Enter comment" />
                    </div>
                    <div class="flex flex-col w-1/3">
                        <label for="pictureLink">Picture</label>
                        <input type="text" name="pictureLink" placeholder="Insert link to a picture" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <button type="submit" name="submitButton" class="w-32 bg-primary hover:bg-secondary text-slate-100 border border-transparent rounded-xl pt-2 pb-2 pl-6 pr-6">Save</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>