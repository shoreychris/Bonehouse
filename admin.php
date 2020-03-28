
<html>

<br>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="HD.css" type="text/css">

</head>
<body>

<?php

//this code checks the session variable to see if  you are logged on, if you are then it displays a log out button 
if (!isset($_SESSION)) session_start();
	$check=$_SESSION['admin_user'];
	if($check!="admin")
	{	

		header("Location:home.php");
	}
	else
	{
		echo 
		
		"
		<center><img src='WSPics/bab.jpg' width=150 height=150 align=auto><br><h7>Administration</h7></a></center>	
			<center>
			<div class=navbar>			
			<a href=home.php style='margin-left: 50px'><img src='WSPics/k2.png' width=50 height=50 align=auto></a>
	<div class=dropdown>
    <button class=dropbtn>Retail 
      </button>
    <div class=dropdown-content>
		
		<a href=mproducts.php>Manage Products</a>
		<a href=morders.php>Manage Orders</a>
		<a href=addproducts.php>Add Products</a>
		
	</div>
	</div>
		
	<div class=dropdown>
    <button class=dropbtn>Staff 
      </button>
    <div class=dropdown-content>

		<a href=empindex.php>Employee Management</a>
		<a href=index.php>Calendar</a>

		
	</div>
	</div>	
	
	
	<div class=dropdown>
    <button class=dropbtn>Customer 
      </button>
    <div class=dropdown-content>
		<a href=mcustomers.php>Customer/Staff</a>
	</div>
	</div>
		
	<div class=dropdown>
    <button class=dropbtn>Bookings 
      </button>
    <div class=dropdown-content>
		<a href=groomingbookings.php>Grooming</a>
		<a href=photographybookings.php>Photography</a>
		<a href=pamperbookings.php>Pamper Days</a>
	
	</div>
	</div>	



	<div class=dropdown>
    <button class=dropbtn>Site Management 
      </button>
    <div class=dropdown-content>
		<a href=addtogallery.php>Gallery</a>
		
	
	</div>
	</div>	

	
		<br><br><br><br><br><br><br><br>
		</div>";		
		
	}
?></center>

&nbsp
</div>
</body>
</html>
