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
if (!isset($_GET["page"])){
?>


<h2>Insert new Player</h2>

<form action="insertNewPlayer.php" type="submit" method="post">
    <p>Nickname: <input type="text" name="nickname"/></p>
    <p>Passwort: <input type="password" name="passwort"/></p>
    <p>Passwort wiederhohlen: <input type="password" name="passwortwh"/></p>

    <input type="submit" value="Save to DB" name="submit"/>

    <?php
    }
    ?>


</form>
</body>
</html>
