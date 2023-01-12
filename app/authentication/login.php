<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/output.css">
    <title>Login</title>
</head>

<body>
    <?php include "../main-app/header.php" ?>
    <main class="flex flex-col items-center h-screen">
        <h1 class="text-xl font-sans font-medium mt-32">Enter account details</h1>
        <form method="post" action="../includes/login.inc.php">
            <div class="w-96 p-6 rounded">
                <div class="flex flex-col items-center gap-6">
                    <div class="flex flex-col">
                        <label for="usernameInput">Username</label>
                        <input type="text" name="username" id="usernameInput" placeholder="Type in your username" class="w-80 border rounded-xl border-slate-200 p-2 hover:border-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400">
                    </div>
                    <div class="flex flex-col">
                        <label for="passwordInput">Password</label>
                        <input type="password" name="password" id="passwordInput" placeholder="Type in your password" class="w-80 border rounded-xl border-slate-200 p-2 hover:border-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400">
                    </div>
                    <button type="submit" name="submitButton" class="w-32 bg-primary hover:bg-secondary text-slate-100 border border-transparent rounded-xl pt-2 pb-2 pl-6 pr-6">Log In</button>
                    <span class="text-sm">Don't have an account? <a href="signup.php" class="text-secondary">Sign Up</a></span>
                </div>
            </div>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] === "emptyinput") {
                echo "<p>Please fill in all the fields!</p>";
            }
        }
        ?>

    </main>
</body>

</html>