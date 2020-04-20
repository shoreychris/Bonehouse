<?php
	include "header.php";//including header
	include "Database/dbConnect.php";//including database class
?>

<br>

<html>
	<head>
		<title>orm Treatment</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
	</head>
	<body>
		<div class=content>
			
			<?php
				$db = dbConnect::getConnection();//database connection
				
				$display = '<center><table  border=10 bordercolor="#21aaa7">';//declaring table variable
				$display.='<tr><td>Name</td><td>Image</td><td>Price</td></tr><br>'; //table headings
				$qryWormers = $db->query("SELECT * FROM product WHERE Category = 'Wormers'"); //query to retrieving the products relating to the category
				
				while($row = $qryWormers->fetch())//while query is exceuted, table rows are looped through until each product is fetched
				{
					$display.= '<tr>';
					$display.='<td>'.$row["ProductName"].'</td>';//product name column		
					$display.='<td><a href=product.php?theID='. $row["ProductID"].'><img src='.$row["PictureRef"]. ' height=200 width=200></a></td>';//image column
					$display.='<td>&pound'.$row["Price"]. '</td>';//price column
					$display.='</tr>';	
				}
				$display.="</table></center>";
				echo "<br>";
				echo "<center><h2 style='color:#21aaa7'>Worm Treatment</h2></center>";
				echo "<br>";
				echo $display;//outputting table
			?>

			<?php
				include "base.php";//including footer
			?>
		</div>
	</body>
</html>