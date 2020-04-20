<?php
	try 
	{
		include "Database/dbConnect.php";

		session_start();
		
		$db = dbConnect::getConnection();//database connection
		
		//Retrieves Customer data
		$userName = $_SESSION["login_username"];
		$qrySearchCustomer = $db->prepare
		("SELECT * FROM customer WHERE UserName = :username");
		$qrySearchCustomer->execute(array
			(
				'username' => $userName
			)
		);   
		$row = $qrySearchCustomer->fetch();	
		
		//variables
		$customerID = $row["CustomerID"];
		$subTotal = $_GET["total"];
		$deliveryFee = $_GET["deliveryFee"];
		$total = $subTotal + $deliveryFee;
		
		//Adds Data/Variables into weborders table
		$qryPlaceOrder = $db->prepare 
		("INSERT INTO weborders (CustomerID, Subtotal, ShippingFee, Total) VALUES (:CustomerID, :Subtotal, :DeliveryFee, :Total)");
		$qryPlaceOrder->execute(array
			(
				'CustomerID' => $customerID,
				'Subtotal' => $subTotal,
				'Total' => $total,
				'DeliveryFee' => $deliveryFee
			)
		);   
		$orderNo = $db->lastInsertId();

		$goods = $_SESSION['goods'];
		foreach($goods as $eachItem)
		{
			$id = $eachItem["id"];
			$qty = $eachItem["quantity"];//TODO
			
			$qrySearchProduct = $db->prepare
			("SELECT * FROM product WHERE ProductID = :id");
			$qrySearchProduct->execute(array
				(
					'id' => $id
				)
			); 
			$rowSearch = $qrySearchProduct->fetch();
			$numRows = $qrySearchProduct->rowCount();
			$dbquant = $rowSearch['Current'];

			//if quantity is unavailable - error message is given
			if ($quantity > $dbquant)
			{
				echo "sorry, there is insufficient stock";
				echo "there are $dbquant items remaining in stock";
			}
			//Inserts details into orders table and updates the quantity of stock left
			else 
			{	
				$productID = $rowSearch['ProductID'];
				$subTotal = $_GET['total'];
				$qty = $eachItem["quantity"];
				
				//order details for multi product purchases
				$qryProcessOrder = $db->prepare
				("INSERT INTO orderline (OrderNo, ProductID, Quantity) VALUES (:orderNo, :productID, :qty)");
				$qryProcessOrder->execute(array
					(
						'orderNo' => $orderNo,
						'productID' => $productID,
						'qty' => $qty
					)
				); 
				
				//decrement qty by the amount purchased
				$qryNewQty = $db->prepare ("SELECT * FROM customer WHERE UserName = :username");
				$newquant = $dbquant - $qty;
				$qryUpdateQty = $db->prepare
				("UPDATE product SET Current = :newquant WHERE ProductID = :id");
				$qryUpdateQty->execute(array
					(
						'newquant' => $newquant,
						'id' => $productID
					)
				); 
			}			
		}
		//ends session
		unset($_SESSION["goods"]);
		//redirects user to home page
		header("Location: homeShop.php");
	}
	catch (Exception $exception)
	{
		header("Location:homeShop.php");
	}
?>
