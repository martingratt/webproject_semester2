<?php

require_once "classes/Database.php";

/*$host = "127.0.0.1";
$user = "root";
$pw = "";
$database = "Hangman"; -----------> brauche ich eigentlich nicht da ich das schon im Standard Konstruktor habe, oder?*/

$db = new Database(/*$host, $database, $user, $pw*/);//hier die gleich vermutung wie oben, falls ich eine andere Datenbank ansprechen will übergebe ich die Werte den Konstruktor

session_start();

if(isset($_POST['login']))
{



    $username = $db->escapeString(strtolower($_POST['nickname'])); //Injectionsicherheit

    $password = $db->escapeString($_POST['password']);

    $hash = hash('sha256', $password); //verschlüsselung

    //überprüfen ob der username mit dem passwort existiert

    $query = "select * from user where nickname='$username' and password='$hash' ";

    //übergabe in methode query
    $query_run = $db->query($query);
    //wenn die query richtig läuft /ergebnis liefert
    if($query_run)
    {

        if($db->numRows($query_run)>0) //wenn mehr als 0 einträge vorhanden sind (also ein eintrag für den Benuter)
        {//mysql_num_rows — Liefert die Anzahl der Zeilen im Ergebnis
            $_SESSION['name'] = $username;
            header( "Location: hangman.php");
        }
        else
        {
            echo '<script type="text/javascript">alert("Falsche Anmeldedaten, versuchen Sie es erneut!")</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Database Error")</script>';
    }
}
else
{

}

?>

<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="css/textstyle.css">

    <script type="text/javascript" src="js/login.js"></script>

    <title>Login Page</title>

</head>

<body>

<div class="hit-the-floor"><h1>Hangman Wars!</h1></div>

<div class="login-page">

    <div class="form">

        <form action="index.php" method="post">

            <input type="text" placeholder="Nickname" name="nickname" required/>

            <input type="password" placeholder="Passwort" name="password" required/>

            <button class="btn btn-default" name="login" type="submit">Einloggen</button>

            <p class="message">Noch nicht registriert? <a href="register.php">Werde jetzt Mitglied</a></p>

        </form>

    </div>

    <br><br><br>

</body>

</html>