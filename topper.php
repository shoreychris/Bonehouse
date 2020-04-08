<html>

<head><title>Barker & Bonehouse<img src='WSPics/bab.jpg' width=150 height=150 align=auto></a></title>
<br>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="HD.css" type="text/css">

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
			
					
  <div class=dropdown>
    <button class=dropbtn>Services 
      </button>
    <div class=dropdown-content>
		<a href=grooming.php>Salon Grooming</a>
		<a href=mobgrooming.php>Mobile Grooming</a>
		<a href=pamper.php>Pamper Days</a>	
		<a href=photography.php>Photography</a>
		
	</div>
	</div>
	
			<a href=shop.php>Shop</a>
			
					<div class=dropdown>
    <button class=dropbtn>Photography 
      </button>
    <div class=dropdown-content>
		<a href=gallery1.php>Grooming</a>
		<a href=gallery2.php>Daycare</a>
		<a href=addpictures.php>Addpictures</a>
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
		
			
			<a href=logout.php style='margin-left: 250px'>Logout</a>
			<a href=basket.php>Basket</a>
			<a href=help.php><img src='WSPics/help.png' width=30 height=30 align=auto></a> <!--Help button added to base so that its available on each page-->
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
			

  <div class=dropdown>
    <button class=dropbtn>Grooming 
      
    </button>
    <div class=dropdown-content>
	
			<a href=grooming.php>Salon Grooming</a>
			<a href=mobgrooming.php>Mobile Grooming</a>
			<a href=pamper.php>Pamper Days</a>	
			<a href=photography.php>Photography</a>
	     </div>
  </div> 
  
			<a href=shop.php>Shop</a>
			
			<div class=dropdown>
    <button class=dropbtn>Photography 
      </button>
    <div class=dropdown-content>
		<a href=gallery1.php>Grooming</a>
		<a href=gallery2.php>Day care</a>
		
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
		<a href=register.php style='margin-left: 300px'>Register</a>
		<a href=login.php><back=$Location>Login</a>";	
	
					
	}

?>
	
	</center>
</div>

