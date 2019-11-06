<?php


// Database Variables //

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'c3508658';

$connection = mysql_connect($server, $user, $pass)

or die ("Cannot Connect to the Server .. \n" . mysql_error ());

mysql_select_db($db)

or die ("Cannot Connect to the Server ... \n" . mysql_error ());





?>