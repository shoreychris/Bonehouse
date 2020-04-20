<?php 
	include "header.php";
	include "Database/dbConnect.php";
?>

<html>
	<head>
		<title>Basket</title>
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
				if (!isset($_SESSION)) 
				{	
					session_start();
				}
				$db = dbConnect::getConnection();//database connection

				
				if (isset($_GET['theID']))//if there's a pr
				{
					$theID = $_GET["theID"];

					if(isset($_SESSION["goods"]))
					{	
						$i = 0;
						$found = false;
						
						foreach($_SESSION["goods"] as $eachItem)
						{
							if($theID == $eachItem["id"])
							{ 
								
								array_splice($_SESSION["goods"],$i,1, array(array("id"=> $theID ,"quantity"=>$eachItem["quantity"]+1)));				
								$found = true;
							}
							$i++;	
						}
						if($found==false)
						{	
							if($theID!="")
							{
								
								array_push($_SESSION["goods"], array("id" => $theID, "quantity" =>1));
							}
						}	
					}
					else
					{
						if($theID!="")
						{ 
							$_SESSION["goods"] = array(0 => array("id" => $theID, "quantity" => 1));
						}
					}
				}
				else if(isset($_GET["action"]))//if more qty is added or subtracted
				{
					$pl_min_rem = $_GET["action"];
					$theID = $_GET["selfID"];
					$arrayPos = $_GET["arrayPos"];
					$quantity = $_GET["cQ"];

					
					if($pl_min_rem==0)
					{
						array_splice($_SESSION["goods"],$arrayPos,1, array(array("id"=> $theID ,"quantity"=>$quantity+1)));
					}
					
					else if($pl_min_rem==1)
					{
						if($quantity<2)
						{
							unset($_SESSION["goods"][$arrayPos]);
							sort($_SESSION["goods"]);
						}
						else	
						{
							array_splice($_SESSION["goods"],$arrayPos,1, array(array("id"=> $theID ,"quantity"=>$quantity-1)));
						}
					}
					
					else if($pl_min_rem==2)
					{	
						unset($_SESSION["goods"][$arrayPos]);
						sort($_SESSION["goods"]);
					}
					
				}	
				
				if(isset($_SESSION["goods"]))//if there are products in the array to be purchases
				{
					//total price
					$grandTotal = 0;
					
					//table
					$tableBeginning = "";
					$tableBeginning .="<table border=2 bordercolor='#21aaa7' width=auto><tr align=center>";
					$tableBeginning .="<td width=auto>ProductID</td>";
					$tableBeginning .="<td>Product Name</td><td width=auto>Description</td><td>Image</td><td width=auto>Quantity</td><td>Price</td><td>Total</td>";
					$tableBeginning .="<td width =auto>Add</td><td width=auto>Minus</td><td width=auto>Remove</td></tr>";
					
					//outputs table
					echo "<center><h2 style='color:#21aaa7'>Basket</h2></center>";
					echo $tableBeginning;
					
					$count = 0;
					
					
					foreach($_SESSION["goods"] as $eachItem)//loops through each item
					{

						$id = $eachItem["id"];//unique product id number
						$quantity = $eachItem["quantity"];//number of items added to database
						
						$qryProducts = $db->prepare ("SELECT * FROM product WHERE ProductID = :productID");
						$qryProducts->execute(array
							(
								':productID' => $id
							)
						);//query to retrieve the data relating to the product id
						$row = $qryProducts->fetch();//fetches the data relating to the product ID
						
						//adds or subtracts the quantity of products required by customer
						$addAndSubtract = "";
						$addAndSubtract.="<a href=basket.php?arrayPos=$count&selfID=$id&action=0&cQ=$quantity>+1</a></td><td>";
						$addAndSubtract.="<a href=basket.php?arrayPos=$count&selfID=$id&action=1&cQ=$quantity>-1</a></td><td>";
						$addAndSubtract.="<a href=basket.php?arrayPos=$count&selfID=$id&action=2&cQ=$quantity><input type=submit value='Remove'></a></td>";

						//adding the data retrieved from the database into each table column
						$dataFields = "";
						$dataFields.= "<tr align=center><td>".$id."</td><td>";
						$dataFields.= $row['ProductName']."</td><td>".$row['ProductDescription'];
						$dataFields.= "</td><td><img src=".$row['PictureRef']." height=110></td><td>".$quantity."</td><td>&pound".$row['Price']."</td><td>&pound".$quantity * $row['Price']."</td><td>".$addAndSubtract."</tr>";
						
						$grandTotal = $grandTotal + ($quantity * $row['Price']);//calculates total cost
						
						$dataFields.= "<br>";
						
						echo $dataFields;//ouputs data
						$count++;
					}
					echo"</table>";//table end
					echo "<br>";
					//delivery choice
					echo " 
						<div class = wrapper1 width = 100% style='text-align:center'> 
							<div class = checkout width=300px height=auto style='text-align:left'>
								<form name='delivery' method='post' action='basket.php' enctype='multipart/form-data'>
									<h2>Please Select Delivery</h2>
									<input type='radio' id='Premium' name='qty' value=4.99  onclick=somefunction>
										<label for='Premium'>Premium Courier: 4.99</label>
										<br>
										<input type='radio' id='Standard' name='qty' value=2.49 onclick=somefunction>
										<label for='Standard'>Standard Delivery: 2.99</label>
										<br>
										<input type='radio' id='Collection' name='qty' value='0.00' onclick=somefunction>
										<label for='qty'>Collection</label>
										<br>
										<br>
										<input type='submit' value='Submit'>
								</form>
							</div>
						</div>
						";
					//if delivery is null checkout hyperlink will not appear
					if(isset($_POST['qty']) == null)
					{
						$deliveryFee = null;
					}
					else 
					{
						$deliveryFee = $_POST['qty'];
					}
					$finalGrandTotal = $grandTotal + $deliveryFee;//final total adds the delivery fee
					echo "<h3>Total: &pound".$grandTotal."</h3>";//outputs grand total
					echo "<h3>Delivery: &pound".$deliveryFee."</h3>";//outputs grand total
					echo "<h2>Grand Total: &pound".$finalGrandTotal."</h2>";//outputs final grand total
					if ($deliveryFee != null)
					{
						echo " 
							<div class = wrapper2 width = 100% style='text-align:center'> 
								<div class = checkout width=300px height=100px style='text-align:center'>
									<a href=checkout.php?total=$grandTotal&qty=$quantity&deliveryFee=$deliveryFee><img src='Images/checkout.JPG' width=300px height=100px align=center>
								</div>
							</div>
							";
					}
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

