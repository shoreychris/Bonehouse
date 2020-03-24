
<?php
include "dbconnect.php";
	//this page will receive the details for the new customer using the post method, it will then connect to the database (using a dbconnect include) and 
	//enter the details into the database. Finally it will display the details and provide the user with a link back to the main page
	//include "dbconnect.php";	
	
	$fn = $_POST["txtFirst"];
	$sn = $_POST["txtSur"];
	$a1 = $_POST["txtAdd1"];
	$a2 = $_POST["txtAdd2"];
	$pc = $_POST["txtPost"];
	$tn = $_POST["txtTel"];
	$em = $_POST["txtEmail"];
	$un = $_POST["txtUser"];
	$p1 = $_POST["txtPass1"];
	$p2 = $_POST["txtPass2"];

	$sql2="Insert into CUSTOMER(Surname, FirstName, Address1, Address2,  PostCode, TelNo, Email, UserName, Password,UserType) values";
	$sql2.="('" . $sn . "','" . $fn . "','" . $a1 . "','" . $a2 . "','" . $pc . "','" . $tn . "','" . $em . "','" . $em . "','" . $p1 . "','1')";

	$userCount = 0;
	$sql = "Select * from CUSTOMER where  UserName = '" . $un ."'";

       //this looks for a member with the same email address
	$results = mysqli_query($mysqli,$sql);
	$userCount = mysqli_num_rows($results);	
	if($userCount>0)
	{
		echo"<a href=register.php>You have tried to register with an email address that is already registered, please click to return</a>";
	}
	else
	{
		$mysqli->query($sql2);
  		$_SESSION['login_username'] = $em;
		header("Location: home.php");
	}
?>

