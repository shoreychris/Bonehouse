
<html>
<head>
<link rel="stylesheet" href="HD.css" type="text/css">
<style>
.btnDirections
{
	width: 300px;
	background-color: black;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	hover: blue;
	font-size: 15px;
}
.btnDirections:hover 
{
	background-color: blue;
}
</style>
</head>
<body>
<br>
<div class=botto>
<table width=100% height= 80% border=5>
<tr>
<br><br>
<td align=center>
CONTACT DETAILS<br>
Telephone - 07837 775016<br>
E-mail - services@barkerandbonehouse.co.uk<br>
Monday to Friday <br>
8am to 7pm </td>

<td align =center>


22 Front Street East<br>
Bedlington<br>
Northumberland<br>
NE22 5AA<br>
<button class='btnDirections' onclick="openWin()">Directions</button>

<script>
var myWindow;

function openWin() {
  myWindow = window.open("location.php", "_blank", "width=600, height=500");
}

</script>


</td>
</td>
<td align =center>
<a class="btn btn-large btn-success" href="#"><i class="icon-truck"></i> Register today</a><br>
<a href="#" class="fa fa-facebook"></a>
<td align =center>
<a href=admin.php><img src='WSPics/admin.png' width=50 height=50 align=auto></a> <!--Admin button added to base for administration of the site-->
<br>
<br>
</td>
</body>
</html>