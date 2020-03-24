<html>
<head>
<?php
include "admintopper.php";
?>

<div class=admin>
<link rel="stylesheet" href="HD.css" type="text/css">
</head>
<body>
&nbsp
<center><h2>Manage Employees</h2></center>
<center><a href=admin.php>Click to return to Admin home page</a></center>
<?php
	include 'dbconnect.php';
	
		$eID = "";
		$eName = "";
		$eAddrs = "";
		$ePhone = "";
		$category = "";
		$eAnnual = "";
		$eSick = "";
	
    if(isset($_POST['eID']))
	{
		$eID = $_POST['eID'];
		$eName= $_POST['eName'];
		$eAddrs= $_POST['eAddrs'];
		$ePhone= $_POST['ePhone'];
		$category= $_POST['category'];
		$eAnnual= $_POST['eAnnual'];
		$eSick= $_POST['eSick'];
	}

	if($eID==""&&$eName==""&&$eAddrs==""&&$category=="")
	{
		$display = '<table border="4">';
		$display.='<tr>
					<td>Employee ID</td>
					<td>Name</td>
					<td>Address</td>
					<td>Phone No.</td>
					<td>Image</td>
					<td>Category</td>
					<td>Annual Leave</td>
					<td>Sick Leave</td>
					<td>Click to modify selected row only</td>
					</tr>'; 
		$sq ="SELECT * FROM employee";
		$sql = mysqli_query($mysqli,$sq);	
		$userCount = mysqli_num_rows($sql);
	
		if ($userCount > 0) 
		{	
			while($row = mysqli_fetch_array($sql))
			{
				if($row["EmployeeName"]!="")
				{
					$display.= "<tr>";
					$display.= "<form action='memp.php' method='post'>";
					$display.="<td><input type='text' value='" . $row['EmployeeID'] . "' name='eID' size=5 readonly></td>";
					$display.="<td><input type='text' value='" . $row['EmployeeName'] . "' name='eName' size=20></td>";
					$display.="<td><textarea name='eAddrs' rows='5' cols='42' >" . $row['EmployeeAddress'] . "</textarea></td>";
					$display.="<td><input type='text' value='" . $row['EmployeePhone'] . "' name='ePhone' size=20></td>";
					$display.="<td><img src='WSPics/" .$row['Image'] . "' width='60' size=15><br></td>";
					$display.="<td><input type='text' value='" . $row['Category'] . "' name='category' size=7></td>";
					$display.="<td><input type='text' value='" . $row['AnnualDays'] . "' name='eAnnual' size=5></td>";
					$display.="<td><input type='text' value='" . $row['SickDays'] . "' name='eSick' size=5></td>";
					$display.="<td><input type='submit' value='Modify this row' name='submit' size=7></td>";
					$display.="</form>";
					$display.="</tr>";	
				}
			}
			$display.="</table>";
			echo $display;
		}
	}
	else
	{		

$sql = "UPDATE employee SET EmployeeName = '". $eName . "' , 
							EmployeeAddress = '" . $eAddrs . "' , 
							EmployeePhone = '".$ePhone ."',
							Category = '" . $category . "',
							AnnualDays = '".$eAnnual ."',
							SickDays = '".$eSick ."'
							WHERE EmployeeID = " . $eID;
	
			if($mysqli->query($sql) === TRUE) 
			{
    				echo "<a href=admin.php>Click to return to Admin home page</a>";
			}
	}


	

?>
<br>
</div>
</body>
</html>

