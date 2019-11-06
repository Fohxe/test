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
         <h1>Fundamentals of PHP</h1>
         <?php

echo "Ben Thomson"; 
echo "<br>";
echo "C3508658";
echo "<br>";
echo "<strong>My first PHP</strong>";
echo "<br>";
echo "<h1>Using Escape Characters</h1>";
echo "<br>";
print "“most programmers say it’s better to use ‘echo’ rather than ‘print’” says who?";
echo "<br>";
echo "<h1> Variables </h1>";
echo "<br>";
$name = 'David';
$age = '12';
echo 'Hi my name is '.$name. ' and I am '.$age.'years old.';
echo "<br>";
echo "Mi nombre es $name y tengo $age anos de edad";
echo "<br>";
echo "<h1> Functions </h1>";
echo "<br>";
//gettype()returns... Gets the variable type which in this case is a string
echo gettype($name);
echo '<br />';
//strlen() returns...  Gets the length of the $name variable which in this case is 5 (David)
echo strlen($name);
echo '<br />';
//strtoUpper()returns... Changes the $name variable upper case ..
echo strtoUpper($name);
echo "<br>";
echo "<h1> Arithmetic </h1>";
$num1 = 9;
$num2 = 12;
$multiply = $num1 * $num2;
echo $multiply;
$percentage = $num1 / $num2 * 100;
echo "<br>";
echo "$percentage %";
$divide = $num2 / $num1;
echo "<br>";
echo $divide;
echo "<br>";
echo "<h1> Select </h1>";
//$day = date('l'); //that is a lower case L
$day = date('l');

if ($day =='Wednesday')
{
echo 'midweek';
}
else
{
    echo 'not midweek';
}
echo '<br>';

$time = date('H');

if ($time < '12')
{
    echo 'Good Morning';
}
// else if ($time = 12 to 18)
// {echo 'Good Afternoon'}

else if ($time > '18');
    {   echo 'Good Night';
    }

echo '<br>';

$password = 'password';

if (strlen($password) > 4) 
{
    echo 'Password is Valid';
}
else {
    echo 'Password is Invalid';
}

echo '<br>';

if ($password=='password')
{
    echo ' Password Valid';
}
else if ($password== 'username')
{
    echo 'Password Valid';
}

?>
		?>
      </section>
      <footer>   
         <small> <a href="../watIndex.php">Home</a></small>
      </footer>
   </body>
</html>



