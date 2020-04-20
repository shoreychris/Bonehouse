<?php 
	include "header.php";
	include "Database/dbConnect.php";
	//ensures and admin is logged in
	$check=$_SESSION['admin_user'];
	if($check!="admin")
	{	
		header("Location:homeShop.php");
	}
?>

<?php
	if(isset($_POST['update']))
	{
		$db = dbConnect::getConnection();//database connection
		
		//variable names
		$productNo = $_GET['theID'];
		$productName = $_POST['name'];
		$productQty = $_POST['quantity'];
		$productPrice = $_POST['price'];
		
		if(isset($_POST['name']) AND $productName != null)
		{
			$qryUpdateRow = $db->prepare
			("UPDATE product SET ProductName = :name WHERE ProductID = :id");
			$qryUpdateRow->execute(array
				(
					'name' => $productName,
					'id' => $productNo
				) 
			);
		}
		if(isset($_POST['quantity']) AND $productQty != null)
		{
			$qryUpdateRow = $db->prepare
			("UPDATE product SET Current = :quantity WHERE ProductID = :id");
			$qryUpdateRow->execute(array
				(
					'quantity' => $productQty,
					'id' => $productNo
				) 
			);
		}
		if(isset($_POST['price']) AND $productPrice != null)
		{
			$qryUpdateRow = $db->prepare
			("UPDATE product SET Price = :price WHERE ProductID = :id");
			$qryUpdateRow->execute(array
				(
					'price' => $productPrice,
					'id' => $productNo
				) 
			);
		}
		if(isset($_POST['image']))
		{
			//send photo to root folder before uploading to database
			$file = $_FILES['image'];
			$fileName = $_FILES['image']['name'];
			$fileTempName = $_FILES['image']['tmp_name'];
			$fileSize = $_FILES['image']['size'];
			$fileError = $_FILES['image']['error'];
			$fileType = $_FILES['image']['type'];
		
			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));
		
			$allowed = array('jpg', 'jpeg', 'png');
		
			if(in_array($fileActualExt, $allowed))
			{
				if ($fileError === 0)
				{
					if ($fileSize < 10000000)
					{
						//sending photo from root folder into the database
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$fileDestination = 'Images\\'.$productCategory.'\\'.$fileNameNew;
						move_uploaded_file($fileTempName, $fileDestination);
						$qryUpdateRow = $db->prepare
						("UPDATE product SET PictureRef = :PictureRef WHERE ProductID = :id");
						$qryUpdateRow->execute(array
							(
								'PictureRef' => $fileDestination,
								'id' => $ProductNo
							) 
						);
					}
					else 
					{
						echo "File was too large.  Try another one";
					}
				}
				else 
				{
					echo "Image couldn't be uploaded";
				}
			}
			else 
			{
				echo "Photo file not allowed. Only jpg, jpeg or png files are allowed";
			}	
		}		
	}
		
?>

<html>
	<head>
		<title>Update Product</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
		<style>
			input[id=name] 
			{
				width: 100%;
			}
			input[id=quantity] 
			{
				width: 25%;
			}
			input[id=price] 
			{
				width: 25%;
			}
			input[type=submit] 
			{
				background-color: #21aaa7;
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
		<div class=content style="text-align: center">
			<center>
				<br>
				<h2 style='color:#21aaa7'>Update Product</h2>
				<br>
				<table border="1" bordercolor="#21aaa7" width = 80%>
					<form name='newProduct' method='post' action='updateButton.php?theID<?php echo "=".$_GET["theID"]; ?>' enctype='multipart/form-data'>
						<tr>
							<td>
								<?php
									$db = dbConnect::getConnection();//database connection
									$theID = $_GET["theID"];
									$qryName = $db->prepare("SELECT ProductName FROM product WHERE ProductID = :productID"); //query to retrieving the products relating to the category
									$qryName->execute(array
										(
											':productID' => $theID
										)
									);
									$name = $qryName->fetch();
									print_r($name[0]);
								?>
							</td>
							<td>Change Product Name</td>
							<td><input type=text id='name' name='name'>
						</tr>
						<tr>
							<td>
								<?php
									$db = dbConnect::getConnection();//database connection
									$theID = $_GET["theID"];
									$qryPhoto = $db->prepare("SELECT PictureRef FROM product WHERE ProductID = :productID"); //query to retrieving the products relating to the category
									$qryPhoto->execute(array
										(
											':productID' => $theID
										)
									);
									$photo = $qryPhoto->fetch();
									$imgDisplay = '<img src='.$photo["PictureRef"]. ' height=300 width=100%>';
									print_r($imgDisplay);
								?>
							</td>
							<td>Change Photograph</td>
							<td><input type=file name='image'></td>
						</tr>
						<tr>
							<td>
								<?php
									$db = dbConnect::getConnection();//database connection
									$theID = $_GET["theID"];
									$qryQty = $db->prepare("SELECT Current FROM product WHERE ProductID = :productID"); //query to retrieving the products relating to the category
									$qryQty->execute(array
										(
											':productID' => $theID
										)
									);
									$qty = $qryQty->fetch();
									print_r($qty[0]);
								?>
							</td>
							<td>Change Quantity</td>
							<td><input type=number id='quantity' name='quantity' min='1' max='9999'></td>
						</tr>
						<tr>
							<td>
								<?php
									$db = dbConnect::getConnection();//database connection
									$theID = $_GET["theID"];
									$qryPrice = $db->prepare("SELECT Price FROM product WHERE ProductID = :productID"); //query to retrieving the products relating to the category
									$qryPrice->execute(array
										(
											':productID' => $theID
										)
									);
									$price = $qryPrice->fetch();
									print_r($price[0]);
								?>
							</td>
							<td>Change Price</td>
							<td><input type=number id='price' name='price' min='0.01' max='99999999999' step=".01"></td>
						</tr>
						<tr>
							<td colspan=5 align=center>
								<input type='submit' name='update' value='Update'></td>
							</td>
						</tr>	
					</form>	
				</table>
			</center>	
			<?php 
				include "base.php";
			?>
		</div>
	</body>
</html>