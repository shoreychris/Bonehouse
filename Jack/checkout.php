<?php 
	include "header.php";
	include "Database/dbConnect.php";
?>

<html>
	<head>
		<title>Checkout</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
		<style>
			input[type=submit] 
			{
				background-color: #8e96ff;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				hover: blue;
				font-size: 15px;
			}
			input[type=submit]:hover
			{
				background-color: blue;
			}
		</style>
	</head>
	<body>
		<br>
		<div class=content>
			<br>
			<?php
			try 
			{
				$db = dbConnect::getConnection();//database connection
				
				//if session has not started, one will be started
				if (!isset($_SESSION)) 
				{
					session_start();
				}
				
				//if username is logged in
				if(isset($_SESSION['login_username']))
				{
					//table declared for ordering
					echo "<center><h2 style='color:#21aaa7'>Checkout</h2></center>";
					echo "<center><table 'border=2' bordercolor='#21aaa7' width='75%' bgcolor=#eeeeee><tr><td>";
					echo "<p>";
					
					//customer details fetched
					$userName = $_SESSION["login_username"];
					$qrySearchCustomer = $db->prepare
					("SELECT * FROM customer WHERE UserName = :username");
					$qrySearchCustomer->execute(array
						(
							'username' => $userName
						)
					);   
					$row = $qrySearchCustomer->fetch();
					
					//customer details appended
					$orderDate = date("d-m-y");
					echo "Order Date ".$orderDate."<br>";	
					$customerDetails = "<center><table border = 0><tr><td>Customer ID </td><td><b>".$row["CustomerID"]."</b></td></tr>";
					$customerDetails.= "<tr><td>Name</td><td><b>".$row["FirstName"]." ".$row["Surname"]."</b></td></tr>";
					$customerDetails.= "<tr><td>Address</td><td><b>".$row["Address1"]." ".$row["Address2"]." ".$row["PostCode"]."</b></td></tr>";
					$customerDetails.= "<tr><td>Telephone</td><td><b>".$row["TelNo"]."</b></td></tr>";
					$customerDetails.= "<tr><td>Email</td><td><b>".$row["Email"]."</b></td></tr></table></center>";
					echo $customerDetails;
					echo "<br>";	
					
					//if there's goods posted
					if(isset($_SESSION["goods"]))
					{
						$grandTotal = 0;
						//start of table
						$start = "";
						$start.="<center><table border=1 padding=2><tr align=center>";
						$start.="<td width=150px>Product ID</td>";
						$start.="<td>Product Name</td><td width=150px>Quantity</td><td>Price</td><td>Total</td></tr>";
						echo $start;
						$c = 0;	

						//loops through each product until they're all added
						foreach($_SESSION["goods"] as $eachItem)
						{
							$id = $eachItem["id"];//Product Id
							$quantity = $eachItem["quantity"];//product Qty
							
							//Searching for product in db
							$qrySearchProduct = $db->prepare
							("SELECT * FROM product WHERE ProductID = :id");
							$qrySearchProduct->execute(array
								(
									'id' => $id,
								)
							); 
							$row = $qrySearchProduct->fetch();
							
							//end of the table getting appended
							$end = "";
							$end.= "<tr align=center><td>".$id."</td><td>";
							$end.= $row['ProductName']."</td><td>".$quantity."</td><td>&pound".$row['Price']."</td><td>&pound";
							$deliveryFee = $_GET['deliveryFee'];
							$subTotal = $quantity * $row['Price'];
							$end.= $subTotal."</td></tr>";
							$grandTotal = $grandTotal + $subTotal + $deliveryFee;
							echo $end ;
						}
						//grand total outputed
						echo "<tr><td colspan=5 align=right>Delivery: <b>&pound".$deliveryFee."</b></td>";
						echo "<tr><td colspan=5 align=right><b>&pound".$grandTotal."</b></td>";
						echo "<tr><td colspan=5 align=center><b><a href=placeOrder.php?total=".$grandTotal."&qty=".$quantity."&deliveryFee=".$deliveryFee.">";
						echo "<input type=submit value='Confirm'></a></table></center>";	
						echo "</td></tr></table>";
					}
				}
				//User is redirected to login page if they're not logged in
				else
				{
					header ('Location: loginShop.php');
				}
			}
			catch (Exception $exception)
			{
				header("Location:homeShop.php");
			}
			?>
			<?php 
				include "base.php";
			?>			
		</div>
	</body>
</html>




