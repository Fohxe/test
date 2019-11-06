<?php
	session_start();
	include ('connection_server.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to The System</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="number1-wrapper">
		<center><h2>Welcome Back</h2></center>
		<center><h3>User:  <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/rsz_computer.png" alt="Computer" class="computer">
			</div>
			<div class="main_container">
				<a href= "index.php" <button type ="button" class="outoption_button">Log Out</button>
				<a href="ViewRecords.php"><button type="button" class="continue_button">Continue </button></a>
			</div>
		</form>
	</div>
</body>
</html>