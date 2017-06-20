<?php

session_start();

if (isset($_SESSION["name"])) {
    ?>

    <html>
    <head><link rel="stylesheet" href="css/bootstrap.css">
        <title>Mein Bereich</title>
    </head>

    <title>Mainpage</title>

    <body>

    <div class="container-fluid">
        <div class="text-center"><h1>HANGMAN WARS</h1></div>

        <div class="text-center">
            <div class="row">
                <div class="col-md-6"><h2><a href="RankedList.php">Rangliste</a></h2></div>
                <div class="col-md-6"><h2><a href="logout.php">Ausloggen</a></h2></div>
            </div>
        </div>
    </div>

    <!--<div class="col-md-3">Hallo <?php echo $_SESSION["name"];?></div> -->
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
