<?php
include 'dbconnect.php';

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
 //if everything is ok, try to upload file
} 
else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$pImage =  basename( $_FILES["fileToUpload"]["name"]);
		echo $pImage;
		$eName = $_POST['eName'];
        $eAddrs = $_POST['eAddrs'];
		$ePhone = $_POST['ePhone'];
		$category = $_POST ['category'];
		$sql = "INSERT INTO Employee (EmployeeName, EmployeeAddress, EmployeePhone, Image, Category) VALUES 
		('" . $eName . "','" . $eAddrs . "','" . $ePhone . "','" . $pImage . "','" . $category . "')";



		if ($mysqli->query($sql) === TRUE) 
	    {    		
			$eid = $mysqli->insert_id;
			header("Location:admin.php?theID=". $eid);
	    }
	    else
	    {
		    //echo "Error: " . $sql . "<br>" . $conn->error;
	    }
  } 
	else 
	{
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 


