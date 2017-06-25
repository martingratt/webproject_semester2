<?php

session_start();

if (isset($_SESSION["name"])) {
    ?>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/navBar.css">
        <link rel="stylesheet" href="css/HangmanWars.css">
        <link rel="stylesheet" href="css/textstyle.css">
        <script type="text/javascript" src="GameCode/jquery.min.js"></script>
        <title>Hangmanwars</title>
        <meta charset="UTF-8">
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
        <br>
        <br>
        <div class="hit-the-floor"><h1>Hangman Wars!</h1></div>

        <div id="container">

            <div id="header">
                <p> Sie haben noch <span id="lives">5</span> Leben

                    <br>

                    Das Wort umfasst <span id="numLetters">0</span> Buchstaben <br>
                    Ihr aktueller Score beträgt <span id="highscore">100000</span>

                </p>

                <h1 id="WORD">___________</h1>

            </div>



            <div id="letters">

                <a id="a">A </a>
                <a id="b">B </a>
                <a id="c">C </a>
                <a id="d">D </a>
                <a id="e">E </a>
                <a id="f">F </a>
                <a id="g">G </a>
                <a id="h">H </a>
                <a id="i">I </a>
                <a id="j">J </a>
                <a id="k">K </a>
                <a id="l">L </a>
                <a id="m">M </a>
                <a id="n">N </a>
                <a id="o">O </a>
                <a id="p">P </a>
                <a id="q">Q </a>
                <a id="r">R </a>
                <a id="s">S </a>
                <a id="t">T </a>
                <a id="u">U </a>
                <a id="v">V </a>
                <a id="w">W </a>
                <a id="x">X </a>
                <a id="y">Y </a>
                <a id="z">Z </a>


            </div>
        </div>

            <form>
                <input type="hidden" id="hiddenscore" name="Highscore"/>
            </form>


        <script type="text/javascript" src="GameCode/Wordbank.js"></script>

        <script type="text/javascript" src="GameCode/main.js"></script>

        <script type="text/javascript" src="GameCode/clickfunction.js"></script>

    </section>
    </body>

    </html>

    <?php
} else {
    ?>


    <?php
    header( "Location: index.php");
}
?>
