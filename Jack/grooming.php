<?php
	include "header.php";
	include "Database/dbConnect.php";
?>
<html>
	<head>
		<title>Grooming</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<br>
		<center>
			<div class=content>
				<br>
				<h2 style="color:#21aaa7">Grooming</h2>
				<div class=Bathing style="text-align: center;" height=300px width=300px></a>
					<a href="bathing.php"><img src="Images\Bath.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='bathing.php'";
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
								<button onClick='.$location.'>Bathing</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=Grooming style="text-align: center;" height=200px width=300px></a>
					<a href="groomingProducts.php"><img src="Images\Brush.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='groomingProducts.php'";
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
								<button onClick='.$location.'>Grooming</button>
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