<?php 
	$con = mysqli_connect('127.0.0.1','root','','38LessonYouTube');
	$id = $_GET['id'];
	$query = mysqli_query($con, "DELETE videos, users FROM users INNER JOIN videos  ON videos.user_id = users.id WHERE users.id = $id ");
 
	header("Location: index.php");
 ?>