

<html>
<head>
    <title>
        register
    </title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/textstyle.css">
    <script type="text/javascript" src="js/login.js"></script>
</head>
<body>



<div class="hit-the-floor"><h1>Hangman Wars!</h1></div>



<div class="passwortcheck">
    <?php
    $errorUserNameExists = false;

    if (isset($_POST["submit"])){

        //werte prüfen - evtl. einfügen wenn alles passt
        //falls was nicht passt - error setzen
        require_once('insertNewPlayer.php');
    }
    ?>
</div>


<form action="register.php" type="submit" method="post">




    <div class="login-page">

        <div class="form">

            <form class="register-form" action="register.php" type="submit" method="post"">
                <input type="text" placeholder="Nickname" name="nickname" required/>
                <input type="password" placeholder="Passwort" name="passwort" required/>
                <input type="password" placeholder="Passwort wiederhohlen" name="passwortwh" required/>
                <button value="Registrierern" name="submit">Registieren</button>
                <p class="message">Schon registriert? <a href="index.php">Jetzt anmelden</a></p>
            </form>

        </div>
    </div>





</form>

</body>

</html>
