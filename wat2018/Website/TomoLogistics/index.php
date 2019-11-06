<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="number1-wrapper">
	<center><h2>Login To The System</h2></center>
			<div class="imgcontainer">
				<img src="imgs/rsz_computer.png" alt="Computer" class="computer">
			</div>
		<form action="index.php" method="post">
		
			<div class="main_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="inoption_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="registration_butn">Register</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from user where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($connection,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: ./homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists in the System. Please enter a valid Username and Password")</script>';
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
		
	</div>
</body>
</html>