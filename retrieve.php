<?php
include_once 'database.php';
$result = mysqli_query($con,"select * from patients_record");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>All Patients</title>
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		
	<style rel="stylesheet">
		table {
			background-color:rgba(250,250,250,255);
			font-family:Arial;
		}
		tr {	
			padding:20px;
			border:2px solid black;
		}
		td {
			padding:10px;
			border:2px solid black;
		}
		tr:nth-child(even){
			background-color:rgba();
		}
		tr:nth-child(1){
			background-color:green;
			font-family:Arial;
			color:white;
			font-size:23;
		}
			
		#datatable {
				display:block;
				position:relative;
				max-width:auto;
				margin-left:5%;
				margin-right:5%;
				height:auto;
				padding:30px;
				border-radius:2rem;
				background:white;
		}
			
			tr {
				height:50px;
			}
			table {
				font-family: Arial;
			}
			
			#container {
				display:block;
				position:absolute;
				width:70%;
				height:auto;
				margin-left:15%;
				margin-top:14%;
				background:rgb(240, 240, 240);
			}
			
			#container h2 {
				font-family:Arial;
				display:block;
				position:relative;
				width:30%;
				margin-left:35%;
			}
			#header {
				display:block;
				position:absolute;
				width:100%;
				height:30%;
				margin-left:-8px;
				margin-top:-8px;
				background-image: url(header-image.jpg);
			}
			#mainheader {
				display:block;
				color:white;
				position:absolute;
				font-family:Arial;
				font-size:20px;
				padding-left:40px;
				padding-top:35px;
			}
			
			#menu {
				display:block;
				position:relative;
				width:auto;
				margin-left:40%;
				margin-top:10%;
				color:white;
				background:black;
				border-radius:0.6rem;
				font-family: Arial;
			}
			#menu li {
				font-family:Arial;
				display:inline-block;	
				position:relative;
				color:white;
				height:50px;
				padding-right:15px;
				padding-left:15px;
				padding-top:10px;
				padding-bottom:-5px;
				vertical-align: middle;
				transition-duration:500ms;
			}
			
			#menu li:hover {
				background-color:white;
			}
			#menu li a {
				color:white;
				text-decoration: none;
			}
			#menu li a:hover {
				color:red;
			}
		
	</style>	
	</head>
	<body>
		<div id="header">
			<div id="mainheader"><h1>Patient Records Portal</h1></div>
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="insert.php">Register</a></li>
				<li><a href="retrieve.php">All Patients</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="delete.php">Delete Record</a></li>
				<li><a href="update.php">Update Record</a></li>

			
			</ul>
		</div>
		
		<div id="container">
			<h2>All Patients</h2>
		<div id="datatable">
			<?php
		if(mysqli_num_rows($result) > 0) {
		?>
		<table>
			<tr>
				<td>ID</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>City</td>
				<td>Age</td>
				<td>Date of Consultation</td>
				<td>Phone No</td>
				<td>Blood Group</td>
				<td>Disease</td>
				<td>Doctor</td>
			</tr>
		<?php
			$i=0;
			while($row=mysqli_fetch_array($result)) {
		?>
			<tr>
				<td><?php echo $row["id"]; ?></td>				
				<td><?php echo $row["fname"]; ?></td>
				<td><?php echo $row["lname"]; ?></td>
				<td><?php echo $row["city"]; ?></td>
				<td><?php echo $row["age"]; ?></td>	
				<td><?php echo $row["dateofconsult"]; ?></td>			
				<td><?php echo $row["phone"]; ?></td>			
				<td><?php echo $row["blood"]; ?></td>			
				<td><?php echo $row["disease"]; ?></td>	
				<td><?php echo $row["doctor"]; ?></td>			

			</tr>
			<?php
				$i++;
				}
			?>
		</table>
		<?php
		}
		else
		{
			echo "No result found";
		}
		?>
			
		</div>
		
		</div>
	</body>
</html>