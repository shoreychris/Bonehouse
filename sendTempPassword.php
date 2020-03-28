<?php
       include "dbconnect.php"; 
$email = $_POST['email'];
$sql = "Select * from CUSTOMER where Email = '" . $email . "'";
       $fetch=mysqli_query($mysqli,$sql);    	
	$userCount = mysqli_num_rows($fetch);		
	$row = mysqli_fetch_array($fetch);	
	if($userCount==1)
	{	
		$num1 = rand();
		$num2 = rand();
		$num3 = $num1 . $num2;
		$sql ="Update CUSTOMER set Password = '" . $num3 . "' where Email = '" .$email . "'";

		mysqli_query($mysqli,$sql);  
		$msg = "Your password has been reset to " .  $num3;
		// send email
		mail($mail,"Password Reset for Barker & Bonehouse",$msg);
	}
		header("Location:login.php");
?> 	




