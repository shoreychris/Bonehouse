o<?php 
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
	//once submit button is pressed
	if(isset($_POST['upload']))
	{
		$db = dbConnect::getConnection();//database connection	
		//variable names
		$productName = $_POST['name'];
		$productDescription = $_POST['description'];
		$productQty = $_POST['quantity'];
		$productPrice = $_POST['price'];
		$productCategory = $_POST['category'];
		
		//Insert Data unto database
		$qryUploadProduct = $db->prepare
		("INSERT INTO product (ProductName, ProductDescription, Price, Current, Category) VALUES (:ProductName, :ProductDescription, :Price, :Current, :Category)");
		$qryUploadProduct->execute(array
			(
				'ProductName' => $productName,
				'ProductDescription' => $productDescription,
				'Price' => $productPrice,
				'Current' => $productQty,
				'Category' => $productCategory
			)
		); 
		$ProductNo = $db->lastInsertId();
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
					header('Location: adminHome.php');
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
?>

<html>
	<head>
		<title>New Product</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
		<style>
			input[id=name] 
			{
				width: 100%;
			}
			input[id=description] 
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
		<script>
			//ensures all fileds are filled in by user
			function isComplete()
			{
				var isComplete = true;
				
				var pn = document.forms["newProduct"]["name"].value;
				var pg = document.forms["newProduct"]["image"].value;
				var pd = document.forms["newProduct"]["description"].value;		
				var qy = document.forms["newProduct"]["quantity"].value;	
				var pr = document.forms["newProduct"]["price"].value;	
				var cg = document.forms["newProduct"]["category"].value;

				if(pn!="" & pg!="" & pd!="" & qy!="" & pr!="" & cg!="")
				{
					
				}
				else
				{
					isComplete = false;
					alert("Please complete all fields");
				}
				return isComplete;
			}
		</script>
	</head>
	
	<body>
		<br>
		<div class=content style="text-align: center">
			<center>
				<br>
				<center><h2 style='color:#21aaa7'>New Product</h2></center>
				<br>
				<table border="1" bordercolor="#21aaa7" width = 60%>
					<form name='newProduct' method='post' action='newProduct.php' onsubmit='return isComplete()' enctype='multipart/form-data'>
						<tr>
							<td>Enter Product Name</td>
							<td><input type=text id='name' name='name'>
						</tr>
						<tr>
							<td>Photograph</td>
							<td><input type=file name='image'></td>
						</tr>
						<tr>
							<td>Enter Product Description</td>
							<td><input type=text  id='description' name='description'></td>
						</tr>
						<tr>
							<td>Enter Quantity</td>
							<td><input type=number id='quantity' name='quantity' min='1' max='9999'></td>
						</tr>
						<tr>
							<td>Enter Price</td>
							<td>
								<input type=number id='price' name='price' min='0.01' max='99999999999' step=".01">
							</td>
						</tr>
						<tr>
							<td>Select Category</td>
							<td align=left>
								<input type="radio" id="Bathing" name="category" value="Bathing">
								<label for="Bathing">Bathing</label>
								<br>
								<input type="radio" id="ChewToys" name="category" value="ChewToys">
								<label for="ChewToys">Chew Toys</label>
								<br>
								<input type="radio" id="DogBeds" name="category" value="DogBeds">
								<label for="DogBeds">Dog Beds</label>
								<br>
								<input type="radio" id="DogCoats" name="category" value="DogCoats">
								<label for="DogCoats">Dog Coats</label>
								<br>
								<input type="radio" id="DogCollars" name="category" value="DogCollars">
								<label for="DogCollars">Dog Collars</label>
								<br>
								<input type="radio" id="DogLeads" name="category" value="DogLeads">
								<label for="male">Dog Leads</label>
								<br>
								<input type="radio" id="FleaAndTick" name="category" value="FleaAndTick">
								<label for="FleaAndTick">Flea and Tick</label>
								<br>
								<input type="radio" id="Grooming" name="category" value="Grooming">
								<label for="male">Grooming</label>
								<br>
								<input type="radio" id="Hygiene" name="category" value="Hygiene">
								<label for="Hygiene">Hygiene</label>
								<br>
								<input type="radio" id="OutdoorToys" name="category" value="OutdoorToys">
								<label for="OutdoorToys">Outdoor Toys</label>
								<br>
								<input type="radio" id="SoftToys" name="category" value="SoftToys">
								<label for="SoftToys">Soft Toys</label>
								<br>
								<input type="radio" id="Wormers" name="category" value="Wormers">
								<label for="Wormers">Wormers</label>
								<br>
							</td>
						</tr>	
						<tr>
							<td colspan=5 align=center>
								<input type='submit' name='upload' value='Submit'></td>
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