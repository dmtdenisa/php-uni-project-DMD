<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/output.css">
  <title>SignUp</title>
</head>

<body>
  <?php include "../main-app/header.php" ?>
  <main class="flex flex-col items-center h-screen">
    <h1 class="text-xl font-sans font-medium mt-32">Sign Up</h1>
    <form method="post" action="../includes/signup.inc.php">
      <div class="w-96 p-6 rounded">
        <div class="flex flex-col items-center gap-6">
          <div class="flex flex-col">
            <label for="emailInput">Email</label>
            <input type="text" name="email" id="emailInput" placeholder="ex. iAmBadAtPHP3000@something.com" class="w-80 border rounded-xl border-slate-200 p-2 hover:border-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400">
          </div>
          <div class="flex flex-col">
            <label for="usernameInput">Username</label>
            <input type="text" name="username" id="usernameInput" placeholder="ex. iAmBadAtPHP3000" class="w-80 border rounded-xl border-slate-200 p-2 hover:border-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400">
          </div>
          <div class="flex flex-col">
            <label for="passwordInput">Password</label>
            <input type="password" name="password" id="passwordInput" placeholder="Choose a strong password" class="w-80 border rounded-xl border-slate-200 p-2 hover:border-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400">
          </div>
          <button type="submit" name="submitButton" class="w-50 bg-primary hover:bg-secondary text-slate-100 border border-transparent rounded-xl pt-2 pb-2 pl-6 pr-6">Create new account</button>
          <span class="text-sm">Already have an account? <a href="login.php" class="text-secondary">Log In</a></span>
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