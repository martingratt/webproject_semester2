<?php

session_start();

if (isset($_SESSION["name"])) {
    ?>
    <html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/navBar.css">
        <title>Hangmanwars</title>
    </head>


    <body class="news">
    <header>
        <div class="nav">
            <ul>
                <li class="home"><a href="hangman.php">Home</a></li>
                <li class="Rankedlist"><a class="active" href="RankedList.php">Rangliste</a></li>
                <li class="news"><a href="news.php">News</a></li>
                <li class="impressum"><a href="impressum.php">Impressum</a></li>
                <li class="logout"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    </body>

    </html>

    <?php
} else {
    ?>
    /*direkte weiterleitung mit header wie in index.php*/
    Bitte erste einloggen, <a href="index.php">hier</a>.
    <?php
}
?>
