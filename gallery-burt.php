<html>
<?php include "topper.php";?>
<link rel="stylesheet" href="HD4.css" type="text/css">
</head>
<body>

<div class=content>

<h2><center>Gallery</center></h2>

<button onclick="myFunction()">Help!</button>
<script>
function myFunction() 
{
    alert("Click on an image to view\ndetails of the product\nOr select a menu item to view another facility");
}
</script
    &nbsp&nbsp
    <div class="section group p-portals">
    <div class="col span_1_of_3 page-portal">
        <img src="WSPics/gallery1.JPG" alt="error" width="700">
        <h4>grooming</h4>
            <p>
                Barker&Bonehouse provides professional grooming services.
            </p>
        <a class="outlined-link" href="gallery1.php">View more</a>
    </div>
    <div class="col span_1_of_3 page-portal">
        <img src="WSPics/daycare1.jpg" alt="error" width="700">
        <h4>daycare</h4>
        <p>
            Barker&Bonehouse is a safe,loving and fun dog daycare center.
        </p>
       <a class="outlined-link" href="gallery2.php">View More  </a></div>
    </div>
    <div class="container">
        
        <?php
        include "media.php";
        ?>
    </div>


<?php
include "base.php";
?>
</div>
</body>
</html>
