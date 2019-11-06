<?php
//Make connection to database
include 'connection.php'; 
//Gather id from $_GET[]
$id = $_GET['ProductID'];
//Construct DELETE query to remove record where WHERE id provided equals the id in the table
if (isset($_GET['ProductID']) && is_numeric($_GET['ProductID']))
{
//run $query
$result = mysql_query("DELETE FROM products WHERE ProductID=$id")

or die(mysql_error());
// check to see if any rows were affected

if (mysqli_affected_rows($connection) > 0) {

      //If yes , return to calling page(stored in the server variables)
      header("Location: {$_SERVER['HTTP_REFERER']}");

}
?>