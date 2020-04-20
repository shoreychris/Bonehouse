<?php
	include "header.php";
	include "Database/dbConnect.php";
	//ensures an admin is logged in
	$check=$_SESSION['admin_user'];
	if($check!="admin")
	{	
		header("Location:homeShop.php");
	}
?>
<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<br>
		<div class=content>

			<br>
			
			<div class=update style="text-align: center;" height=300px width=300px></a>
				<a href="updateProduct.php"><img src="Images\update.jpg" height=200 width=300>
				<br>
				<?php
					$location = "location.href='updateProduct.php'";
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
							<button onClick='.$location.'>Update Product</button>
						</body>
						';
				?>
			</div>
			<br>
			<div class=new style="text-align: center;" height=300px width=300px>
				<a href="newProduct.php"><img src="Images\new.jpg" height=200 width=300></a>
				<br>
				<?php
					$location = "location.href='newProduct.php'";
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
							<button onClick='.$location.'>New Product</button>
						</body>
						';
				?>
			</div>
			<br>
			<div class=delete style="text-align: center;" height=300px width=300px>
				<a href="deleteProduct.php"><img src="Images\delete.jpg" height=200 width=300></a>
				<br>
				<?php
					$location = "location.href='deleteProduct.php'";
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
							<button onClick='.$location.'>Delete Product</button>
						</body>
						';
				?>
			</div>
			
			<br>

			<?php
				include "base.php";
			?>
		</div>
	</body>
</html>