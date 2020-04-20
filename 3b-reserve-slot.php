<?php
include "topper.php";
include "dbconnect.php";

$name = $email = $tel = $notes = $slot = "";

if (isset($_SESSION['login_username'])) {
//if the user is logged in
    $user = $_SESSION['login_username'];
    $sql = "SELECT * FROM customer WHERE UserName='$user'";//search for the users email where it matches the id
    $fetch = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($fetch);
    $firstname = $row['FirstName']; //get the email from the row
    $surname = $row['Surname']; //get the email from the row
    $name = $firstname." ".$surname;
    $email = $row['Email']; //get the email from the row
    $tel = $row['TelNo']; //get the email from the row
} else {
	echo "<script> alert('Please login first!');parent.location.href='home.php'; </script>";
}

if(isset($_POST['submit'])){
   $name = $_POST['res_name'];
   $email = $_POST['res_email'];
   $tel = $_POST['res_tel'];
   $notes = $_POST['res_notes'];
   $slot = $_POST['reservationslot'];

    $day = $_POST['submit'];
    $year = $_POST['year'];
    $month = $_POST['month'];

    $date = $year."-".$month."-".$day;

    $sqlCheck="SELECT * FROM reservations WHERE res_date='$date' AND res_slot='$slot'";
    $check = mysqli_query($mysqli,$sqlCheck);
    $amount = mysqli_num_rows($check);

    echo $amount;
    if ($amount > 0){
        echo '<script>alert("This slot has already been booked, please try another slot.");</script>';
    } else {
        $sql="INSERT INTO reservations(res_name, res_email, res_tel, res_notes, res_date, res_slot) VALUES ('$name','$email','$tel','$notes','$date','$slot')";
        $mysqli->query($sql);
        header('location: 3d-thank-you.php');
    }


}

?>
<html>
<div style="background:url(doggy.jpg); 
 
 margin-right: auto;
 margin-left: auto;
 background-repeat: no-repeat;
 background-position: center center;">
  <head>
    <title>

      PHP Reservation - Single Time Slot Booking
    </title>
    <script src="public/3b-reserve-slot.js"></script>
    <link href="public/3-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="HD.css" type="text/css">
  </head>
  <body style="text-align:center">
    <h1>
      RESERVATION
    </h1>
    <form style="width:100%;margin:0px auto;" id="res_form" action="3b-reserve-slot.php" method="post">
      <label for="res_name">Name</label>
      <input type="text" name="res_name" required id="res_name" value="<?php echo $name; ?>"/>
      <label for="res_email">Email</label>
      <input type="email" name="res_email" required id="res_email" value="<?php echo $email; ?>"/>
      <label for="res_tel">Tel</label>
      <input type="text" name="res_tel" required id="res_tel" value="<?php echo $tel; ?>"/>
      <label for="res_notes">Notes (if any)</label>
      <input type="text" name="res_notes" id="res_notes"/>
      <label>Reservation Date</label>
      <div id="res_date" name="calandar" class="calendar"></div>
      <label>Reservation Slot</label>
        <select name="reservationslot">
            <option value="9-10AM">9-10AM</option>
            <option value="10-11AM">10-11AM</option>
            <option value="11AM-12PM">11AM-12PM</option>
            <option value="1-2PM">1-2PM</option>
            <option value="2-3PM">2-3PM</option>
            <option value="3-4PM">3-4PM</option>
        </select>
      <button id="res_go" name="submit" onclick="valueCheck()">Submit</button>
    </form>

  </body>
  </div>
<script>
    function valueCheck() {
        var active = document.getElementsByClassName("active")[0].innerHTML;
        document.getElementById("res_go").value = active;
    }
</script>
 <?php
include "media.php";
?>
<?php
include "base.php";
?>
</html>
