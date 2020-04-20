<!DOCTYPE html>
<html lang="en">
<?php include "topper.php";?>
<link rel="stylesheet" href="HD4.css" type="text/css">

<body>
<br>
<div class=content>

    <button onclick="myFunction()">Help!</button>
    <script>
        function myFunction()
        {
            alert("Step 1:select the types; "+
                "Step 2:make a appointment; " +
                "Step 3:Our staff will contact to you to check information in next few hours");
        }
    </script>
        &nbsp&nbsp
            &nbsp&nbsp
<div class="section group p-portals">
    <div class="col span_1_of_3 page-portal">
        <img src="WSPics/single.jpg" alt="error" width="600" height="400">
        <h4><strong>SINGLE</strong></h4>
<p>
            <strong>Price: *£2/each</strong>
</p>
        <p>
            <strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*£4 for 3
        </p>
        <a class="outlined-link" href="appointment1.php">Choose me!</a>
    </div>
</div>

    <div class="section group p-portals">
        <div class="col span_1_of_3 page-portal">
            <img src="WSPics/album.jpg" alt="error" width="600" height="400">
            <h4><strong>ALBUM</strong></h4>
            <p>
                <strong>Price: *£10 each </strong>
            </p>
            <p>
                <strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*£20 for 3
            </p>
            <a class="outlined-link" href="appointment2.php">Choose me!</a>
        </div>
    </div>
</div>
</body>
    <?php
    include "base.php";
    ?>

</html>