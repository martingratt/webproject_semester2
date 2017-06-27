<?php

require_once ("classes/Database.php");

$ordiestring = "<p><strong>PHP Info: </strong>Abfrage war nicht möglich.</p>";

$db1 = new Database();

session_start();

//alles klein
$nickname = mysqli_escape_string($db1, strtolower($_POST["nickname"]));
//verschlüsselung
$passwort = mysqli_escape_string($db1, $_POST["passwort"]);
$passwortwh = mysqli_escape_string($db1, $_POST["passwortwh"]);



/* eingaben wurden gelöscht : mysqli_escape_string($db1, $_POST["passwortwh"]); für alle eingaben, fehlercode unten erschien
 *
 * mysqli_escape_string() expects parameter 1 to be mysqli, object given in C:\xampp\htdocs\webproject_semester2\hangman\insertNewPlayer1.php on line 22
Achtung! Passwörter stimmen nicht überein
 */

$hash = hash('sha256', $passwort);

//Vergleich ob alle Datensätze ausgefüllt wurden

if ($passwort == $passwortwh){

    if ($_POST["passwort"] == NULL){
        echo "passwort ist leer";
    } else {
        //Passwortüberprüfung mit Pattern
        if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $_POST['passwort']))
        {
            echo 'Das Passwort entspricht nicht den Sicherheitsbestimmungen!<br>
                              Das Passwor muss aus folgenden Bestandteilen bestehen:<br>
                              - mindestens 8 Buchstaben<br>
                              - Groß und Kleinbuchstaben<br>
                              - Zahlen<br>
                              - Es sollte nach Möglichkeit auch mindestens ein Sonderzeichen enthalten!';
        } else {
            //schreib in die db
            $control = 0;

            $sql = "SELECT nickname FROM user WHERE nickname = '$nickname'";

            $result = $db1->query($db1, $sql);



            //$result = mysqli_query($db1, $sql) or die($ordiestring);

            while ($row = mysqli_fetch_object($result)) {
                $control++;

            }
            if ($control != 0) {
                $errorUserNameExists = true;
                echo "<p>Username <strong>$nickname</strong> existiert bereits! Versuchen sie einen andern...</p>";

            } else {


                $sql = "INSERT INTO user (nickname, password) VALUES ('" . $nickname . "', '" . $hash . "');";

                $result = $db1->query($sql);

                $result = mysqli_query($db1, $sql);

                echo "<p>Ihr Benutzer wurde erfolgreich angelegt, melden Sie sich jetzt an <a href='index.php'>Anmelden</a> </p>";


            }
        }
    }

} else {

    echo "Achtung! Passwörter stimmen nicht überein";

}

mysqli_close($db1); //schliesen nachdem

?>


