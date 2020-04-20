<link rel="stylesheet" href="HD.css" type="text/css">

<button onclick="openWin()">Directions</button>

<script>
var myWindow;

function openWin() {
  myWindow = window.open("location.php", "_blank", "width=600, height=500");
}