<?php error_reporting(E_ALL);?>
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
    <h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="GET" action="watWk5.php">
<fieldset>
		<legend>
			Login
		</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
	</fieldset>
</form>

<form method="post" action="watWk5.php">
	<fieldset>
		<legend>Comments</legend>
		<label for="emaill">Email: </label>
		<input type="text" name="emaill" id="emaill"/><br />
		<textarea rows="4" cols="50" name="comments" id="comments">Comment</textarea><br />
		<label for="confirm">Click to Confirm: </label>
		<input type="checkbox" name="checkbox" value="agree" id="checkbox"><br />
		<input type="submit" value="Submit" name=""/>
		<input type="reset" value="Clear" />
		</form>
	</fieldset>
</form>

<h2>Comment Form using POST</h2>
         <?php
       if (isset($_GET['txtEmail'])&&isset($_GET['txtPass'])) {
        $email = $_GET['txtEmail'];
        $password = $_GET['txtPass'];
        if (!empty($email)&&!empty($password)) 
        {
            echo ' Email:'.$email.'  Password: '.$password.'';
        }     
            
            else {
                echo 'Fill in Email and password fields.';
            }
       }


		?>
	<?php
if (isset($_POST['email'])&&isset($_POST['comments'])) {
        $email1 = $_POST['emaill'];
        $comments = $_POST['comments'];
        $checkbox = $_POST['checkbox'];
        
        if (!empty($email1)&&!empty($comments)&&!empty($checkbox)) 
        {
            echo ' Email:'.$email.'  Comments: '.$comments.'Checkbox:'.$checkbox;
        }     
            
            else {
                echo 'Fill in Email and password fields.';
            }
       }
	?>
      </section>
      <footer>   
         <small> <a href="../watIndex.html">Home</a></small>
      </footer>
   </body>
</html>
