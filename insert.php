<!DOCTYPE html>
<html>
	<head>
		<title>Register Patient</title>
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		
		<style rel="stylesheet">
			
			form {
				display:block;
				position:relative;
				width:30%;
				margin-left:35%;
				height:auto;
				padding:30px;
				border-radius:2rem;
				background:white;
				transition-duration:800ms;
			}
			form:hover {
				box-shadow: 2px 2px 5px lightgrey;
			}
			
			tr {
				height:40px;
			}
			table {
				font-family: Arial;
			}
			
			#container {
				display:block;
				position:absolute;
				width:70%;
				height:auto;
				padding-bottom:50px;
				margin-left:15%;
				margin-top:14%;
				background:rgb(240, 240, 240);
				border-radius:0.9rem;
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
			<h2>Patient Registration</h2>
		<form method="post" action="process.php">
			<table>
			<tr>
				<td>First Name:<span style="color:red">*</span></td>
				<td><input type="text" name="fname" required></td>
			</tr>
			<tr>
				<td>Last name:</td>
				<td><input type="text" name="lname"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr>
				<td>Age:<span style="color:red">*</span></td>
				<td><input type="number" min="0" max="150" name="age" required></td>
			</tr>
			<tr>
				<td>Date of Consultation:<span style="color:red">*</span> </td>
				<td><input type="date" name="dateofconsult" required></td>
			</tr>
			<tr>
				<td>Phone No:<span style="color:red">*</span> </td>
				<td><input type="tel" name="phone" required></td>
			</tr>	
			<tr>
				<td>Blood Group: </td>
				<td><input type="text" name="blood"></td>
			</tr>
			<tr>
				<td>Disease:<span style="color:red">*</span> </td>
				<td><input type="text" name="disease" required></td>
			</tr>	
			<tr>
				<td>Doctor:<span style="color:red">*</span> </td>
				<td><input type="text" name="doctor" required></td>
			</tr>					
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="SUBMIT"></td>
			</tr>
			</table>
			
		</form>
		</div>
		
	</body>
</html>