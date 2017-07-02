<?php

session_start();

if (isset($_SESSION["name"])) {
?>

<html>
<head>
    <!-- Einbinden von Css Sheet um Website Mobilde responsive zu Gestalten -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Verlinken der Css Dateien -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navBar.css">
</head>
<title>News</title>
<body>
    <!-- Navigation einfügen und verlinken -->
<header>
    <div class="nav">
        <ul>
            <li class="home"><a href="hangman.php">Home</a></li>
            <li class="rankedlist"><a class="active" href="RankedList.php">Rangliste</a></li>
            <li class="news"><a href="news.php">News</a></li>
            <li class="impressum"><a href="impressum.php">Impressum</a></li>
            <li class="logout"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<section>


    <!-- Impressumtext einfügen, Hier wurde mit Absicht eine normale Überschrift gewählt! -->
    <div class="text-center">
        <br>
        <br>
        <br>
        <br>
        <h1>Impressum</h1>
        <p><strong>Betreiber:</strong><br />Max Mustermann<br />Musterstraße 1<br />80999 München</p>
        <br>
        <p><strong>Kontakt:</strong><br />Telefon: 089/1234567-8<br />Telefax: 089/1234567-9<br />E-Mail: mail@mustermann.de<br />Website: www.mustermann.de</p>
        <br>
        <p><strong>Bei redaktionellen Inhalten:</strong></p>
        <p>Verantwortlich nach § 55 Abs.2 RStV<br />Moritz Schreiberling<br />Musterstraße 2<br />80999 München</p>
    </div>
</section>


</body>
</html>
    <!-- Falls Session unterbrochen wird, zurück zum Log in (Index.php)-->
    <?php
} else {
    ?>


    <?php
    header( "Location: index.php");
}
?>
