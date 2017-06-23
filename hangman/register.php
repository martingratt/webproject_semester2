

<html>
<head>
    <title>
        register
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="col-sm-offset-2 col-sm-10">
    <h1>Registrierung</h1>
    <br>
    <br>
</div>

<form action="register.php" type="submit" method="post">

    <div class="form-horizontal">

        <div class="form-group">
            <label for ="nickname" class="col-sm-2 control-label">Nickname</label>
            <div class="col-sm-3">
                <input type="text" name="nickname" class="form-control" placeholder="maxmustermann" required>
            </div>
        </div>

        <div class="form-group">
            <label for ="nickname" class="col-sm-2 control-label">Passwort</label>
            <div class="col-sm-3">
                <input type="password" name="passwort" class="form-control" placeholder="Meinpassword1" required>
            </div>
        </div>

        <div class="form-group">
            <label for ="nickname" class="col-sm-2 control-label">Passwort wiederhohlen</label>
            <div class="col-sm-3">
                <input type="password" name="passwortwh" class="form-control" placeholder="Meinpassword1" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="Registrierern" name="submit"/>
            </div>
        </div>

    </div>


    <div class="col-sm-offset-2 col-sm-10">
        <?php
        $errorUserNameExists = false;

        if (isset($_POST["submit"])){

            //werte prüfen - evtl. einfügen wenn alles passt
            //falls was nicht passt - error setzen
            require_once('insertNewPlayer.php');
        }
        ?>
    </div>

</form>

</body>

</html>
