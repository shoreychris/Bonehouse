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
   <h2 style="color:#21aaa7">Album</h2>
				<table border="1" bordercolor="#21aaa7" width = 60%>
        <?php
        if(isset($_POST['submit1'])){
            if (isset($_POST['name1']) && isset($_POST['number1']) && isset($_POST['date1']) && isset($_POST['time1'])) {
                echo "The appointment is successful, the staff will reply you within 1 working day";
                $name1= $_POST['name1'];
                $number1 = $_POST['number1'];
                $date1= $_POST['date1'];
                $time1 = $_POST['time1'];
                $sql = "INSERT INTO appointment1 (name1, number1,date1,time1) VALUES ('" . $name1 . "','" . $number1 . "','" . $date1 ."','" . $time1 ."')";
            
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
        <form action='appointment2.php' method='post' enctype='multipart/form-data'>
            <tr><td>Name:</td><td><input type='text' name='name1' size='40'></td></tr>
            <tr><td>phone number</td><td><input type =text name='number1' size="20" ></td></tr>
            <tr><td>Date:</td><td><input type='date' name='date1'></td></tr>
            <tr><td>time:</td><td><input type="time" name="time1"</td></tr>
            <tr><td><input type='submit' name='submit1' value="submit"</td></tr>
        </form>
    </table>
</center>
</div>
</body>
</html>

<?php
include "base.php";
?>