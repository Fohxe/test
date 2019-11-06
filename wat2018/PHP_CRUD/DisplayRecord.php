 <?php
  include 'connection.php';
  $id=$_GET['id'];
  $query = "SELECT * FROM products";
  $result = mysqli_query($connection, $query)  or exit ("Error in query: $query. ".mysqli_error()); ;

print "<h2>All Products </h2>";

print  "<table cellpadding=10 border=1>"; 

print  "<th>Product Name</th><th>Product Price</th><th>Product Image Name</th>";

while ($row = mysqli_fetch_assoc($result))    { 

echo "<tr>"; 

echo "<td>".$row['ProductName']."</td>"; 

echo "<td>".$row['ProductPrice']."</td>"; 

echo "<td>".$row['ProductImageName']."</td>"; 

echo "</tr>"; 

}


  ?>

 <table border=1><tr><th>Name</th><th>Price</th><th>Image</th><th>Amend</th><th>Delete</th></tr><tr><td>Mugs</td><td>3.99</td><td><img src="images/mug.jpg" /></td><td><a href="AmendProduct.php?id=1">Amend</a></td><td><a href="DeleteProduct.php?id=1">Delete</a></td></tr><tr><td>T-Shirt</td><td>11.99</td><td><img src="images/tshirt.jpg" /></td><td><a href="AmendProduct.php?id=2">Amend</a></td><td><a href="DeleteProduct.php?id=2">Delete</a></td></tr><tr><td>Book</td><td>6.99</td><td><img src="images/book.jpg" /></td><td><a href="AmendProduct.php?id=15">Amend</a></td><td><a href="DeleteProduct.php?id=15">Delete</a></td></tr><tr><td>Calendar</td><td>13</td><td><img src="images/calendar.jpg" /></td><td><a href="AmendProduct.php?id=16">Amend</a></td><td><a href="DeleteProduct.php?id=16">Delete</a></td></tr></table>
