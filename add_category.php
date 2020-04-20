<?php
include "admintopper.php";
?>
<a href="admin.php" class="btn btn-success pull-left">Admin home page</a>
<a href="blog_index.php" class="btn btn-success pull-left">Return to index page</a>
<?php
include_once('resources/init.php');
if(isset($_POST['name'])){
	if(!empty(trim($_POST['name']))){
		$name = trim($_POST['name']);
		if(category_exists($name)){
			$error = 'That category already exists.';
		}else if(strlen($name)>24){
			$error = 'Category name can only be up to 24 characters.';
		}else{
			add_category($name);

			header('Location: add_post.php');
			die();
		}
	}else{
		$error = 'You must submit a category name.';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="HD4.css" type="text/css">
	<title>Add a Category</title>
</head>
<body>
	<h1> Add a Category </h1>
	<?php
		if(isset($error)){
			echo "<p> $error </p>\n";
		}
	?>
	<form action="" method="post">
		<div>
			<label for="name"> Name </label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<input type="submit" value="Add Category">
		</div>
	</form>
</body>
</html>