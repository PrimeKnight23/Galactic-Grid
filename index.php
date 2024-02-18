<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: indexIn.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <canvas id="canvas"></canvas>
    <main class="menu">
        <h2>GALACTIC GRID</h2>

        <div class="play">
            <button class="loginbutton" onclick="location.href='login.php'"><b>Login</b></button>
            <button class="playasguest" onclick="location.href='choose.php'"><b>Play as Guest</b></button>  
        </div>

        <div class="registration"><p>Not Registered yet? <a href="registration.php">Register here</a></div>
    </main>

    <footer class="footer">
        <p>Made by: Barallas, Limpin, Manlagnit, Miki, Oclares</p>
    </footer>


    <script src="starbg.js" type="module"></script>
    <script src="audiobg.js"></script>
</body>
</html>
