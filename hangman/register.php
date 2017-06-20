<?php

?>

<html>
<head>
    <title>
        register
    </title>
</head>
<body>

<?php
$errorUserNameExists = false;

if (isset($_POST["submit"])){

        //werte prüfen - evtl. einfügen wenn alles passt
        //falls was nicht passt - error setzen
        require_once('insertNewPlayer.php');
    }
?>

<h2>Insert new Player</h2>

<form action="register.php" type="submit" method="post">

    <?php if($errorUserNameExists): ?>
    <p>Der Benutzer existiert bereits - bitte einen anderen wählen</p>
    <?php endif; ?>
    <p>Nickname: <input type="text" name="nickname"/></p>
    <p>Passwort: <input type="password" name="passwort"/></p>
    <p>Passwort wiederhohlen: <input type="password" name="passwortwh"/></p>

    <input type="submit" value="Save to DB" name="submit"/>



</form>
</body>
</html>
