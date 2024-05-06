<?php
	session_start();
	$login = $_POST['log'];
	$pswd = $_POST['pswd'];
	include('connect.php');
	$query = "SELECT * FROM users WHERE login = '$login' AND BINARY password = '$pswd'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result))
		$_SESSION['login'] = $login;
	else
		$_SESSION['login'] = 'er login';
		header('Location: auth.php');
		mysqli_close($db);
?>