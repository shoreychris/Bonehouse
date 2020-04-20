<?php
include_once('resources/init.php');
?>
<?php
include "admintopper.php";
?>
<a href="admin.php" class="btn btn-success pull-left">Admin home page</a>
<a href="blog_index.php" class="btn btn-success pull-left">Return to index page</a>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="HD4.css" type="text/css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title> Category List </title>
</head>
<!-- <body>
	<?php
		foreach(get_categories() as $category){
			
			echo '<p><a href="category.php?id='.$category['id'].'">'.$category['name'].'</a> - <a href="delete_category.php?id="'.$category['id'].'">Delete</a></p>';
		}
	?>
</body> -->
<body>
	<?php
		foreach(get_categories() as $category){
			?>
			<p>
				<a href="category.php?id=<?php echo $category['id']; ?>">
					<?php echo $category['name']; ?>
				</a>
				 - <a href="delete_category.php?id=<?php echo $category['id']; ?>">Delete</a>
			</p>
			<?php
		}
	?>
</body>
</html>