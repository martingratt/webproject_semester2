<?php

session_start();

if (isset($_SESSION["name"])) {
?>

<html>

<html>
<head>
    <!-- Viewport für Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scaleable=no">
    <!-- Verlinken der Css Dateien -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/textstyle.css">
</head>
<title>News</title>
<body>
<header>
    <!-- Navigation einfügen-->
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
    <!-- Überschrift einbinden, hit the floor ist das SStylesheet für die Schriftart-->
    <div class="text-center">
        <br>
        <br>
        <div class="hit-the-floor"><h1>Breaking News</h1></div>
        <!-- Text und zweite Überschrift-->
        <h2>Verhaftet wegen Sexy:</h2>
        <p>Es gibt viele Gründe kein Real Madrid Fan zu sein, einer der Gründe finden Sie unter diesem wunderschönen Textparagraphen!
        <br>
    Falls ihr euch Fragen solltet was die mit Hangman zu tun hat, es ist ganz einfach: Hausverstand schadet nie!</p>
    </div>
</section>
    <!-- Bild einfügen -->
    <!-- Falls der Mauszeiger auf das Bild zeigt, Wahrer Ultra anzeigen-->
    <div class="text-center">
    <img title="Wahrer Ultra" alt="Wahrer Ultra" src="Images/MartinGatt.jpg" width="550" height="740"/>
    </div>
</body>
</html>

<!--Falls die Session unterbrochen wird, zurück zum Log in(index.php)-->
<?php
} else {
    ?>


    <?php
    header( "Location: index.php");
}
?>
