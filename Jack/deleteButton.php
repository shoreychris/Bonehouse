<?php
	include "Database/dbConnect.php";
	$db = dbConnect::getConnection();//databse connection
	$theID = $_GET["theID"]; 
	$qryDeleteProduct = $db->prepare
	("DELETE FROM product WHERE ProductID = :productID");
	$qryDeleteProduct->execute(array
		(
			':productID' => $theID
		)
	); 
	header("location: deleteProduct.php");
?>