<?php
	session_start();
    require_once('dbconfig/config.php');
    //das könne noch auf db_newconnection geändert werden und die abfrage umgebaut werden

?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

</head>


	<h2>Login Form</h2>

    <form action="index.php" method="post">
        <label for "nickname>Nickname: </label>
        <input type="text" placeholder="maxmustermann" name="nickname" required><br />
        <label for="password">Passwort: </label>
        <input type="password" placeholder="passwort eingaben" name="password" required><br />
        <button class="login_button" name="login" type="submit">Login</button>
        <a href="register.php"><button type="button" class="register_btn">Register</button></a>
    </form>


		
		<?php
			if(isset($_POST['login']))
			{
				$username=$_POST['nickname'];
				//$password=$_POST['password'];
				$password = ($_POST['password']);

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
					
					$_SESSION['username'] = $username;
					//$_SESSION['password'] = $password; muss ich doch nicht an die session übergeben oder?

					
					header( "Location: hangman.php");
                        $_SESSION["name"] = $username;
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
		?>
		

</body>
</html>