<?php



//Deletes a specific entry from the 'Employees' table//





// Adds Connection To Database

include('connection_server.php');




// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// gets value for ID

$id = $_GET['id'];



// runs Query to delete the Entry

$result = mysql_query("DELETE FROM employee WHERE id=$id")

or die(mysql_error());



// This redirects back to the original View page

header("Location: ViewRecords.php");

}

else

// if  the id is not set or is not valid, then it redirects to the original View Page

{

header("Location: ViewRecords.php");

}



?>