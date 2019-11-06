<?php
//Make connection to database
include 'connection.php';
//(a)Gather from $_POST[]all the data submitted and store in variables
$firstname =$_POST['txtFirstName'];
$surname =$_POST['txtSurName'];
$email =$_POST['txtEmail'];
$password =$_POST['txtPass'];
$gender =$_POST['gender'];
$age =$_POST['txtAge'];
$query="INSERT INTO Customer (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$firstname', '$surname','$email','$password','$gender','$age'.)";
//(b)Construct INSERT query using variables holding data gathered



//Temporarily echo $query for debugging purposes	

			echo $query;
			exit();
//run $query
		mysqli_query($connection, $query);	
?>
