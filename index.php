<!DOCTYPE html>
<html>
	<head>
		<title>Patient Management System </title>
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
				background:rgb(240, 240, 240); ;
				border-radius:0.9rem;
				;
			}  
			
			#container h2 {
				font-family:Arial;
				display:block;
				position:relative;
				font-size:35px;
				width:30%;
				margin-left:45%;
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
				color: paleturquoise;
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
			
			#welcome-message {
				color:black;
				display:block;
				position:relative;
				background-color:white;
				width:30%;
				height:auto;
				padding:20px;
				margin-left:35%;
				border-radius:1rem;
				transition-duration:800ms;
				font-family:Arial;
			}
			#welcome-message:hover {
				width:35%;
				margin-left:32.5%;
				box-shadow:3px 3px 5px grey;
			}
			.message {
				color:black;
				display:block;
				position:relative;
				background-color:white;
				width:30%;
				height:auto;
				padding:20px;
				margin-left:35%;
				margin-top:5px;
				border-radius:1rem;
				transition-duration:800ms;
				font-family:Arial;
			}
			.message:hover {
				width:35%;
				margin-left:32.5%;
				box-shadow:3px 3px 5px grey;
			}
			#welcome-message img {
				display:inline-block;
				width:100px;
				float:left;
				padding-right:20px;
				transition-duration:800ms;
				opacity:0.8;
			}
			#welcome-message img:hover {	
				opacity: 1;
			}
			.message img {
				display:inline-block;
				width:100px;
				float:right;
				padding-right:20px;
			}
			#footer {
				display:block;
				position:relative;
				width:100%;
				height:350px;
				margin-top:20px;
				background:rgb(10,10,10);
			}
			
			#credits {
				display:inline-block;
				color:white;
				position:relative;
				width:25%;
				padding:30px;
				margin-top:30px;
				margin-left:30px;
				font-family:Arial;
				border-radius:1rem;
				background-color:rgb(15,15,15);
				transition-duration:900ms;
			}
			#credits:hover {
				color:black;
				width:30%;
				background-color:white;
			}
			#copyright {
				color:white;
				font-family:Arial;
				font-size:15px;
				display:inline-block;
				position:relative;
				width:300px;
				margin-left:200px;
				padding:5px;
				left:100px;
				top:30px;
			}
		</style>
		
	</head>
	<body>
		<div id="header">
			<div id="mainheader"><h1>Patient Registration System</h1></div>
			
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
			<h2>Welcome</h2>
			<div id="welcome-message">
				<img width="100px" src="doctor.png"/>
			<p>Welcome to Patient Management System. This web portal allows you to manage the patient records database of our hospital.</p>
			</div>
			<div class="message">
			<p>In this website, you can Register new patients, Search for existing patients and delete any records if necessary.</p>
			</div>
			
		<div id="footer">
			<div id="credits">
				<p>This website was designed as a group miniproject .</p>
				<h3>Group Members</h3>
				<ul id="groupmembers">
					<li>Sandeep Benny <br> USN - 4JK19CS046 </br> </li>
					<li>Vaishnav E   <br> USN - 4JK19CS057 </br> </lI>
				</ul>
			</div>
			<div id="copyright">All Rights Reserved to Group Members</div>
		</div>
		
		</div>


		
	</body>
</html>