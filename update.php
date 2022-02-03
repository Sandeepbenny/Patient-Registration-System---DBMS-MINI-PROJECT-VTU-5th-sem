<!DOCTYPE html>
<html>
	<head>
	<title>Update Record</title>
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
		
		#searchform {
			display:block;
			background-color:white;
			color:black;
			transition-duration:700ms;
			width:40%;
			height:auto;
			margin-left:30%;
			padding:30px;
			border-radius:1rem;
			margin-bottom:50px;
		}
		#searchform:hover {
			box-shadow:3px 3px 5px lightgrey;
		}
		#searchform tr {
			background-color:white!important;
			color:black;
		}
		#searchform td{
			border:0px solid white;
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
			<h2>Update Patient Record</h2>
		<form method="post" action="updaterecord.php">
			<table id="searchform">
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname" required></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><input type="text" name="phone" required></td>
				</tr>
				<tr>
					<td>New Phone Number:</td>
					<td><input type="tel" name="newphone" required></td>
				</tr>
				<tr>
					<td>New City:</td>
					<td><input type="text" name="newcity" required></td>
				</tr>	
				<tr>
					<td>New Age:</td>
					<td><input type="number" min="0" max="150" name="newage" required></td>
				</tr>
				<tr>
					<td>New Date of Consulation:</td>
					<td><input type="date" name="newdate" required></td>
				</tr>				
				<tr>
					<td>New Disease:</td>
					<td><input type="text" name="newdisease" required></td>
				</tr>
				<tr>
					<td>New Consulted Doctor:</td>
					<td><input type="text" name="newdoctor" required></td>
				</tr>				
				<tr>
				<td><input type="submit" name='update' value="UPDATE"></td>
				</tr>

			</table>	
		</form>
		
		</div>
	</body>
</html>