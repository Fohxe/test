
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<title>Result</title>
	</head>
	<body>
		<form method="post" action="UpdateProduct.php">

			<fieldset class="fieldset-width">
				<legend>
					Enter Product Details
				</legend>
				<input type="hidden" name="hideProductID" value="16" />
				<label for="txtProductName">Product Name: </label>
				<input type="text" name="txtProductName"  value="Calendar"/>
				<br />
				<br />
				<label for="txtProductPrice">Price: </label>
				<input type="text" name="txtProductPrice" value="13" />
				<br />
				<br />
				<label for="txtProductImage">Image Filename: </label>
				<input type="text" name="txtProductImage"  value="calendar.jpg"/>

			</fieldset>

			<input type="submit" value="Submit" name='submit' />
			<input type="reset" value="Clear" />
		</form>
	</body>
</html>