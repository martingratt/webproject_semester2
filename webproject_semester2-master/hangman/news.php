<?php

session_start();

if (isset($_SESSION["name"])) {
?>

<html>

<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/textstyle.css">
</head>
<title>News</title>
<body class="news">
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

    <div class="text-center">
        <br>
        <br>
        <div class="hit-the-floor"><h1>Breaking News</h1></div>
        <h2>Verhaftet wegen Sexy:</h2>
        <p>Es gibt viele Gründe kein Real Madrid Fan zu sein, einer der Gründe finden Sie unter diesem wunderschönen Textparagraphen!
        <br>
    Falls ihr euch Fragen solltet was die mit Hangman zu tun hat, es ist ganz einfach: Hausverstand schadet nie!</p>
    </div>
</section>
<aside>
    <div class="text-center">
    <img title="Wahrer Ultra" alt="Wahrer Ultra" src="Images/MartinGatt.jpg" width="550" height="740"/>
    </div>
</aside>
</body>
</html>
<?php
} else {
    ?>


    <?php
    header( "Location: index.php");
}
?>
