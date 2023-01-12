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
    <main class="h-screen">
        <div class="cards-container flex flex-row flex-wrap gap-x-11 gap-y-16 pt-20 px-40">
            <div class="card w-64 h-52 flex flex-col cursor-pointer hover:scale-105">
                <div class="card-image h-2/3 bg-accent border rounded-t-2xl border-none">
                    <img src="https://bloody-disgusting.com/wp-content/uploads/2017/09/salems-lot.jpg" class="border rounded-t-2xl border-none">
                </div>
                <div class="card-description h-1/3 bg-white border border-hidden rounded-b-2xl flex flex-col">
                    <div class="card-title h-1/3 w-full border-hidden pt-2 px-4 text-xs">Salem's Lot</div>
                    <div class="card-info h-2/3 border rounded-b-2xl border-hidden flex flex-row">
                        <div class="card-rating flex flex-row w-2/3 items-center pl-4">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                        </div>
                        <div class="card-watched w-1/3 flex flex-row items-center justify-end pr-4">
                            <span class="border rounded-full w-5 h-5 border-none"><img src="../assets/hidden.png" class=" h-5 w-5"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-64 h-52 flex flex-col">
                <div class="card-image h-2/3 bg-accent border rounded-t-2xl border-none">
                    <img src="https://media.timeout.com/images/103625898/image.jpg" class="border rounded-t-2xl border-none">
                </div>
                <div class="card-description h-1/3 bg-white border border-hidden rounded-b-2xl flex flex-col">
                    <div class="card-title h-1/3 w-full border-hidden pt-2 px-4 text-xs">The Wailing</div>
                    <div class="card-info h-2/3 border rounded-b-2xl border-hidden flex flex-row">
                        <div class="card-rating flex flex-row w-2/3 items-center pl-4">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                            <img class="w-5 h-5" src="../assets/star.png">
                        </div>
                        <div class="card-watched w-1/3 flex flex-row items-center justify-end pr-4">
                            <span class="border rounded-full w-5 h-5 border-none"><img src="../assets/eye.png" class=" h-5 w-5"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>