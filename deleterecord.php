<?php
include_once 'database.php';
if(isset($_POST['delete']))
{
	$fname = $_POST['fname'];
	$phone = $_POST['phone'];
	
	$sql = "delete from patients_record where fname='$fname' and phone='$phone'";
	
	if (mysqli_query($con,$sql))
	{
		echo "New record created successfully!";
	}
	else
	{
		echo "Error: " . $sql . " " . mysqli_error($con);
	}
	mysqli_close($con);
}

header("Location: retrieve.php");

?>