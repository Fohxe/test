<?php 
include_once("connection.php");

$query = "SELECT * FROM products"; 

$result = mysqli_query($connection, $query)  or exit ("Error in query: $query. ".mysqli_error()); 

while ($row = mysqli_fetch_assoc($result))    { 

echo "<tr>"; 

echo "<td>".$row['ProductID']."</td>"; 

echo "<td>".$row['ProductName']."</td>"; 

echo "<td>".$row['ProductPrice']."</td>"; 

echo "<td><a href=DeleteProduct.php?id=".$row["ProductID"].">Delete</a></td>"; 

echo "</tr>";
}
?>
     		