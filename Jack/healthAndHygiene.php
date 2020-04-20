<?php
	include "header.php";
	include "Database/dbConnect.php";
?>
<html>
	<head>
		<title>Health and Hygiene</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<br>
		<center>
			<div class=content>
			<br>
			<h2 style="color:#21aaa7">Health and Hygiene</h2>
				<div class=FleaAndTick style="text-align: center" height=300px width=300px></a>
					<a href="fleaAndTick.php"><img src="Images\Fleas.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='fleaAndTick.php'";
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
								<button onClick='.$location.'>Flea and Tick</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=Hygiene style="text-align: center;" height=200px width=300px></a>
					<a href="hygiene.php"><img src="Images\Hygiene.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='hygiene.php'";
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
								<button onClick='.$location.'>Hygiene</button>
							</body>
							';
					?>
				</div>
				<br>
				<div class=Wormers style="text-align: center;" height=200px width=300px></a>
					<a href="wormers.php"><img src="Images\Worms.jpg" height=200px width=300px></a>
					<br>
					<?php
						$location = "location.href='wormers.php'";
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
								<button onClick='.$location.'>Worm Treatment</button>
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