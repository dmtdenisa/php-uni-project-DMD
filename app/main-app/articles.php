<?php
session_start();
require_once '../includes/dbh.inc.php';
$userID = $_SESSION["userID"];
$sql = "SELECT * FROM articles WHERE userId= '$userID';";
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
    <main class="h-screen">
        <div class=" pt-20 pb-3 flex flex-row justify-end w-full h-fit px-40">
            <div class=" bg-warning shadow-inner border rounded-xl w-32 h-10 flex items-center justify-center font-extrabold text-xl hover:scale-105"><img class=" h-4" src="../assets/add.png"></div>
        </div>
        <div class="cards-container flex flex-row flex-wrap gap-x-11 gap-y-16 px-40">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='card w-64 h-52 flex flex-col cursor-pointer hover:scale-105'>
                    <div class='card-image h-2/3 border rounded-t-2xl bg-slate-50 border-none flex grow-0 justify-center items-center'>
                        <img src='../assets/newspaper.png' class='border rounded-t-2xl border-none h-20'>
                    </div>
                    <div class='card-description h-1/3 bg-white border border-hidden rounded-b-2xl flex flex-col'>
                        <div class='card-title h-1/3 w-full border-hidden pt-2 px-4 text-xs'> <p class='h-full w-full whitespace-nowrap text-ellipsis overflow-hidden'>" . $row["title"] . "</p></div>
                        <div class='card-info h-2/3 border rounded-b-2xl border-hidden flex flex-row'>
                            <div class='card-watched flex flex-row w-full items-center justify-end pr-4'>
                                <span class='border rounded-full w-5 h-5 border-none'>";
                    if ($row["readDate"] != NULL) {
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