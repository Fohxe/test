<?php
//Make connection to database
 include 'connection.php';
//Gather from $_POST[]all the data submitted and store in variables
if(isset($_POST['submit'])){
    
//Construct INSERT query using variables holding data gathered
    $ProductName=$_POST['txtProductName'];
    $ProductPrice=$_POST['txtProductPrice'];
    $ProductImageName=$_POST['txtProductImageName'];
//run $query
  $query = "INSERT INTO products (ProductName, ProductPrice, ProductImageName) VALUES ('$ProductName', '$ProductPrice', '$ProductImageName')"; 

  $result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 
//return to calling page(stored in the server variables)
	header("Location: {$_SERVER['HTTP_REFERER']}");
}
?>

			<form method="post" action="InsertProduct.php">

				<fieldset class="fieldset-width1">
					<legend>
						Enter New Product Details
					</legend>
					<label class="align" for="txtProductName">Product Name: </label>
					<input type="text" name="txtProductName"  />
					<br />
					<br />
					<label class="align"for="txtProductPrice">Price: </label>
					<input type="text" name="txtProductPrice"  />
					<br />
					<br />
					<label class="align" for="txtProductImage">Image Filename: </label>
					<input type="text" name="txtProductImage"  />
					<br />
					<br />

					<input type="submit" value="Submit" name='submit' />
					<input type="reset" value="Clear" />
			</form>
