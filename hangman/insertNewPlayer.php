<?php

        include "db_newconnection.php";
        $ordiestring = "<p><strong>PHP Info: </strong>Abfrage war nicht möglich.</p>";

        //alles klein
        $nickname = strtolower($_POST["nickname"]);
        //verschlüsselung
        $passwort = $_POST["passwort"];
        $passwortwh = $_POST["passwortwh"];

        $hash = hash('sha256', $passwort);

        //Vergleich ob alle Datensätze ausgefüllt wurden

            if ($passwort == $passwortwh){

                    if ($_POST["passwort"] == NULL){
                        echo "passwort ist leer";
                    } else {


                        $control = 0;

                        $sql = "SELECT nickname FROM user WHERE nickname = '$nickname'";

                        $result = mysqli_query($tunnel, $sql) or die($ordiestring);

                        while ($row = mysqli_fetch_object($result)) {
                            $control++;

                        }
                        if ($control != 0) {
                            echo "<p>Username <strong>$nickname</strong> existiert bereits! Versuchen sie einen andern... <a href='register.php'>zurück</a> </p>";

                        } else {
                            echo "Speicherung in DB";

                            $sql = "INSERT INTO user (nickname, password) VALUES ('" . $nickname . "', '" . $hash . "');";

                            echo "<p><strong>PHP Info: </strong>" . $sql . "</p>";

                            $result = mysqli_query($tunnel, $sql);

                            echo "<p>Ihr Benutzer wurde erfolgreich angelegt, melden Sie sich jetzt an <a href='index.php'>Anmelden</a> </p>";


                        }
                    }

            } else {


                echo "Achtung! Passwörter stimmen nicht überein";
                echo "Passwort 1: " . $passwort . " Passwort 2: " . $passwortwh;

            }

            mysqli_close($tunnel);



?>


