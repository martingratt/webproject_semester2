<?php

require_once ("classes/Database.php");
require_once ("classes/User.php");

$ordiestring = "<p><strong>PHP Info: </strong>Abfrage war nicht möglich.</p>";

$db1 = new Database();

$nickname = $db1->escapeString(strtolower($_POST['nickname'])); //injectionsicherheit + kleinschreibung

$passwort = $db1->escapeString($_POST['passwort']);

$passwortwh = $db1->escapeString($_POST['passwortwh']);

$hash = hash('sha256', $passwort); //verschlüsselung


if ($passwort == $passwortwh){

            //Passwortüberprüfung mit Pattern
        if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $_POST['passwort']))
        {
            echo 'Das Passwort entspricht nicht den Sicherheitsbestimmungen!<br>
                              Das Passwort muss aus folgenden Bestandteilen bestehen:<br>
                              - mindestens 8 Buchstaben<br>
                              - Groß und Kleinbuchstaben<br>
                              - Zahlen<br>
                              - Es sollte nach Möglichkeit auch mindestens ein Sonderzeichen enthalten!';
        } else {
            //schreib in die db
            $control = 0;

            $sql = "SELECT nickname FROM user WHERE nickname = '$nickname'";

            $result = $db1->query($sql);

            while ($db1->fetchObject($result)) {
                $control++;

            }
            if ($control != 0) {
                $errorUserNameExists = true;
                echo "<p>Username <strong>$nickname</strong> existiert bereits! Versuchen sie einen andern...</p>";

            } else {

                $sql = "INSERT INTO user (nickname, password) VALUES ('" . $nickname . "', '" . $hash . "');";

                $result = $db1->query($sql);

                //$result = mysqli_query($db1->getConn(), $sql);

                echo "<p>Ihr Benutzer wurde erfolgreich angelegt, melden Sie sich jetzt an <a href='index.php'>Anmelden</a> </p>";


            }
        }
    }

else {

    echo "Achtung! Passwörter stimmen nicht überein";

}

?>


