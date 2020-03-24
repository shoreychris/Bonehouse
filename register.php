<?php include "topper.php";?>
<html>
<head>
<link rel="stylesheet" href="HD.css" type="text/css">
</head>
<body>

<script>
function valForm()
{
	var retVal = true;
	
	var sn = document.forms["regCustomer"]["txtSur"].value;
	var fn = document.forms["regCustomer"]["txtFirst"].value;
	var a1 = document.forms["regCustomer"]["txtAdd1"].value;	
	var a2 = document.forms["regCustomer"]["txtAdd2"].value;	
	var pc = document.forms["regCustomer"]["txtPost"].value;	
	var tn = document.forms["regCustomer"]["txtTel"].value;	
	var em = document.forms["regCustomer"]["txtEmail"].value;
	var un = document.forms["regCustomer"]["txtUser"].value;
	var p1 = document.forms["regCustomer"]["txtPass1"].value;	
	var p2 = document.forms["regCustomer"]["txtPass2"].value;	

	if(sn!="" & fn!="" & a1!="" & a2!="" & pc!="" & tn!="" & p1!="" & p2!="")
	{
		if(p1!=p2)
		{
			retVal = false;
			alert("Your passwords do not match, please reenter");
			
			//you will have to check to see if the password meets the requirements here....
		}
		else if(p1.length<6)
		{
			retVal = false;
			alert ("Your password must be 6 or more characters");
		}
		
	}
	else
	{
		retVal = false;
		alert("All fields myst be filled in");
	}
	
	return retVal;
}

</script>
<div class=content>
<center>
<h2>Register New User</h2>
<p>


<table border = 1 width = 60%>
<form name =regCustomer action=register_process.php  onsubmit="return valForm()"  method=POST>
	<tr>
		<td>Surname:</td>
		<td><input type=text name=txtSur id=txtSur></td>
	</tr>
	<tr>
		<td>FirstName:</td>
		<td><input type=text name=txtFirst id=txtFirst</td>
	</tr>
	<tr>
		<td>Address 1:</td>
		<td><input type=text name=txtAdd1 id=txtAdd1></td>
	</tr>
	<tr>
		<td>Address 2:</td>
		<td><input type=text name=txtAdd2 id=txtAdd2></td>
	</tr>
	<tr>
		<td>PostCode:</td>
		<td><input type=text name=txtPost id=txtPost></td>
	</tr>
	<tr>
		<td>Tel No:</td>
		<td><input type=text name=txtTel id=txtTel></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type=text name=txtEmail id=txtEmail></td>
	</tr>
	<tr>
		<td>User Name:</td>
		<td><input type=text name=txtUser id=txtUser></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type=password name=txtPass1 id=txtPass1></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type=password name=txtPass2 id=txtPass2></td>
	</tr>	
	<tr>
		<td colspan=2 align=center>
		<input type=submit value="Submit">
		</td>
	</tr>
</form>		
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>

</div>
</body>
</html>
<?php include "base.php";?>