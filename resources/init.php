<?php
include_once('config.php');

$mysql_connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
mysqli_select_db($mysql_connect, DB_NAME);

include_once('func/blog.php');
?>