<?php 
	$con = mysqli_connect('127.0.0.1','root','','38LessonYouTube');
	$query = mysqli_query($con, "SELECT * FROM users WHERE name = '{$_GET['name']}' || phone = '{$_GET['phone']}' || email = '{$_GET['email']}'  ");   	
	$stroka = $query ->fetch_assoc();
	$id = $stroka['id'];
	
	header("Location: home.php?id='{$id}'")
 ?>