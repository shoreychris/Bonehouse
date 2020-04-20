<?php

function add_post($title, $contents, $category){
	global $mysql_connect;

	$title = mysqli_real_escape_string($mysql_connect, $title);
	$contents = mysqli_real_escape_string($mysql_connect, $contents);
	$category = (int)$category;

	$result = mysqli_query($mysql_connect, "INSERT INTO posts SET cat_id = '$category', title = '$title', contents = '$contents', date_posted = NOW()");
}

function edit_post($id, $title, $contents, $category){
	global $mysql_connect;

	$id = (int)$id;
	$title = mysqli_real_escape_string($mysql_connect, $title);
	$contents = mysqli_real_escape_string($mysql_connect, $contents);
	$category = (int)$category;

	$result = mysqli_query($mysql_connect, "UPDATE `posts` SET `cat_id` = '$category', `title` = '$title', `contents` = '$contents' WHERE `id` = '$id'");
}

function add_category($name){
	global $mysql_connect;
	$name = mysqli_real_escape_string($mysql_connect, $name);
	$result = mysqli_query($mysql_connect, "INSERT INTO categories SET name = '$name'");
}

function delete($table, $id){
	global $mysql_connect;
	$table = mysqli_real_escape_string($mysql_connect, $table);
	$id = (int)$id;
	$sql_query = 'DELETE FROM '.$table.' WHERE id = '.$id;
	$result = mysqli_query($mysql_connect, $sql_query);
}

function get_posts($id = null, $cat_id = null){
	global $mysql_connect;
	$posts = array();

	$query = "SELECT `posts`.`id` AS `post_id`, `categories`.`id` AS `category_id`,
					 `title`, `contents`, `date_posted`, `categories`.`name` 
					 FROM `posts` 
					 LEFT JOIN `categories` 
					 ON `categories`.`id` = `posts`.`cat_id`";

	if(isset($id)){
		$id = (int)$id;
		$query .= " WHERE `posts`.`id` = '$id'";
	}

	if(isset($cat_id)){
		$cat_id = (int)$cat_id;
		$query .= " WHERE `cat_id` = '$cat_id'";
	}

	$query .= "ORDER BY `post_id` DESC";
	
	$result = mysqli_query($mysql_connect, $query);
	
	while($row = mysqli_fetch_array($result)){
		$posts[] = $row;
	}

	return $posts;
}

function get_categories($id = null){
	global $mysql_connect;
	$categories = array();

	$result = mysqli_query($mysql_connect, "SELECT id, name FROM categories");
	while($row = mysqli_fetch_array($result)){
		$categories[] = $row;
	}

	return $categories;
}

function category_exists($name){
	global $mysql_connect;
	$name = mysqli_real_escape_string($mysql_connect, $name);

	$result = mysqli_query($mysql_connect, "SELECT name FROM categories WHERE name = '$name'");
	if(mysqli_num_rows($result)==0){
		return false;
	}else if(mysqli_num_rows($result)>=1){
		return true;
	}

}

function category_id_exists($id){
	global $mysql_connect;
	$id = mysqli_real_escape_string($mysql_connect, $id);

	$result = mysqli_query($mysql_connect, "SELECT id FROM categories WHERE id = '$id'");
	if(mysqli_num_rows($result)==0){
		return false;
	}else if(mysqli_num_rows($result)>=1){
		return true;
	}

}

?>