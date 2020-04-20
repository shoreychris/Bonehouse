<?php
	include "header.php";
	include "Database/dbConnect.php";
?>
<html>
	<head>
		<title>Accessories</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<br>
		<center>
			<div class=content>
				<br>
				<h2 style="color:#21aaa7">Accessories</h2>
				<div class=Coats style="text-align: center;" height=200px width=300px></a>
					<a href="coats.php"><img src="Images\Coat.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='coats.php'";
						echo '
							<head>
								<style>
								button
								{
									width: 300px;
									background-color: #21aaa7;
									border: none;
									color: white;
									padding: 15px 32px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									hover: blue;
									font-size: 15px;
								}
								button:hover 
								{
									background-color: blue;
								}
								</style>
							</head>
							<body>
								<button onClick='.$location.'>Coats</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=Collars style="text-align: center;" height=300px width=300px>
					<a href="collars.php"><img src="Images\Collar.jpg" height=200 width=300></a>
					<br>
					<?php
						$location = "location.href='collars.php'";
						echo '
							<head>
								<style>
								button
								{
									width: 300px;
									background-color: #21aaa7;
									border: none;
									color: white;
									padding: 15px 32px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									hover: blue;
									font-size: 15px;
								}
								button:hover 
								{
									background-color: blue;
								}
								</style>
							</head>
							<body>
								<button onClick='.$location.'>Collars</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=Leads style="text-align: center;" height=300px width=300px>
					<a href="leads.php"><img src="Images\Lead.jpg" height=200 width=300></a>
					<br>
					<?php
						$location = "location.href='leads.php'";
						echo '
							<head>
								<style>
								button
								{
									width: 300px;
									background-color: #21aaa7;
									border: none;
									color: white;
									padding: 15px 32px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									hover: blue;
									font-size: 15px;
								}
								button:hover 
								{
									background-color: blue;
								}
								</style>
							</head>
							<body>
								<button onClick='.$location.'>Leads</button>
							</body>
							';
					?>
				</div>
				<?php
					include "base.php";
				?>
			</div>
		</center>
	</body>
</html>