<?php 
       include "dbconnect.php"; 
	session_start();
	$user=$_POST['uName'];
	$pass=$_POST['pWord'];
	
	$sql = "SELECT * FROM CUSTOMER WHERE UserName='$user' and Password='$pass'";
       $fetch=mysqli_query($mysqli,$sql);    	

	$userCount = mysqli_num_rows($fetch);		
	$row = mysqli_fetch_array($fetch);	
		if ($userCount>0) 
		{		
			if($row['UserType']==2)
			{
				$_SESSION['admin_user']="admin";
			}
			
			$_SESSION['login_username']=$row['UserName'];  
			$check=$_SESSION['login_username'];
			header("Location:home.php");
		}
		else
		{
			header("Location:home.php");
		}
?>

<?php
include "dbconnect.php";
session_start();

$un = $_POST['un'];
$pw = $_POST['pw'];
$thisPW = mysqli_real_escape_string($mysqli,$_POST['pw']);
echo $pw;
echo $thisPW;

echo "<p>";
//the salt
$theSalt = "%6^123£";

//the salted password
$spw = $theSalt . $pw;


//hash the salted password
$hspw = md5($spw);
	$sql = "SELECT * FROM CUSTOMER WHERE UserName='$user' and Password='$pass'";
       $fetch=mysqli_query($mysqli,$sql);    	

	$userCount = mysqli_num_rows($fetch);		
	$row = mysqli_fetch_array($fetch);	
		if ($userCount>0) 
		{		
			if($row['UserType']==2)
			{
				$_SESSION['admin_user']="admin";
			}
			
			$_SESSION['login_username']=$row['UserName'];  
			$check=$_SESSION['login_username'];
			header("Location:home.php");
		}
		else
		{
			header("Location:home.php");
		}
?>