<html>

<head><title>Barker & Bonehouse<img src='WSPics/bab.jpg' width=150 height=150 align=auto></a></title>
<br>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="HD4.css" type="text/css">

</head>
<body>

<?php
	session_start();
/*Location variable created so once logged out user will return to previous page*/	
$Location = $_SERVER['REQUEST_URI'];

	if(isset($_SESSION['login_username']))
	{

		echo "	
			<center><img src='WSPics/bab.jpg' width=150 height=150 align=auto><br><h7>Barker & Bonehouse</h7></a></center>	
			<center>
			<div class=navbar>			
			<a href=home.php style='margin-left: 50px'><img src='WSPics/k2.png' width=50 height=50 align=auto></a>
		<a href=3b-reserve-slot.php>Grooming</a>	
	<div class=dropdown>
		<button class=dropbtn>Daycare 
		</button>
			<div class=dropdown-content>
				<a href=DogDaycare.php>Dog Daycare</a>	
				<a href=DogDaycare.php>Dog Daycare</a>	
			</div>
	</div>
	<div class=dropdown>
		<button class=dropbtn>Photography 
		</button>
			<div class=dropdown-content>
				<a href=appointment.php>Photography</a>	
			</div>
	</div>
<a href=homeShop.php>Shop</a>		
	<div class=dropdown>
		<button class=dropbtn>Gallery 
		</button>
			<div class=dropdown-content>
				<a href=gallery-burt.php>Gallery</a>		
			</div>
	</div>				
	<div class=dropdown>
		<button class=dropbtn>Pet Care 
		</button>
			<div class=dropdown-content>
				<a href=welfare.php>Grooming & Diet Tips</a>
				<a href=firstaid.php>Dog First Aid</a>	  
			</div>
	</div>
			<a href=about.php>About Us</a>	
			<a href=basket.php>Basket</a>
			<a href=help.php><img src='WSPics/help.png' width=30 height=30 align=auto></a> <!--Help button added to base so that its available on each page-->
			<a href=logout.php><img src='WSPics/exit.png' width=30 height=30 align=right></a>
		</div>";					
	}
	else
	{
		echo "	
		
			<center>
			<img src='WSPics/bab.jpg' width=150 height=150 align=auto><br><h7>Barker & Bonehouse</h7></a>
			</center>	
			<center>
			<div class=navbar>
			<a href=home.php style='margin-left: 50px'><img src='WSPics/k2.png' width=50 height=50 align=auto></a>
			<a href=3b-reserve-slot.php>Grooming</a>	
	<div class=dropdown>
		<button class=dropbtn>Daycare 
		</button>
			<div class=dropdown-content>
				<a href=DogDaycare.php>Dog Daycare</a>	
				<a href=DogDaycare.php>Dog Daycare</a>	
			</div>
	</div>
	<div class=dropdown>
		<button class=dropbtn>Photography 
		</button>
			<div class=dropdown-content>
				<a href=appointment.php>Photography</a>				
			</div>
	</div>
				<a href=homeShop.php>Shop</a>			
	<div class=dropdown>
		<button class=dropbtn>Gallery 
		</button>
			<div class=dropdown-content>
				<a href=gallery-burt.php>Gallery</a>		
			</div>
	</div>				
	<div class=dropdown>
		<button class=dropbtn>Pet Care 
		</button>
			<div class=dropdown-content>
				<a href=welfare.php>Grooming & Diet Tips</a>
				<a href=firstaid.php>Dog First Aid</a>	  
			</div>
	</div>			
			<a href=about.php>About Us</a>		
			<a href=register.php>Register</a>
			<a href=login.php><back=$Location>Login</a>";	
						
	}

?>
	
	</center>
</div>

