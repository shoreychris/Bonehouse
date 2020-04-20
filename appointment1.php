
<html>
<head>
    <?php
    include "topper.php";
    ?>
    <?php
    include "dbconnect.php";
    ?>
    <link rel="stylesheet" href="HD.css" type="text/css">
</head>
<body>
<div class=content>

    &nbsp
	<center>
   <h2 style="color:#21aaa7">Single</h2>
				<table border="1" bordercolor="#21aaa7" width = 60%>
        <?php
        if(isset($_POST['submit'])){
            if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['date']) && isset($_POST['time'])) {
                echo "The appointment is successful, the staff will reply you within 1 working day";
                $name= $_POST['name'];
                $number = $_POST['number'];
                $date= $_POST['date'];
                $time = $_POST['time'];
                $sql = "INSERT INTO appointment (name, number,date,time) VALUES ('" . $name . "','" . $number . "','" . $date ."','" . $time ."')";
            
			if ($mysqli->query($sql) === TRUE) 
	    {    		
			$pid = $mysqli->insert_id;
			
			}}
	    else
	    {
		    //echo "Error: " . $sql . "<br>" . $conn->error;
	    }


        }
        else{

        }


        ?>
        <form action='appointment1.php' method='post' enctype='multipart/form-data'>
            <tr><td>Name:</td><td><input type='text' name='name' size='40'></td></tr>
            <tr><td>phone number</td><td><input type =text name='number' size="20" ></td></tr>
            <tr><td>Date:</td><td><input type='date' name='date'></td></tr>
            <tr><td>time:</td><td><input type="time" name="time"</td></tr>
            <tr><td><input type='submit' name='submit' value="submit"</td></tr>
        </form>
    </table>
</center>
</div>
</body>
</html>

<?php
include "base.php";
?>
