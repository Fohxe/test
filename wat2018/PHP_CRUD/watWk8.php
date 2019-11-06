<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Manage Products</h1> 
      </header>
      <table border=1><tr><th>Name</th><th>Price</th><th>Image</th><th>Amend</th><th>Delete</th></tr><tr><td>Mugs</td><td>3.99</td><td><img src="images/mug.jpg" /></td><td><a href="AmendProduct.php?id=1">Amend</a></td><td><a href="DeleteProduct.php?id=1">Delete</a></td></tr><tr><td>T-Shirt</td><td>11.99</td><td><img src="images/tshirt.jpg" /></td><td><a href="AmendProduct.php?id=2">Amend</a></td><td><a href="DeleteProduct.php?id=2">Delete</a></td></tr><tr><td>Book</td><td>6.99</td><td><img src="images/book.jpg" /></td><td><a href="AmendProduct.php?id=15">Amend</a></td><td><a href="DeleteProduct.php?id=15">Delete</a></td></tr><tr><td>Calendar</td><td>11.99</td><td><img src="images/calendar.jpg" /></td><td><a href="AmendProduct.php?id=16">Amend</a></td><td><a href="DeleteProduct.php?id=16">Delete</a></td></tr><tr><td>Cap</td><td>6.99</td><td><img src="images/cap.jpg" /></td><td><a href="AmendProduct.php?id=17">Amend</a></td><td><a href="DeleteProduct.php?id=17">Delete</a></td></tr></table>

      <section id="container">
         <p>
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
		</p>
      </section>
      <footer>   
         <small> <a href="WATindex.php">Home</a></small>
         <small> <a href="create.php">Recreate Table</a></small>
      </footer>
   </body>
</html>
