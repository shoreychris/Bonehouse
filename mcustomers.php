<?php
include "admintopper.php";
?>
<div class=admin>
<link rel="stylesheet" href="HD.css" type="text/css">

&nbsp
<h2>Manage Customers/Admin</h2>
<button onclick="myFunction()">Help!</button>
<script>
function myFunction() 
{
    alert("Make any necessary amendments to customer details. \nClick update when finished. \nUser type 2 is given admin access.");
}
</script
<center>
<a href="admin.php" class="btn btn-success pull-left">Admin home page</a>
</center>
<?php
include "dbconnect.php";
echo 
$CustomerID =	"";
$Surname  =	"";
$FirstName ="";
$Address1 =	"";
$Address2 =	"";
$PostCode =	"";
$TelNo =	"";
$Email =	"";
$UserName =	"";
$UserType = "";


if(isset($_POST['UserType']))
{
	$UserType = $_POST['UserType'];
}
	//these posts are set if this page is called from itself
    if(isset($_POST['CustomerID']))
	{
			$CustomerID =	$_POST['CustomerID'];
			$Surname = $_POST['Surname'];
			$FirstName = $_POST['FirstName'];
			$Address1 = $_POST['Address1'];
			$Address2 = $_POST['Address2'];
			$PostCode = $_POST['PostCode'];
			$TelNo = $_POST['TelNo'];
			$Email = $_POST['Email'];
			$UserName = $_POST['UserName'];
			$UserType = $_POST['UserType'];
	}


if($CustomerID=="" && $Surname=="")
{
	$sql="select *from CUSTOMER";
    $results = mysqli_query($mysqli,$sql);
    $display = '<center><table border="1">';
    $display.='<tr><td>ID</td><td>Surname</td><td>First<br>Name</td><td>Address1</td>';
	$display.='<td>Address2</td><td>Postcode</td><td>Tel No</td><td>Email</td><td>Username</td><td>User Type</td><td>Click to update</td></tr>';
	
	//this adds a blank user at the top
	$display.= "<tr><form name=new action=mcustomers.php method=post>";
	$display.="<td><input type=text name=CustomerID value='new' size=2 readonly></td>";
	$display.="<td><input type=text name=Surname  size=9></td>";
	$display.="<td><input type=text name=FirstName  size=9 ></td>";
	$display.="<td><input type=text name=Address1  size=11></td>";
	$display.="<td><input type=text name=Address2  size=11></td>";
	$display.="<td><input type=text name=PostCode  size=7></td>";
	$display.="<td><input type=text name=TelNo  size=8></td>";
	$display.="<td><input type=text name=Email  size=11></td>";
	$display.="<td><input type=text name=UserName  size=9></td>";
	$display.="<td><input type=text name=UserType  size=3></td>";
	$display.="<td><input type=submit value=New></form>";
	$display.="</td>";


	while($row = mysqli_fetch_array($results))
	{
		$display.= "<tr><form name=update action=mcustomers.php method=post>";


		$display.="<td><input type=text name=CustomerID value=" . $row['CustomerID'] . " size=2 readonly></td>";
		$display.="<td><input type=text name=Surname value=" . $row['Surname'] . " size=9></td>";
		$display.="<td><input type=text name=FirstName value=" . $row['FirstName'] . " size=9 ></td>";
		$display.="<td><input type=text name=Address1 value='" . $row['Address1'] . "' size=11></td>";
		$display.="<td><input type=text name=Address2 value=" . $row['Address2'] . " size=11></td>";
		$display.="<td><input type=text name=PostCode value=" . $row['PostCode'] . " size=7></td>";
		$display.="<td><input type=text name=TelNo value=" . $row['TelNo'] . " size=8></td>";
		$display.="<td><input type=text name=Email value=" . $row['Email'] . " size=11></td>";
		$display.="<td><input type=text name=UserName value=" . $row['UserName'] . " size=9></td>";
		$display.="<td><input type=text name=UserType value=" . $row['UserType'] . " size=3></td>";
		$display.="<td><input type=submit value=update>";

		$display.= "</tr></form>";
	}

	echo $display . "</table>";
}
else
{
	echo $CustomerID;
	if($CustomerID=='new')
	{
		$sql="Insert into CUSTOMER (Surname, FirstName, Address1, Address2, PostCode,TelNo, Email, Password, UserType) Values";
		$sql.="('" . $Surname . "',";
		$sql.="'" . $FirstName . "',";
		$sql.="'" . $Address1 . "',";
		$sql.="'" . $Address2 . "',";
		$sql.="'" . $PostCode . "',";
		$sql.="'" . $TelNo . "',";
		$sql.="'" . $Email . "',";
		$sql.="'password',";
		$sql.=$UserType . ")";
	}
	else
	{	
		$sql="Update CUSTOMER set Surname ='" . $Surname ."',";
		$sql.= "FirstName ='" . $FirstName ."',";
		$sql.= "Address1 ='" . $Address1 ."',";
		$sql.= "Address2 ='" . $Address2 ."',";
		$sql.= "PostCode ='" . $PostCode ."',";
		$sql.= "Email ='" . $Email ."',";
		$sql.= "TelNo ='" . $TelNo ."',";
		$sql.= "UserType ='" . $UserType ."' where CustomerID =" . $CustomerID;
	}
	mysqli_query($mysqli,$sql);

}





?>
<br><br><br><br>

</div>



