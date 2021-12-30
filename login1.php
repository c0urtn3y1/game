<?php
	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
	$mysql=new mysqli('localhost','root','','game');
	$mysql->query("INSERT INTO `users` (`login`,`password`) VALUES('$login','$pass')");
	$mysql->close();
	header('Location: /');
?>