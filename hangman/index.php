<?php
	session_start();
    require_once('dbconfig/config.php'); //require lassen und umbauen!

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
<<<<<<< HEAD


=======
>>>>>>> c0755d8ec918fe1d385d987f8513545786ef0710
<title>Login Page</title>

</head>
<body>
<div class="container-fluid">
    <div class="col-sm-offset-2 col-sm-10">
        <h1>HANGMAN WARS</h1>
        <br>
        <br>
    </div>

<<<<<<< HEAD
=======




    <div class="form-horizontal">
        <form action="index.php" method="post">

            <div class="form-group">

                <label for="nickname" class="col-sm-2 control-label">Nickname: </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="maxmustermann" name="nickname" required><br />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Passwort: </label>
                <div class="col-sm-3">
                    <input type="password" class="form-control"  placeholder="passwort eingaben"  name="password" required><br />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-default" name="login" type="submit">Einloggen</button>
                <a href="register.php"><button type="button" class="btn btn-default">Registrieren</button></a>
                    </div>
            </div>


        </form>
    </div>

>>>>>>> c0755d8ec918fe1d385d987f8513545786ef0710
</div>



<br>
<br><br>

		<?php
			if(isset($_POST['login']))
			{
				$username=mysqli_escape_string($con, $_POST['nickname']); //für andere wiederhohlen
				//$password=$_POST['password'];
				$password = mysqli_escape_string($con, ($_POST['password']));

				$hash = hash('sha256', $password);

				$query = "select * from user where nickname='$username' and password='$hash' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['name'] = $username;
					//$_SESSION['password'] = $password; muss ich doch nicht an die session übergeben oder?

					
					header( "Location: hangman.php");

					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
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
			mysqli_close($con);

		?>

		

</body>
</html>