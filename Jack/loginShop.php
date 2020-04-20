<?php 
	include "header.php";
?>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="StyleSheets/main.css" type="text/css">
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
			function loginForm()
			{
				var isComplete = true;
				
				var un = document.forms["userName"]["txtUserName"].value;
				var pw = document.forms["password"]["txtPassword"].value;	

				if(un = "" || pw != "")
				{
					isComplete = false;
					alert("Please complete all fields");
					return isComplete;
				}
				return isComplete;
			}
		</script>
		<br>
		<div class=content>
			<br>
			<center>
				<h2 style="color:#21aaa7">Shop Login</h2>
				<p>
				<table border="1" bordercolor="#21aaa7" width = 60%>
					<form name =customerLogin action=loginShopProcess.php  onsubmit="return loginForm()"  method=POST>
						<tr>
							<td>User Name:</td>
							<td><input type=text name=txtUserName id=txtUserName></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type=password name=txtPassword id=txtPassword></td>
						</tr>
						<tr>
							<td colspan=2 align=center>
							<input type=submit value="Submit">
							</td>
						</tr>
					</form>		
				</table>
			</center>			
			<?php 
				include "base.php";
			?>			
		</div>
	</body>
</html>