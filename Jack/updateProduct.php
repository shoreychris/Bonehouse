<?php
	include "header.php";//including header
	include "Database/dbConnect.php";//including database class
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
		<title>Update Product</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<div class=content>
			<?php
				$db = dbConnect::getConnection();//database connection
				
				$display = '<center><table  border=10 bordercolor="#21aaa7">';//declaring table variable
				$display.='<tr><td>Name</td><td>Image</td><td>Price</td></tr><br>'; //table headings
				$qryProducts = $db->query("SELECT * FROM product"); //query to retrieving the products relating to the category
				
				while($row = $qryProducts->fetch())//while query is exceuted, table rows are looped through until each product is fetched
				{
					$display.= '<tr>';
					$display.='<td>'.$row["ProductName"].'</td>';//product name column		
					$display.='<td><a href=updateProductProcess.php?theID='. $row["ProductID"].'><img src='.$row["PictureRef"]. ' height=200 width=200></a></td>';
					$display.='<td>&pound'.$row["Price"].'</td>';//price column
					$display.='</tr>';	
				}
				$display.="</table></center>";
				echo "<br>";
				echo "<center><h2 style='color:#21aaa7'>Update Product</h2></center>";
				echo "<br>";
				echo $display;//outputting table
			?>

			<?php
				include "base.php";//including footer
			?>
		</div>
	</body>
</html>