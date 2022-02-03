<?php
include_once 'database.php';
if(isset($_POST['save']))
{
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$cityname = $_POST['city'];
	$age = $_POST['age'];
	$date = $_POST['dateofconsult'];
	$phone = $_POST['phone'];
	$blood = $_POST['blood'];
	$disease = $_POST['disease'];
	$doctor = $_POST['doctor'];
	
	
	$sql = "insert into patients_record (fname,lname,city,age,dateofconsult,phone,blood,disease,doctor)
	values ('$firstname','$lastname','$cityname','$age','$date','$phone'
	,'$blood','$disease','$doctor')";
	
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