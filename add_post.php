<?php
include "admintopper.php";
?>
<a href="admin.php" class="btn btn-success pull-left">Admin home page</a>
<a href="blog_index.php" class="btn btn-success pull-left">Return to index page</a>
<?php
include_once('resources/init.php');

if(isset($_POST['title'], $_POST['contents'], $_POST['category'])){
	$errors = array();
	if(!empty(trim($_POST['title']))){
		$title = trim($_POST['title']);
	}else{
		$errors[] = 'Please enter title';
	}
	if(!empty(trim($_POST['contents']))){
		$contents = trim($_POST['contents']);
	}else{
		$errors[] = 'You need to supply the content';
	}
	if(!category_id_exists($_POST['category'])){
		$errors[] = 'That category does not exist.';
	}
	if(strlen(trim($_POST['title']))>255){
		$errors[] = 'The title cannot be longer than 255 characters.'; 
	}

	if(empty($errors)){
		add_post($title, $contents, $_POST['category']);
		$id = mysqli_insert_id($mysql_connect);
		$header_string = 'Location: blog_index.php?id='.$id;
		header($header_string);
		die();
	}
	
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="HD4.css" type="text/css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<style>
		label { display: block;}
	</style>

	<title>Add a Post</title>
</head>
<body>
	<h1> Add a Post </h1>
	<?php 
	if(isset($errors) && !empty($errors)){
		echo '<ul><li>', implode('</li><li>', $errors), '</li></ul>';
	}
	?>

	<form action="" method="post">
		<div>
			<label for="title"> Title </label>
			<input type="text" name="title" value="<?php if(isset($_POST['title'])) echo $_POST['title']; ?>">
		</div>
		<div>
			<label for="contents"> Contents </label>
			<textarea name="contents" rows="15" cols="50"><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
		</div>
		<div>
			<label for="category"> Category </label>
			<select name="category">
				<?php
				foreach(get_categories() as $category){
					?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?> </option>
					<?php
				}
				?>
			</select>
		</div>
		<div>
			<input type="submit" value="Add Post">
		</div>
	</form>
	<center>
</center>
</body>
</html>