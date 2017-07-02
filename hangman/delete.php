<?php
/**Einbinden von Datenbank via Datei db_newconnection.php **/

include "db_newconnection.php";
$ordiestring = "<p><strong>PHP Info: </strong>Abfrage war nicht möglich.</p>";


//Übergabe des Buttons an die Delete Methode

If (isset($_POST['delete'])) {

    $deletescore = "DELETE FROM Scores WHERE score<5000";

    mysqli_query($deletescore);
}
mysqli_close($tunnel);


