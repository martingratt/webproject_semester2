<?php

session_start();

if (isset($_SESSION["name"])) {
    ?>

    <html>
    <head>
        <title>Mein Bereich</title>
    </head>
    <body>
    <h1>Hallo <?php echo $_SESSION["name"];?> </h1>
    <a href="logout.php">Ausloggen</a>
    <br></br>
    <a href="RankedList.php">Rangliste</a>
    </body>

    </html>

    <?php
} else {
    ?>
    Bitte erste einloggen, <a href="index.php">hier</a>.
    <?php
}
?>
