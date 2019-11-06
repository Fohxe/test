<?php
//Make connection to database
include 'connection.php';
//Display heading
echo '<h2>Select ALL from the Customer Table</h2>';
//run query to select all records from customer table
$query="SELECT * FROM Customers";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}
echo '<h2> Select ALL from Customer Table with Age > 22 </h2>';
$query="SELECT * FROM `Customers` WHERE Age > 22";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].''.$row['Age'].'<br />';
}
echo '<h2> Select Females from the Customer Table with Age >=22 </h2>';
$query="SELECT * FROM `Customers` WHERE Gender ='F' AND Age >=22";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].''.$row['Age'].''.$row['Gender'].'<br />';
}
echo '<h2> Select Males from the Customer Table list by age descending</h2>';
$query="SELECT * FROM `Customers` WHERE Gender ='M' ORDER BY Age DESC";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].''.$row['Age'].''.$row['Gender'].'<br />';
}
echo '<h2> Select All with "A" beginning in First Name</h2>';
$query="SELECT * FROM `Customers` WHERE FirstName LIKE 'a%'";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].''.$row['Age'].''.$row['Gender'].'<br />';
}
?>
