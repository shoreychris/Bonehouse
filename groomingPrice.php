<!DOCTYPE html>
<html lang="en">
<?php include "topper.php";?>
<link rel="stylesheet" href="HD4.css" type="text/css">

<body>

<div class=content>

    <button onclick="myFunction()">What Should I Do ?</button>
    <script>
        function myFunction()
        {
            alert("Step 1:Scan our price list;\nStep 2:Make a reservation;\nStep 3:Our staff will contact you to check the information in next few hours.");
        }
    </script>
        &nbsp;&nbsp;
            &nbsp;&nbsp;
<div class="section group p-portals">
    <div class="col span_1_of_3 page-portal">
        <img src="Large.jpg" alt="error" width="600" height="400">
        <h4><strong>For Large Size</strong></h4>
<p>
            <strong>Price: £80 each</strong>
</p>
        <a class="outlined-link" href="3b-reserve-slot.php">Book now !</a>
    </div>
</div>

    <div class="section group p-portals">
        <div class="col span_1_of_3 page-portal">
            <img src="Medium.jpg" alt="error" width="600" height="400">
            <h4><strong>For Medium Size</strong></h4>
            <p>
                <strong>Price: £60 each </strong>
            </p>
            <a class="outlined-link" href="3b-reserve-slot.php">Book now !</a>
        </div>
    </div>
	
	<div class="section group p-portals">
        <div class="col span_1_of_3 page-portal">
            <img src="Small.jpg" alt="error" width="600" height="400">
            <h4><strong>For Small Size</strong></h4>
            <p>
                <strong>Price: £40 each</strong>
            </p>
            <a class="outlined-link" href="3b-reserve-slot.php">Book now !</a>
        </div>
    </div>
</div>
</body>
    <?php
    include "base.php";
    ?>

</html>