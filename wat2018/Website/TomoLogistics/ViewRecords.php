
<html>

<head>

<title>View All Employees</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body id = "viewrecords-page">



<?php

/*

VIEW.PHP

Displays all data from 'Employee' table

*/



// connect to the database

include('connection_server.php');



// get results from database

$result = mysql_query("SELECT * FROM employee")

or die(mysql_error());



// display data in table

echo "<table border='2' cellpadding='9'>";

echo "<tr> <th>Employee ID</th> <th>First Name</th> <th> Last Name</th> <th></th> <th></th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['firstname'] . '</td>';

echo '<td>' . $row['lastname'] . '</td>';

echo '<td><a href="EditRecords.php?id=' . $row['id'] . '">Edit Employee</a></td>';

echo '<td><a href="DeleteRecords.php?id=' . $row['id'] . '">Delete Employee</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<a href="NewRecords.php"><button type="button" class="continue_btn">New Record </button></a>
<a href="index.php"><button type="button" class="back_btn">Log Out</button></a>



</body>

</html>