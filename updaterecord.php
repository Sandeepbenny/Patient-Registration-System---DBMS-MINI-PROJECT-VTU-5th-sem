<?php
include_once 'database.php';
if(isset($_POST['update']))
{
	$fname = $_POST['fname'];
	$phone = $_POST['phone'];
	$newphone = $_POST['newphone'];
	$newage = $_POST['newage'];
	$newdisease = $_POST['newdisease'];
	$newdoctor = $_POST['newdoctor'];
	$newdate = $_POST['newdate'];
	$newcity = $_POST['newcity'];
	
	
	$sql = "update patients_record set phone='$newphone',age='$newage',
	disease='$newdisease',doctor='$newdoctor',dateofconsult='$newdate',city='$newcity' where fname='$fname' and phone='$phone'";
	
	if (mysqli_query($con,$sql))
	{
		echo "Record Updated successfully!";
	}
	else
	{
		echo "Error: " . $sql . " " . mysqli_error($con);
	}
	mysqli_close($con);
}

header("Location: retrieve.php");

?>