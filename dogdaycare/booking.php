<?php
include "dbconnect.php";

	session_start();
	$user = $_SESSION['login_username'];
	$sql = "SELECT CustomerID FROM customer WHERE UserName='$user'";
	$fetch=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_assoc($fetch);
	
	$id = $row['CustomerID'];
	$yn = $_POST["name"];
	$ye = $_POST["email"];
	$tn = $_POST["tel"];
	$dn = $_POST["dname"];
	$db = $_POST["breeds"];
	$da = $_POST["age"];//ageses age
	$dt = $_POST["orderTime"];//time orderTime
	$de = $_POST["orderTimeEnd"];
	$ts = $_POST["timeslot"];
	$di = $_POST["description"];//introduction description
	
	if($ts != "All Day"){
		$ct=15;
	} else {
		$ct=22;
	}

	//$sql2="INSERT INTO bookings(YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction) 
	//VALUES ('$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di')";
	
	$userCount = 0;
	$sql = "Select * from bookings where  Date = '" . $dt ."'";
	
	$waitinglistamount = 0;
	//gets the time the user wants to delect
	$timeStart = new DateTime($dt);
	$timeEnd = new DateTime($de);
	$interval = new DateInterval('P1D');//adds in intervals of a day
	$daterange = new DatePeriod($timeStart, $interval, $timeEnd); //gets the date between the range
	foreach($daterange as $dayslot){ //for every value returned
		$dt = $dayslot->format("Y-m-d"); //format
		
		if($ts=="All Day"){//if the user selects the all day slot
			$dateslotcheck = "SELECT * FROM bookings WHERE Date='$dt'";
			$dateslotCheckResults = mysqli_query($mysqli,$dateslotcheck);
			$amount = mysqli_num_rows($dateslotCheckResults);
			
			if($amount == 0){ //if it doesn't match a date, put it onto the list
				$sql2="INSERT INTO bookings(CustomerID, YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction, cost, seen) 
				VALUES ('$id','$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di','$ct','yes')";
				$mysqli->query($sql2);
			} else { //if it does, add it to the reservation list
				$sql3="INSERT INTO waitinglist(CustomerID, YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction, cost) 
				VALUES ('$id','$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di','$ct')";
				$mysqli->query($sql3);
				$waitinglistamount = $waitinglistamount + 1;
			}
		}
		
		else {
		$dateslotcheck = "SELECT * FROM bookings WHERE Date='$dt'"; //AND Timeslot='$ts'
		$dateslotCheckResults = mysqli_query($mysqli,$dateslotcheck);
		$amount = mysqli_num_rows($dateslotCheckResults);
		
		if($amount == 0){ //if it doesn't match a date, put it onto the list
			//check against the all day slot
			$row=mysqli_fetch_assoc($dateslotCheckResults);
			$timeslotCheck = $row['Timeslot'];
			if ($timeslotCheck==$ts || $timeslotCheck=="All Day"){ //if the timeslot returns all day, add the value into the waiting list
				$sql3="INSERT INTO waitinglist(CustomerID, YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction, cost) 
				VALUES ('$id','$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di','$ct')";
				$mysqli->query($sql3);
				$waitinglistamount = $waitinglistamount + 1;
			} else { //if it doesn't match all day, put it on the booking list
			$sql2="INSERT INTO bookings(CustomerID, YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction, cost, seen) 
			VALUES ('$id','$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di','$ct','yes')";
			$mysqli->query($sql2);
			}
		} else { //if it does, add it to the reservation list
			$sql3="INSERT INTO waitinglist(CustomerID, YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction, cost) 
			VALUES ('$id','$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di','$ct')";
			$mysqli->query($sql3);
			$waitinglistamount = $waitinglistamount + 1;
		}
		}
	
	}
	
	if ($waitinglistamount !=0){
		echo"<a href=DogDaycare.php>$waitinglistamount timeslots were added to the waiting list.</a>";
	}
	else{
		 header("Location: WaitingList.php");
	}
	
			

	/*
	$dateslotCheck = "SELECT * FROM bookings WHERE Date BETWEEN $dt and $de"; //checks for all days between range
	$dateslotCheckResults = mysqli_query($mysqli,$dateslotCheck);
	while($row=mysqli_fetch_assoc($dateslotCheckResults)){
		$timeslotused = $row['Date'];
		
	}*/
	
	/*
	//time
	$timeslottaken = false;
	$timecheck = "SELECT * FROM bookings WHERE Date='$dt'";
	$timeresults = mysqli_query($mysqli,$timecheck);
	while($row=mysqli_fetch_assoc($timeresults)){
		$timeslotused = $row['Timeslot'];
		if ($ts == $timeslotused){
			echo"<a href=DogDaycare.php>You have been added to the waiting list for this timeslot.</a>";
			
			$sql3="INSERT INTO waitinglist(YourName, YourEmail, TELNO, DogsName, DogsBreeds, DogsAge, Date, Timeslot, DogsIntroduction) 
			VALUES ('$yn','$ye','$tn','$dn','$db','$da','$dt','$ts','$di')";
			$mysqli->query($sql3);
			$timeslottaken = true;
		}
	}

	if ($timeslottaken == false)
	{
		$mysqli->query($sql2);
  		$_SESSION['booking_date'] = $dt;
		//header("Location: home.php");
	}
	
	
	/*$results = mysqli_query($mysqli,$sql);
	$userCount = mysqli_num_rows($results);	
	if($userCount>0)
	{
		echo"<a href=DogDaycare.php>You have tried to choose another day for dog daycare!</a>";
	}
	*/
	
?>

