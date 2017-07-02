

<html>
<head>
    <title>
        register
    </title>
    <!-- Viewport für Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scaleable=no">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/textstyle.css">
    <script type="text/javascript" src="js/login.js"></script>
</head>
<body>


<br>
<div class="hit-the-floor"><h1>Hangman Wars!</h1></div>



<div class="passwortcheck">
    <?php
    $errorUserNameExists = false;

    if (isset($_POST["submit"])){
            //wenn alle werte nicht null sind

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
