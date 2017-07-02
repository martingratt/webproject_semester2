<?php

session_start();

if (isset($_SESSION["name"])) {
?>

<html>
<!-- Verlinken der Css Dateien -->
<head>
    <!-- Einbinden von Css Sheet um Website Mobilde responsive zu Gestalten -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/rankedList.css">
    <link rel="stylesheet" href="css/textstyle.css">
</head>
<body>
<header>
    <!-- Navigation eingefügt und verlinked-->
    <div class="nav">
        <ul>
            <li class="home"><a href="hangman.php">Home</a></li>
            <li class="rankedlist"><a class="active" href="RankedList.php">Rangliste</a></li>
            <li class="news"><a href="news.php">News</a></li>
            <li class="impressum"><a href="impressum.php">Impressum</a></li>
            <li class="logout"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<section>
    <!-- Überschrift, Hit The floor = Überschriftsdesign-->
    <br>
    <br>
    <div class="hit-the-floor"><h1 class="text-center">Highscore:</h1></div>
    <br>
    <br>

    <!-- Datenbankverbindung öffnen-->
<?php
/**Einbinden von Datenbank via Datei db_newconnection.php **/

include "db_newconnection.php";
$ordiestring = "<p><strong>PHP Info: </strong>Abfrage war nicht möglich.</p>";




?>
    <!--Abfragen des Highscores und dem dazugehörigen Username-->
<?php
$rankedlist = "SELECT p.nickname AS nickname,
                      s.score AS score
                      FROM `user` p
                      LEFT JOIN Scores s
                      ON p.userid = s.userid
                      ORDER BY s.score DESC
                      Limit 15";

$result = mysqli_query($tunnel,$rankedlist);




/**
  Fehlerausgabe falls die Ausgabe nicht funktioniert!



if(!$result)
{
    echo mysqli_error($tunnel);
}



//Überprüfung ob Wert Übergeben wurde



/*$uid = (isset($_POST['score'])) ? $_POST['score'] : 0;

if($uid==0) {
    echo 'Score not found';
}
*/
?>



    <!-- Auslesen des Highscores in der Javascript Awendung, userid auslesen, zusammen in die Scoretabelle eintragen -->

    <script src="GameCode/jquery.min.js"></script>
    <?php

If (isset($_POST['score']))
{
    $highscore = $_POST['score'];
    $userID ="SELECT userid FROM `user` ";

    $sql2= "INSERT INTO Scores (userid, score) VALUES ('" . $userID . "','" . $highscore . "')";
    $sql2=mysqli_query($tunnel,$sql2);
    if(!$sql2)
    {
        echo mysqli_error($tunnel);
    }

}
?>


<?php

//Ausgabe Name und Score

echo "<table class='table-responsive'>";
echo "<td><strong>","Th.","</strong></td>";
echo "<td><strong>","NICKNAME","</strong></td>";
echo "<td><strong>","SCORE","</strong></td>";
$highscorenumber=1;
while($row2 = mysqli_fetch_object($result))
{
    echo "<tr>";
    echo "<td>",$highscorenumber++,"</td>";
    echo "<td>",$row2->nickname,"</td>";
    echo "<td>",$row2->score,"</td>";
    echo "</tr>";
}
echo "</table>";
?>

</section>
</body>
</html>

    <!-- Datenbankverbindung schließen-->
<?php

mysqli_close($tunnel);
?>

<?php
} else {
    ?>

    <!-- falls session unterbrochen wird, zurück zum log in(index.php)-->

    <?php
    header( "Location: index.php");
}
?>

