<?php
	include "header.php";
	include "Database/dbConnect.php"
	//ensures and admin is logged in
	$check=$_SESSION['admin_user'];
	if($check!="admin")
	{	
		header("Location:homeShop.php");
	}
?>

<br>
<html>
	<head>
		<title>Product</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<div class=content>
			<br>
			<?php
			$theID = $_GET["theID"];
			$db = dbConnect::getConnection();//databse connection
			$qryProduct = $db->query("SELECT * FROM product WHERE ProductID = ");  
			$qryProduct = $db->prepare
			("SELECT * FROM product WHERE ProductID = :productID");
			$qryProduct->execute(array
				(
					':productID' => $theID
				)
			);  
			$row = $qryProduct->fetch();
			
			$disp = "<table border=1 width=70%>";

			$display = '<center><table border="10" bordercolor="#21aaa7" width="90%">';
			$display.='<tr><td>Name</td><td>Description</td><td>Image</td><td>Price</td><td>Click to Add</td></tr>'; 
			$display.= '<tr>';
			$display.='<td>'.$row["ProductName"].'</td>';
			$display.='<td>'.$row["ProductDescription"].'</td>';	
			$display.='<td><img src='.$row["PictureRef"]. ' height=200 width=150></td>';
			$display.='<td>&pound'.$row["Price"]. '</td>';
			$display.='<td style="text-align: center"><a href=updateButton.php?theID='.$row["ProductID"].'><img src="Images/updateButton.jpg" width=200 height=200 align=auto></a></td>';
			$display.='</tr>';	

			$display.="</table></center>";
			echo $display;				
			
			?>
			<br>
			<div style="text-align: center" width=1095px>	
				<?php
					echo '
						<head>
							<style>
							button
							{
								background-color: #21aaa7;
								border: none;
								color: white;
								padding: 15px 32px;
								text-align: center;
								text-decoration: none;
								display: inline-block;
								hover: blue;
								font-size: 16px;
							}
							button:hover 
							{
								background-color: blue;
							}
							</style>
						</head>
						<body>
							<button onClick="javascript:history.go(-1)">Back</button>
						</body>
						';
				?>
			</div>
			<?php
				include "base.php";
			?>
		</div>
	</body>
</html>