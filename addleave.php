<html>
<head>
<?php
include "admintopper.php";
?>
<link rel="stylesheet" href="HD.css" type="text/css">
</head>
<body>
<div class=admin>

&nbsp
<h2>Add Employee</h2>
<html>
<body>
<table border =1>
<form action='newleave.php' method='post' enctype='multipart/form-data'>
<tr><td>Name:</td><td><input type='text' name='eName' size='40'></td></tr>
<tr><td>Address</td><td><textarea name='eAddrs' rows='5' cols='42' ></textarea></td></tr>
<tr><td>Phone No.:</td><td><input type='text' name='ePhone' size='40'></td></tr>
<tr><td>Select image to upload:</td><td><input type='file' name='fileToUpload' id='fileToUpload'></td></tr>
<tr><td>Category:</td><td><input type='text' name='category' size='40'></td></tr>
<tr><td></td><td><input type='submit' value='Upload New Employee Details' name='submit'></td></tr>
</form>
</table>
<a href=admin.php>Click to return to Admin home page</a>
</html> 


<br>
</div>



