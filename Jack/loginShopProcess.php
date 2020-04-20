<?php 
	include "Database/dbConnect.php";
	include "loginShop.php";
	
	$db = dbConnect::getConnection();
	
	$un = $_POST["txtUserName"];
	$pw = $_POST["txtPassword"];
	
	//admin
	$sqlSearchAdmin = $db->prepare
	("SELECT * FROM customer WHERE UserType = 2 AND UserName = :username AND Password = :password");
    $sqlSearchAdmin->execute(array
		(
			'username' => $un,
			'password' => $pw
		)
	);  
	//customer
	$sqlSearchCustomer = $db->prepare
	("SELECT * FROM customer WHERE UserName = :username AND Password = :password");
    $sqlSearchCustomer->execute(array
		(
			'username' => $un,
			'password' => $pw
		)
	);   
	
	$rowCount = $sqlSearchCustomer->rowCount();
	$adminCount = $sqlSearchAdmin->rowCount();
	if($rowCount > 0)
	{
		if($adminCount > 0)
		{
			//if admin or user is already logged in, end the login session
			if(isset ($_SESSION['login_username']) OR ($_SESSION['admin_user']))
			{
				session_destroy();
			}
			session_start();
			$_SESSION['login_username'] = $un;
			$_SESSION['admin_user'] = "admin";
			header("location: homeShop.php");
		}
		else 
		{
			//if admin or user is already logged in, end the login session
			if(isset ($_SESSION['login_username']) OR ($_SESSION['admin_user']))
			{
				session_destroy();
			}
			session_start();
			$_SESSION['login_username'] = $un;
			header("location: homeShop.php");
		}
	}
	else 
	{
		header("location: loginShop.php");
		echo "User Name not Recognised.  Please Register";
	}
?>