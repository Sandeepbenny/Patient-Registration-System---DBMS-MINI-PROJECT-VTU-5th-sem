<?php
$ser="localhost";
$user="root";
$pass="";
$db="patientsdb";

$con=mysqli_connect($ser, $user, $pass, $db);

if(!$con)
{
	die("Could not connect:" .mysql_error());
}
?>
