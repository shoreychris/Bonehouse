<?php include "topper.php";?>
<html>
<head>
<link rel="stylesheet" href="SWS.css" type="text/css">
</head>
<body>


<div class=content>
&nbsp
<center>
<table border=1 width250px>
<form name=liForm action=login_process.php  method=POST>
<tr>
<td>User Name:</td>
<td><input type=text name=uName id=uName></td>
</tr>
<tr>
<td>Password:</td>
<td><input type=password name=pWord id=pWord></td>
</tr>
<tr>
<td colspan=2 align=center>
<input type=submit value='Submit'>
</td>
</tr>
</form>
</table>
</center>
&nbsp
&nbsp
&nbsp
&nbsp
<?php 
	if(isset($_GET['reset']))
	{
		echo "Enter email here<form method=post action=sendTempPassword.php><input type=text name =email><input type=submit value=reset></form>";
	}
	else
	{
		echo "<a href=login.php?reset=true>Reset Password</a>";
	}
?>
&nbsp
&nbsp
&nbsp
</div>
</body>
</html>
<?php include "base.php";?>