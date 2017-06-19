
<?php
/**
 * Created by PhpStorm.
 * User: Johnny
 * Date: 19.06.2017
 * Time: 20:22


$db = mysqli_connect("127.0.0.1","root","","Hangman");
if(!$db)
{
    exit("Verbindungsfehler: ".mysqli_connect_error());
}*/
?>

<?php
$abfrage = "SELECT wordname FROM Words";
$ergebnis = mysqli_query($db,$abfrage);
while($row = mysqli_fetch_object($ergebnis))
{echo $row->wordnmae;
}
?>