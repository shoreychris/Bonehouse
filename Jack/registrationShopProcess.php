<?php
	include "Database/dbConnect.php";
	
	$db = dbConnect::getConnection();
	
	$em = $_POST["txtEmail"];
	$un = $_POST["txtUserName"];
	
	$emDuplicationCheck = $db->prepare
	("SELECT * FROM customer WHERE Email = '$em'");
	$emDuplicationCheck->execute();
	
	$unDuplicationCheck = $db->prepare
	("SELECT * FROM customer WHERE UserName = '$un'"); 
	$unDuplicationCheck->execute();
	
	$emCount = $emDuplicationCheck->rowCount();
	$unCount = $unDuplicationCheck->rowCount();
	
	if($emCount>0 OR $unCount>0)
	{
		header('Location: registerShop.php');
		//error message
	}
	else 
	{
		$db = dbConnect::getConnection();
	
		$fn = $_POST["txtFirstName"];
		$sn = $_POST["txtSurname"];
		$a1 = $_POST["txtAddress1"];
		$a2 = $_POST["txtAddress2"];
		$pc = $_POST["txtPostcode"];
		$tn = $_POST["txtTelephone"];
		$em = $_POST["txtEmail"];
		$un = $_POST["txtUserName"];
		$p1 = $_POST["txtPassword1"];
		
		$sqlInsertInto = $db->prepare(
		"INSERT INTO customer (Surname, FirstName, Address1, Address2,  PostCode, TelNo, Email, UserName, Password, UserType) 
		VALUES (:sn, :fn, :a1, :a2, :pc, :tn, :em, :un, :p1, 1)");
				
		$sqlInsertInto->bindParam('fn',$fn);
		$sqlInsertInto->bindParam('sn',$sn);
		$sqlInsertInto->bindParam('a1',$a1); 
		$sqlInsertInto->bindParam('a2',$a2); 
		$sqlInsertInto->bindParam('pc',$pc); 
		$sqlInsertInto->bindParam('tn',$tn); 
		$sqlInsertInto->bindParam('em',$em);
		$sqlInsertInto->bindParam('un',$un);
		$sqlInsertInto->bindParam('p1',$p1);
		
		if($sqlInsertInto->execute())
		{
			$_SESSION['login_username'] = $em;
			header('Location: homeShop.php');
			//message
		}
	}
?>