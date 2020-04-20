<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "topper.php";
include "dbconnect.php";

if (isset($_SESSION['login_username'])){
	$user = $_SESSION['login_username'];
	$sql = "SELECT CustomerID FROM customer WHERE UserName='$user'";
	$fetch=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_assoc($fetch);
	$customerID = $row['CustomerID'];
	
} else {
	header("Location:home.php");
}

	

?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dog Daycare</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/yuyue.css" />
<LINK rel=stylesheet type=text/css href="css/datepicker.css">
<SCRIPT type=text/javascript  src="js/jquery-1.6.2.min.js"></SCRIPT>
<SCRIPT type=text/javascript  src="js/jquery.datepicker-mi.js"></SCRIPT>
<SCRIPT type=text/javascript  src="js/form.js"></SCRIPT>
</head>

<body>
<script>
function valForm()
{
	var retVal = true;
	
	var yn = document.forms["regCustomer"]["name"].value;
	var ye = document.forms["regCustomer"]["email"].value;
	var tn = document.forms["regCustomer"]["tel"].value;	
	var dn = document.forms["regCustomer"]["dname"].value;	
	var db = document.forms["regCustomer"]["breeds"].value;	
	var da = document.forms["regCustomer"]["ageses"].value;	
	var dt = document.forms["regCustomer"]["time"].value;
	var di = document.forms["regCustomer"]["introduction"].value;
}

function dateCheck(){
	var start = document.getElementById('time');//start date
	var end = document.getElementById('timeEnd');//end date
	var button = document.getElementById('submit');//end date
	
	var startvalue = start.value;
	var endvalue = end.value; 
	
	if (endvalue < startvalue){
		alert("End date is before the start date.");
		button.disabled = true;
	} else {
		button.disabled = false;
	}
	

}

</script>	
<br>
<div class="yuyue_box">
  <div class="telcon">
    <div class="tell">
      <div class="ts">
      </div>
      <div class="telform">
        <table class="waiting">
		<p>Waiting List:</p>
		<tr>
			<th>Dogs Name</th>
			<th>Dogs Breed</th>
			<th>Dogs Age</th>
			<th>Date</th>
			<th>Timeslot</th>
		</tr>
		<?php 
		
			//$email = "623171340@qq.com";
		
			$sqlCheck = "SELECT * FROM waitinglist WHERE CustomerID='$customerID'"; //email will be provided when the user gets the login
			$waitingResults = mysqli_query($mysqli,$sqlCheck);
			$amount = mysqli_num_rows($waitingResults);
			
			if($amount > 0){
				while($row=mysqli_fetch_assoc($waitingResults)){
				$DogsName = $row['DogsName'];
				$DogsBreeds = $row['DogsBreeds'];
				$DogsAge = $row['DogsAge'];
				$Date = $row['Date'];
				$Timeslot = $row['Timeslot'];
				$cost = $row['cost'];
				
				echo '<tr>';
					echo '<td>'.$DogsName.'</td>';
					echo '<td>'.$DogsBreeds.'</td>';
					echo '<td>'.$DogsAge.'</td>';
					echo '<td>'.$Date.'</td>';
					echo '<td>'.$Timeslot.'</td>';
					echo '<td>'."£".$cost.'</td>';
				echo '</tr>';
				}
			} else {
				echo '<tr>';
					echo '<td>No waiting list results.</td>';
				echo '</tr>';
			}
		
		?>
		</table>
		
		<table class="appointments">
		
        </table>
      </div>
	  
	  <div class="telform">
        <table class="booked">
		<p>Current Bookings:</p>
		<tr>
			<th>Dogs Name</th>
			<th>Dogs Breed</th>
			<th>Dogs Age</th>
			<th>Date</th>
			<th>Timeslot</th>
		</tr>
		<?php 
		
			$totalcost = 0;
		
			$sqlCheck = "SELECT * FROM bookings WHERE CustomerID='$customerID'"; //email will be provided when the user gets the login
			$waitingResults = mysqli_query($mysqli,$sqlCheck);
			$amount = mysqli_num_rows($waitingResults);
			$alert = false;
			
			if($amount > 0){
				while($row=mysqli_fetch_assoc($waitingResults)){
				$id = $row['id'];
				$DogsName = $row['DogsName'];
				$DogsBreeds = $row['DogsBreeds'];
				$DogsAge = $row['DogsAge'];
				$Date = $row['Date'];
				$Timeslot = $row['Timeslot'];
				$seen = $row['seen'];
				$cost = $row['cost'];
				
				if ($seen == "no"){
					$alert = true; 
					
					//updates so that the user does not get alerted again
					$yes = "yes";
					$update = "UPDATE bookings SET seen='$yes' WHERE id='$id'";
					$updating = mysqli_query($mysqli,$update);
				}
				
				echo '<tr>';
					echo '<td>'.$DogsName.'</td>';
					echo '<td>'.$DogsBreeds.'</td>';
					echo '<td>'.$DogsAge.'</td>';
					echo '<td>'.$Date.'</td>';
					echo '<td>'.$Timeslot.'</td>';
					echo '<td>'."£".$cost.'</td>';
				echo '</tr>';
				
				$totalcost = $totalcost + $cost;
				}
				
			} else {
				echo '<tr>';
					echo '<td>No bookings.</td>';
				echo '</tr>';
			}
			
			
			if($alert == true){
				echo '.<script>alert("A booking you made has been took off the waiting list!");</script>.';
			}
			
		
		?>
		</table>
		
		<?php echo "<p> The total cost for the current bookings is: £$totalcost</p>"; ?>
		<table class="appointments">
		
        </table>
      </div>
	  
    </div>
 </div>
    <div style="clear:both"></div>
  </div>
  </div>
</div>
</body>
</html>
<?php include "base.php";?>