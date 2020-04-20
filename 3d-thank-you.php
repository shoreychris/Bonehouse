<?php
include "topper.php";
?>

<html>
  <head>
    <title>
      PHP Reservation Demo - Thank You Page
    </title>
    <link href="public/3-theme.css" rel="stylesheet">
  </head>
  <body style="text-align:center">
    <h1>
      THANK YOU! YOUR RESERVATION IS NOW BEING ADDED!
    </h1>
	<h2>
	  <font style="color:#FF0000;">If you want to <strong> CANCEL </strong> your reservation, please contact us by phone or E-mail. </font>
    </h2>	  
	<form action="home.php" method="post" name="booking">
    <input type="submit" value ="Return Home"/>
	</form>
  </body>
</html>
<?php
include "media.php";
?>
<?php
include "base.php";
?>