<?php 
	$con = mysqli_connect('127.0.0.1','root','','38LessonYouTube');
	$query = mysqli_query($con, "SELECT * FROM users WHERE name = '{$_POST['name']}'");
	$stroka = $query ->fetch_assoc();
	$password = $_POST['password'];
	if ($stroka['password'] == $password) {
		header("Location: home.php?id='{$stroka['id']}'");
	} else {
		header("Location: index.php?error=Нет такого пользователя");
	}
 ?>