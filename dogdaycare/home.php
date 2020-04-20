<?php
include "topper.php";
include "dbconnect.php";

if (isset($_SESSION['login_username'])) {
    //if the user is logged in
    $user = $_SESSION['login_username'];
    $sql = "SELECT Email FROM customer WHERE UserName='$user'";//search for the users email where it matches the id
    $fetch=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($fetch);
    $email = $row['Email']; //get the email from the row

    $sql = "SELECT * FROM reservations WHERE res_email='$email'"; //search reservations for $email
    $time = mysqli_query($mysqli,$sql);
    $resultamount = mysqli_num_rows($time);
    $alert = false; //used to reset the alert
    $alertAdvanced = false; //used to reset the alert

    if($resultamount > 0){ //check if there are any results
        while($row=mysqli_fetch_assoc($time)){ //while there are results
            $date = $row['res_date'];//assign the date and time
            $timeslot = $row['res_slot'];//assign the date and time
              if ($timeslot == 9){$timeslot = "9AM";} if ($timeslot == 10){$timeslot = "10AM";
            } if ($timeslot == 11){$timeslot = "11AM";} if ($timeslot == 12){$timeslot = "12PM";
            } if ($timeslot == 1){$timeslot = "1PM";}   if ($timeslot == 2){$timeslot = "2PM";
            } if ($timeslot == 3){$timeslot = "3PM";} //used to make the alert feature the exact timeslot start.
            $newDate = date("Y-m-d", strtotime('now')); //gets now (the current date)

            //+ 1 day from today
            $nowDate = date(strtotime('now'));
            $checkDate = date('Y-m-d', strtotime('+1 day', $nowDate));//used for to check for today.

            if ($date == $newDate) { //if the current date matches
                $alert = true; //allow the alert to function (found at the bottom.)
                $timeslotAlert = $timeslot; //used to set the time it should display

            } elseif ($date == $checkDate){//if the date tomorrow matches
                $alertAdvanced = true;//allow the alertAdvanced to function (found at the bottom.)
                $timeslotAlert = $timeslot;//used to set the time it should display
            }
    if ($alert == true){ //if there is a match, call the alert
    echo "<script>alert(\"You have a reservation today at: $timeslotAlert.\")</script>"; //displays the alert.
} elseif ($alertAdvanced == true){//if there is a match, call the alert
    echo "<script>alert(\"You have a reservation tomorrow at: $timeslotAlert.\")</script>"; //displays the alert.
}    }
    }
}

?>
<link rel="stylesheet" href="HD3.css" type="text/css">
<div class=content>
<div class="main">
<body>
<h1>Dog Barbers & More</h1>
<hr>

<h2>What we offer</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">	
      <img src="WSPics/newgroom.jpg" alt="Dog Grooming" style="width:100%">
      <h3><a href="groomingPrice.php">Grooming</a></h3>
      <p>Dog grooming service for any sized dog. We provide: Nail trim & buffing, 
			Teeth & Ear cleaning, Face, feet and rear trim, Flea and tick treatment and Paw balm and Nail polish </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="WSPics/shop.jpg" alt="Online Shop" style="width:100%">
      <h3><a href="homeShop.php">Shop</a></h3>
      <p>Visit our online pet shop for essential dog supplies.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
   <img src="WSPics/dogcam.jpg" alt="Pet Photography" style="width:100%">
      <h3><a href="appointment.php">Photography</a></h3>
      <p>Book a appointment with our photographer to capture your pooch looking their best. </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="WSPics/pamper.jpg" alt="Doggy Daycare" style="width:100%">
      <h3><a href="DogDaycare.php">Doggy Daycare</a></h3>
      <p>Book your dog into our daycare which includes a free wash, brush and nail clipping.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="WSPics/groom1.jpg" alt="Keep Calm" width=250 height=250 align=left>
      <h3>Keep Calm</h3>
      <p>Please ensure to check our booking appointments to ensure your space.</p>
	  <br><br><br><br><br>
</div>
<!-- END MAIN -->
</div>
<?php

echo "	
					
			<a href=user_index.php style='margin-left: 50px'><img src='WSPics/news.png' width=50 height=50 align=auto></a>
			<td align=center>Click to view newsletter and offers !!! </td>";
?>
</body>
<?php
include "media.php";
?>
<?php
include "base.php";


?>