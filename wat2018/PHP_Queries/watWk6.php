<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Ben Thomson C3508658</h1> 
      </header>
      
      <section id="container">
         <h1>PHP Queries</h1>
        <form method="POST" action="insertRecord.php">
<fieldset>
		<legend>
			Enter Customer Details
		</legend>
		<label for="firstname">FirstName: </label>
		<input type="text" name="txtFirstName"/><br />
		<label for="surname">Surname: </label>
		<input type="text" name="txtSurName"/><br />
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<label for ="gender">Gender: </label>
	    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option> <br />
        </select> 
        <label for="age">Age: </label>
		<input type="text" name="txtAge"/><br />
        
</select>
	<input type="submit" value="Submit">
	<!---<input type="reset" value="Clear" />--->
	</fieldset>
</form>
        
        <?php

    	include 'selectRecord.php';
    ?>

      </section>
      <footer>   
         <small> <a href="../watIndex.html">Home</a></small>
      </footer>
   </body>
</html>
