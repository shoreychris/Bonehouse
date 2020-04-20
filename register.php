<?php include "topper.php";?>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="StyleSheets/HD.css" type="text/css">
		<style>
			input[type=submit] 
			{
				background-color: #21aaa7;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				hover: blue;
				font-size: 15px;
			}
			input[type=submit]:hover
			{
				background-color: blue;
			}
		</style>
	</head>
	
	<body>
		<script>
			function registrationForm()
			{
				var isComplete = true;
				
				var sn = document.forms["regCustomer"]["txtSurname"].value;
				var fn = document.forms["regCustomer"]["txtFirstName"].value;
				var a1 = document.forms["regCustomer"]["txtAddress1"].value;	
				var a2 = document.forms["regCustomer"]["txtAddress2"].value;	
				var pc = document.forms["regCustomer"]["txtPostcode"].value;	
				var tn = document.forms["regCustomer"]["txtTelephone"].value;	
				var em = document.forms["regCustomer"]["txtEmail"].value;
				var un = document.forms["regCustomer"]["txtUserName"].value;
				var p1 = document.forms["regCustomer"]["txtPassword1"].value;	
				var p2 = document.forms["regCustomer"]["txtPassword2"].value;	

				if(sn!="" & fn!="" & a1!="" & a2!="" & pc!="" & tn!="" & p1!="" & p2!="")
				{
					if(p1!=p2)
					{
						isComplete = false;
						alert("Passwords don't match");
					}
					else if(p1.length<6)
					{
						isComplete = false;
						alert ("Your password must be 6 or more characters");
					}
				}
				else
				{
					isComplete = false;
					alert("Please complete all fields");
				}
				return isComplete;
			}
		</script>
		<br>
		<div class=content>
			<center>
				<br>
				<h2 style="color:#21aaa7">Register New User</h2>
				<p>
				<table border="1" bordercolor="#21aaa7" width = 60%>
					<form name =regCustomer action=register_process.php  onsubmit="return registrationForm()"  method=POST>
						<tr>
							<td>Surname:</td>
							<td><input type=text name=txtSurname id=txtSurname></td>
						
						<tr>
							<td>FirstName:</td>
							<td><input type=text name=txtFirstName id=txtFirstname</td>
						</tr>
						<tr>
							<td>Address 1:</td>
							<td><input type=text name=txtAddress1 id=txtAddress1></td>
						</tr>
						<tr>
							<td>Address 2:</td>
							<td><input type=text name=txtAddress2 id=txtAddress2></td>
						</tr>
						<tr>
							<td>PostCode:</td>
							<td><input type=text name=txtPostcode id=txtPostcode></td>
						</tr>
						<tr>
							<td>Tel No:</td>
							<td><input type=text name=txtTelephone id=txtTelephone></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type=text name=txtEmail id=txtEmail></td>
						</tr>
						<tr>
							<td>User Name:</td>
							<td><input type=text name=txtUserName id=txtUserName></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type=password name=txtPassword1 id=txtPassword1></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type=password name=txtPassword2 id=txtPassword2></td>
						</tr>	
						<tr>
							<td colspan=2 align=center>
							<input type=submit value="Submit">
							</td>
						</tr>
					</form>		
				</table>
			</center>			
			<?php include "base.php";?>			
		</div>
	</body>
</html>