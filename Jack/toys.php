<?php
	include "header.php";
	include "Database/dbConnect.php";
?>
<html>
	<head>
		<title>Toys</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<br>
		<div class=content>
			<br>
			<center>
				<h2 style="color:#21aaa7">Toys</h2>
				<div class=ChewToys style="text-align: center;" height=300px width=300px></a>
					<a href="chewToys.php"><img src="Images\ChewToy.jpg" height=200 width=300></a>
					<br>
					<?php
						$location = "location.href='chewToys.php'";
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
								<button onClick='.$location.'>Chew Toys</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=OutdoorToys style="text-align: center;" height=300px width=300px>
					<a href="outdoorToys.php"><img src="Images\OutdoorToy.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='outdoorToys.php'";
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
								<button onClick='.$location.'>Outdoor Toys</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=SoftToys style="text-align: center;" height=300px width=300px></a>
					<a href="softToys.php"><img src="Images\SoftToy.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='softToys.php'";
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
								<button onClick='.$location.'>Soft Toys</button>
							</body>
							';
					?>
				</div>
				<?php
					include "base.php";
				?>
			</div>
		<center>
	</body>
</html>