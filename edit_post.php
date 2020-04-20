<?php
include_once('resources/init.php');

$post = get_posts($_GET['id']);

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
		edit_post($_GET['id'], $title, $contents, $_POST['category']);
		$header_string = 'Location: blog_index.php?id='.$post[0]['post_id'];
		header($header_string);
		die();
	}
	
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<style>
		label { display: block;}
	</style>

	<title>Edit a Post</title>
</head>
<body>
	<h1> Edit a Post </h1>
	
	<?php 
	if(isset($errors) && !empty($errors)){
		echo '<ul><li>', implode('</li><li>', $errors), '</li></ul>';
	}
	?>

	<form action="" method="post">
		<div>
			<label for="title"> Title </label>
			<input type="text" name="title" value="<?php echo $post[0]['title']; ?>">
		</div>
		<div>
			<label for="contents"> Contents </label>
			<textarea name="contents" rows="15" cols="50"><?php echo $post[0]['contents']; ?></textarea>
		</div>
		<div>
			<label for="category"> Category </label>
			<select name="category">
				<?php
				foreach(get_categories() as $category){
					$selected = ($category['name'] == $post[0]['name']) ? ' selected' : '';
					?>
					<option value="<?php echo $category['id']; ?>" <?php echo $selected; ?>> <?php echo $category['name']; ?> </option>
					<?php
				}
				?>
			</select>
		</div>
		<div>
			<input type="submit" value="Add Post">
		</div>
	</form>
</body>
</html>