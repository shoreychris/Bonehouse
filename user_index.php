<?php
include_once('resources/init.php');

// $posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();

$posts = get_posts(((isset($_GET['id'])) ? $_GET['id'] : null));

?>
<?php
include "topper.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="HD4.css" type="text/css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


	<title> My Blog </title>
</head>
<body>
<center>
<nav>
		<ul>
			<center><li><a href="user_index.php"> Index </a></li></center>
		</ul>
	</nav>
	<h1>Barker & Bonehouse News and Special offers</h1>
	<?php
		foreach($posts as $post){
			if(!category_exists($post['name'])){
				$post['name'] = 'Uncategorised';
			}
			?>
			<h2><a href="user_index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>
			
			<div>
				<?php echo nl2br($post['contents']); ?>
			</div>
			<p> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])); ?>
				
			</p>
			<?php
		}
		 ?>
</center>
</body>
<?php
include "base.php";
?>
</html>