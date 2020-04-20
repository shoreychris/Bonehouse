<html>
<head>
    <?php
    include "topper.php";
    ?>
    <link rel="stylesheet" href="HD.css" type="text/css">
</head>
<body>
<div class=content>

    &nbsp
    <center <h2 style="color:#21aaa7">Add pictures</h2>
    <html>
    <body>
	
    <table border="1" bordercolor="#21aaa7" width = 60%>
        <form action='newGallery.php' method='post' enctype='multipart/form-data'>
            <tr><td>Picture Name:</td><td><input type='text' name='pName' size='40'></td></tr>
            <tr><td>Product Description</td><td><textarea name='pDesc' rows='5' cols='42' ></textarea></td></tr>
            <tr><td>Select image to upload:</td><td><input type='file' name='fileToUpload' id='fileToUpload'></td></tr>
            <tr><td>Category:</td><td><input type='text' name='category' size='40'></td></tr>
            <tr><td></td><td><input type='submit' value='Upload New Product Details' name='submit'></td></tr>
        </form>
    </table>
    <a href=admin.php>Click to return to Admin home page</a>
    </center>
	</html>


    <br>
</div>


<?php
include "base.php";
?>