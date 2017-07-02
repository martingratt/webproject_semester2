<?php

session_start();
session_destroy();
//name wird aus session gelöscht


?>

<html>
<head>
    <title>
        logout
    </title>
    <!-- Einbinden von Css Sheet um Website Mobilde responsive zu Gestalten -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Verlinken der Css Dateien -->
    <link rel="stylesheet" href="css/textstyle.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/HangmanWars.css">
</head>
<body>
<!-- Überschrift, hit the floor ist das Stylesheet für die Schriftart-->
<div class="hit-the-floor"><h1>Hangman Wars!</h1></div>
<div id="container">

    <div id="header">


        <div class="logout1">Du bist nun ausgeloggt.</div> <br>

        <div class="logout2">Zurück zum <a href="index.php">Login</a> </div>

    </div>




</div>




</body>
</html>
