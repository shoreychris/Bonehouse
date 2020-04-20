<?php
	session_start();		
?>

<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StyleSheets/header.css" type="text/css">
	</head>
	<body>
		<?php
		//if admin is logged in
		if(isset($_SESSION['admin_user']))
		{
			echo 
			"
			<center>
				<img src='WSPics/bab.jpg' width=150 height=150 align=auto><br><h7 style='color: #21aaa7'>Barker & Bonehouse Shop</h7>
			</center>	
			<center>
				<div class=navbar>	
					<a href=home.php><img src='WSPics/k2.png' width=50 height=50 align=auto></a>
					<a href=toys.php>Dog Toys</a>
					<a href=grooming.php>Dog Grooming</a>
					<a href=accessories.php>Dog Accessories</a>
					<a href=beds.php>Dog Beds</a>
					<a href=healthAndHygiene.php>Dog Health and Hygiene</a>
				</div> 
				<br />
				<div class=basket>
					<a href=logout.php><img src='Images/logout.jpg' width=100px height=50px align=auto></a>
					&nbsp;
					<a href=basket.php><img src='Images/shoppingCart.jpg' width=100px height=50px align=auto></a>
					&nbsp;
					<a href=adminHome.php><img src='Images/admin.jpg' width=100px height=50px align=auto></a>
				</div>
				<br /><br /><br />
			</center>
			";	
		}
		//if user is logged in
		else if(isset($_SESSION['login_username']))
		{
			echo 
			"
			<center>
				<img src='WSPics/bab.jpg' width=150 height=150 align=auto><br><h7 style='color: #21aaa7'>Barker & Bonehouse Shop</h7>
			</center>	
			<center>
				<div class=navbar>
					<a href=home.php><img src='WSPics/k2.png' width=50 height=50 align=auto></a>
					<a href=toys.php>Dog Toys</a>
					<a href=grooming.php>Dog Grooming</a>
					<a href=accessories.php>Dog Accessories</a>
					<a href=beds.php>Dog Beds</a>
					<a href=healthAndHygiene.php>Dog Health and Hygiene</a>
				</div>	
				<br />
				<div class=basket>
					<a href=logout.php><img src='Images/logout.jpg' width=100px height=50px align=auto></a>
					&nbsp;
					<a href=basket.php><img src='Images/shoppingCart.jpg' width=100px height=50px align=auto></a>
				</div>
			</center>
			";	
		}
		//if noone is logged in
		else
		{
			echo 
			"	
			<center>
				<img src='WSPics/bab.jpg' width=150 height=150 align=auto><br><h7 style='color: #21aaa7'>Barker & Bonehouse Shop</h7>
			</center>	
			<center>
				<div class=navbar>
					<a href=home.php><img src='WSPics/k2.png' width=50 height=50 align=auto></a>
					<a href=toys.php>Dog Toys</a>
					<a href=grooming.php>Dog Grooming</a>
					<a href=accessories.php>Dog Accessories</a>
					<a href=beds.php>Dog Beds</a>
					<a href=healthAndHygiene.php>Dog Health and Hygiene</a>
					<a href=registerShop.php>Register</a>
					<a href=loginShop.php>Login</a>	
				</div>
			</center>
			";
		}
		?>
	</body>
</html>