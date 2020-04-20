<tbody>

<?php
include "dbconnect.php";

if(isset($_POST['delete'])){
    echo "called";
    $delete = $_POST['delete'];
    echo $delete;
    $sql = "DELETE FROM reservations WHERE res_id='$delete'";
    $mysqli->query($sql);
    header('location: waitingListAnna.php');
}

?> </tbody>

<?php
include "admintopper.php";
?>
<div class=admin>
<link rel="stylesheet" href="HD.css" type="text/css">

&nbsp
<h2>Waiting List</h2>
<center>
<a href="admin.php" class="btn btn-success pull-left">Admin home page</a>
</center>
<?php
include "dbconnect.php";
echo 
$ResID =	"";
$ResName  =	"";
$ResEmail ="";
$ResTel =	"";
$ResNotes =	"";
$ResDate =	"";
$ResSlot =	"";





	//these posts are set if this page is called from itself
    if(isset($_POST['ResID']))
	{
			$ResID = $_POST['res_id'];	
			$ResName  =	$_POST['res_name'];
			$ResEmail =$_POST['res_email'];
			$ResTel =	$_POST['res_tel'];
			$ResNotes =	$_POST['res_notes'];
			$ResDate =	$_POST['res_date'];
			$ResSlot =	$_POST['res_slot'];

	}


if($ResID=="" && $ResName=="")
{
	$sql="select *from reservations";
    $results = mysqli_query($mysqli,$sql);
    $display = '<center><table border="1">';
    $display.='<tr><td>ID</td><td>Name</td>';
	$display.='<td>Email</td><td>Tel No</td><td>Notes</td><td>ResDate</td><td>ResSlot</td><td>Click to delete</td></tr>';
	



	while($row = mysqli_fetch_array($results))
	{
		$display.= "<tr><form name=delete action=waitingListAnna.php method=post>";


		$display.="<td><input type=text name=res_id value=" . $row['res_id'] . " size=2 readonly></td>";
		$display.="<td><input type=text name=name value=" . $row['res_name'] . " size=5></td>";
		$display.="<td><input type=text name=email value=" . $row['res_email'] . " size=11 ></td>";
		$display.="<td><input type=text name=tel value='" . $row['res_tel'] . "' size=11></td>";
		$display.="<td><input type=text name=notes size=10 value=" . $row['res_notes'] . " ></td>";
		$display.="<td><input type=text name=date value=" . $row['res_date'] . " size=8></td>";
		$display.="<td><input type=text name=slot value=" . $row['res_slot'] . " size=3></td>";
        $display.="<td><button type'submit' name='delete' value=" . $row['res_id'] . ">Delete</button>";
		$display.= "</tr></form>";
	}

	echo $display . "</table>";
}
else
{
	echo $CustomerID;
	if($CustomerID=='new')
	{
		$sql="Insert into reservations (res_name, res_email, res_tel, res_notes,res_date, res_slot) Values";
		$sql.="'" . $ResName . "',";
		$sql.="'" . $ResEmail . "',";
		$sql.="'" . $ResTel . "',";
		$sql.="'" . $ResNotes . "',";
		$sql.="'" . $ResDate . "',";
		$sql.="'" . $ResSlot . "',";
	}
	else
	{	
		$sql="Update RESERVATIONS set res_name ='" . $ResName ."',";
		$sql.= "res_email ='" . $ResEmail ."',";
		$sql.= "res_tel ='" . $ResTel ."',";
		$sql.= "res_notes ='" . $ResNotes ."',";
		$sql.= "res_date ='" . $ResDate ."',";
		$sql.= "res_slot ='" . $ResSlot ."',";
		$sql.= "PostCode ='" . $ResStart ."' where res_id =" . $ResID;

		
		
	}
	mysqli_query($mysqli,$sql);

}





?>
<br><br><br><br>

</div>

