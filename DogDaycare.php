<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "topper.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dog Daycare</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/yuyue.css" />
<LINK rel=stylesheet type=text/css href="css/datepicker.css">
<SCRIPT type=text/javascript  src="js/jquery-1.6.2.min.js"></SCRIPT>
<SCRIPT type=text/javascript  src="js/jquery.datepicker-mi.js"></SCRIPT>
<SCRIPT type=text/javascript  src="js/form.js"></SCRIPT>
</head>

<body>
<script>
function valForm()
{
	var retVal = true;
	
	var yn = document.forms["regCustomer"]["name"].value;
	var ye = document.forms["regCustomer"]["email"].value;
	var tn = document.forms["regCustomer"]["tel"].value;	
	var dn = document.forms["regCustomer"]["dname"].value;	
	var db = document.forms["regCustomer"]["breeds"].value;	
	var da = document.forms["regCustomer"]["ageses"].value;	
	var dt = document.forms["regCustomer"]["time"].value;
	var di = document.forms["regCustomer"]["introduction"].value;
}

function dateCheck(){
	var start = document.getElementById('time');//start date
	var end = document.getElementById('timeEnd');//end date
	var button = document.getElementById('submit');//end date
	
	var startvalue = start.value;
	var endvalue = end.value; 
	
	if (endvalue < startvalue){
		alert("End date is before the start date.");
		button.disabled = true;
	} else {
		button.disabled = false;
	}
	
	
}
</script>	

<div class="yuyue_box">
  <div class="telcon">
    <div class="tell">
      <div class="ts"> <span>Tips:</span>
        <p>The information you fill will be kept confidential, please feel free to fill it in. Please fill in the detailed pet information so that we can better understand your pet and provide appropriate services.<br />
      </div>
      <div class="telform">
        <form action="booking.php" method="post" onSubmit="return check();">
          <input type="hidden" name="sectionid" value="41">
          <input type="hidden" name="orderExpert" value="81">
          <div class="telc">
            <label>Your Name:</label> 
            <input type="text"  id="name" value="" name="name" />
          </div>
          <div class="telc">
            <label>Your Email:</label>
            <input type="text"  id="email" value="" name="email" />
          </div>
		  <div class="telc" style=" margin-bottom:2px">
            <label>TEL NO：</label>
            <input  type="text" id="tel"  value="" name="tel" />
          </div>
		    <div class="telc">
            <label>Dog's Name:</label>
            <input type="text"  id="dname" value="" name="dname" />
          </div>
		    <div class="telc">
            <label>Dog Breeds:</label>
            <input type="text"  id="breeds" value="" name="breeds" />
          </div>
          <div class="telc">
            <label>Dog's Age:</label>
            <input type="text" id="ageses" value="" name="age" />
          </div>
          <p style=" margin-top:1px">*Please accurately fill in the phone number.</p>
		  <div class="telrq">
            <label>Date(Start)：</label>
            <input type="date" id="time" class="date-pick" onclick="this.value='';this.style.color='black';this.style.background='images/420bf521c6dd4a13ac016894278546d0.gif';" value="Choose Date" name="orderTime" />
          </div>
		  <div class="telrq">
            <label>Date(End):</label>
            <input type="date" id="timeEnd" onchange="dateCheck()" class="date-pick" onclick="this.value='';this.style.color='black';this.style.background='images/420bf521c6dd4a13ac016894278546d0.gif';" value="Choose Date" name="orderTimeEnd" />
          </div>  
		  <div class="telrq">
            <label>Timeslot：</label>
            <select name="timeslot">
				<option value="9am">9am - 11am</option>
				<option value="11am">11am - 1pm</option>
				<option value="1am">1pm - 3pm</option>
				<option value="3am">3pm - 5pm</option>
			</select>
          </div>
          <div class="telbq">
            <label>Dog's introduction：</label>
            <textarea id ="introduction" name="description"></textarea>
          </div>
          <p>*Please fill in the details of the dog as much as possible</p>
          <input type="submit" id="submit" name="sub" value="SUBMIT" class="tijiao" />
          <script language=javascript>
			</script>
        </form>
      </div>
    </div>
    <div class=""> <img src="images/1.png" width="457" height="700" border="0" usemap="#yuyuecase_Map"  /> 
 </div>
    <div style="clear:both"></div>
  </div>
  </div>
</div>
</body>
</html>
<?php include "base.php";?>