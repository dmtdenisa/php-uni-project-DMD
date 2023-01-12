<?php
?>
<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/output.css">
</head>

<body class="neutral-content h-screen drop-shadow">
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl" href="./dashboard.php">
                <div class="flex flex-row gap-3">
                    <img src="../assets/treasure.png" class="w-6">
                    <span class="font-sans font-bold">myLittleArchive</span>
                </div>
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li tabindex="0">
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "
                    <a>
                    Archives
                    <svg class=\"fill-current\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\">
                        <path d=\"M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z\" />
                    </svg>
                </a>
                <ul class=\"p-2 bg-base-100 w-32\">
                    <li><a href='./movies.php'>Movies</a></li>
                    <li><a href='./books.php'>Books</a></li>
                    <li><a href='./articles.php'>Articles</a></li>
                    <li><a href='./albums.php'>Albums</a></li>
                </ul>
                    ";
                        echo "<li><a href='../includes/logout.inc.php' class=\"hover:bg-secondary hover:text-slate-50\">LOGOUT</a></li>";
                    }
                    ?>

                </li>

            </ul>
        </div>
    </div>
</body>

</html>