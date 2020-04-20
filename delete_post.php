<?php
include_once('resources/init.php');

if(!isset($_GET['id'])){
	header('Location: blog_index.php');
	die();
}else{
	delete('posts', $_GET['id']);
	header('Location: blog_index.php');
	die();
}
?>