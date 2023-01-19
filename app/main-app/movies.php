<?php
session_start();
require_once '../includes/dbh.inc.php';
$userID = $_SESSION["userID"];
$sql = "SELECT * FROM movies WHERE userId= '$userID';";
$result = mysqli_query($connection, $sql);
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
    <div class=" pt-20 pb-3 flex flex-row justify-end w-full h-fit px-40">
            <a href="./add-movie.php" class=" bg-warning shadow-inner border rounded-xl w-32 h-10 flex items-center justify-center font-extrabold text-xl hover:scale-105"><img class=" h-4" src="../assets/add.png"></a>
        </div>
        <div class="cards-container flex flex-row flex-wrap gap-x-11 gap-y-16 px-40">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='card w-64 h-52 flex flex-col cursor-pointer hover:scale-105'>
                    <div class='card-image h-2/3 border rounded-t-2xl border-none'>
                        <img src='" . $row["pictureLink"] . "' class='border rounded-t-2xl border-none h-full w-full'>
                    </div>
                    <div class='card-description h-1/3 bg-white border border-hidden rounded-b-2xl flex flex-col'>
                    <div class='card-title h-1/3 w-full border-hidden pt-2 px-4 text-xs'> <p class='h-full w-full whitespace-nowrap text-ellipsis overflow-hidden'>" . $row["title"] . "</p></div>
                        <div class='card-info h-2/3 border rounded-b-2xl border-hidden flex flex-row'>
                            <div class='card-rating flex flex-row w-2/3 items-center pl-4'>";
                    for ($i = 0; $i < $row["rating"]; $i++) {
                        echo "<img class='w-5 h-5' src='../assets/star.png'>";
                    };
                    echo "
                            </div>
                            <div class='card-watched w-1/3 flex flex-row items-center justify-end pr-4'>
                                <span class='border rounded-full w-5 h-5 border-none'>";
                    if ($row["watchedDate"] != NULL) {
                        echo "<img src='../assets/view.png' class=' h-5 w-5'></span>";
                    } else {
                        echo "<img src='../assets/hidden.png' class=' h-5 w-5'></span>";
                    };

                    echo "</div>
                        </div>
                    </div>
                </div>
                    ";
                };
            };

            ?>


        </div>
    </main>
</body>

</html>