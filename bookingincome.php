<?php 
include "dbconnect.php";

$set = false;
if(isset($_POST['sub'])){
	
	$input = $_POST['dateSelect'];
	
	$weekdate = new DateTime($input); //$input needs to be pulled from the submit
	$year = $weekdate->format("Y");
	$week = $weekdate->format("W"); //displays the week number
	
	$weekstart = new DateTime();
	$weekstart->setISODate($year, $week);//gets the week
	$weekMonday = $weekstart->format('Y-m-d');//returns the Monday in the correct format.
	$weekstart->modify('+6 days');//adds 6 days
	$weekSunday = $weekstart->format('Y-m-d');//returns the Sunday in the correct format.
	$set = true;
}

if(isset($_POST['submit'])){
	
	$id = $_POST['bookingDelete'];
	
	$get = "SELECT * FROM bookings WHERE id='$id'";
	$getResults = mysqli_query($mysqli,$get);
	while($row=mysqli_fetch_assoc($getResults)){
				$SetDate = $row['Date'];
	}
	
	$delete = "DELETE FROM bookings WHERE id='$id'";
	$deleteCall = mysqli_query($mysqli,$delete);
	
	$getWaiting = "SELECT * FROM waitinglist WHERE date='$SetDate'";
	$waitingResults = mysqli_query($mysqli,$getWaiting);
	$row=mysqli_fetch_assoc($waitingResults);
	$amount = mysqli_num_rows($waitingResults);
	
	if($amount > 0){
		$id = $row['WaitingListID'];
		$ci = $row['CustomerID'];
		$yn = $row['YourName'];
		$ye = $row['YourEmail'];
		$tn = $row['TELNO'];
		$dn = $row['DogsName'];
		$db = $row['DogsBreeds'];
		$da = $row['DogsAge'];
		$dt = $row['Date'];
		$ts = $row['Timeslot'];
		$di = $row['DogsIntroduction'];
		$cs = $row['cost'];
		
		$sql2="INSERT INTO bookings(CustomerID, YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction, cost, seen) 
		VALUES ('$ci','$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di','$cs','no')";
		$mysqli->query($sql2);
		
		$deletewl = "DELETE FROM waitinglist WHERE WaitingListID='$id'";
		$deletewlCall = mysqli_query($mysqli,$deletewl);
	}

}

?>

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
		<a href=stafflogin.php>Employee Management</a>		
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
<div>
	
	<p>Delete a booking:</p>
	
	<form action="bookingincome.php" method="POST">
	<select name="bookingDelete">
	<?php 
		$sql = "SELECT * FROM bookings";
		$bookingresults = mysqli_query($mysqli,$sql);
		$amount = mysqli_num_rows($bookingresults);//check to see there are bookings for this week
		while($row=mysqli_fetch_assoc($bookingresults)){
			$id = $row['id'];
			$date = $row['Date'];
			echo '<option value="'.$id.'">'.$date.'</option>';
		}
		if($amount > 0){
			
		} else {
			echo "<option value=''>NO BOOKINGS CREATED</option>";
		}
	?>
	<input type="submit" id="submit" name="submit" value="DELETE" class="tijiao" />
	</form>
	
	<p>Bookings by week:</p>
	
	<form action="bookingincome.php" method="POST">
	<form id="date">
		<div class="telrq">
            <label>Select a week:</label>
            <input type="date" id="weekSelect" class="date-pick" onclick="this.value='';this.style.color='black';this.style.background='images/420bf521c6dd4a13ac016894278546d0.gif';" value="Choose Date" name="dateSelect" />
			<input type="submit" id="submit" name="sub" value="SEARCH" class="tijiao" />
          </div>  
	</form>
	
	<div class="telform">
        <table class="booked">
		<?php
		
		if($set == true){
			//query the database
			$sql = "SELECT * FROM bookings where Date BETWEEN '$weekMonday' AND '$weekSunday'"; //between '$weekMonday' and $weekSunday'
			$weekresults = mysqli_query($mysqli,$sql);
			$amount = mysqli_num_rows($weekresults);//check to see there are bookings for this week
			
			$totalcost = 0;
			
			if($amount > 0){
				
				echo '<p>Current Bookings:</p>';
				echo '<tr>';
				echo '<th>Date</th>';
				echo '<th>Timeslot</th>';
				echo '<th>Cost</th>';
				echo '</tr>';
				
				while($row=mysqli_fetch_assoc($weekresults)){
					$date = $row['Date'];
					$Timeslot = $row['Timeslot'];
					$cost = $row['cost'];
					
					echo '<tr>';
					echo '<td>'.$date.'</td>';
					echo '<td>'.$Timeslot.'</td>';
					echo '<td>'."£".$cost.'</td>';
				echo '</tr>';
				
				$totalcost = $totalcost + $cost;
				}
				
				
				
			}else{
				echo "No bookings for the week of $weekMonday".".";
				echo "</br>";
			} echo "Total this week： £".$totalcost;
		}
?>
		
		</table>
</div>
</body>
</html>
