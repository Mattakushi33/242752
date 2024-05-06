<?php
	session_start();
	include('connect.php');	
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="">
		<meta charset="UTF-8">
		<title>Главная</title>
	</head>
	<body>
		<header>
			<div class="header-logo_menu">
				<a href=""><img src=""></a>
			</div>
			<div class="header-nav_menu-links">
				<a href="general.php">Главная</a>
				<a href="price_list.php">Прайс</a>
				<a href="">Контакты</a>
				<a href="">О нас</a>
			</div>
			<form method="POST" action="exit.php" class="header-auth_menu">
				<?php
					$login = $_SESSION['login'];
					echo $login;
				?>
				<button type="submit">Выйти</button>
			</form>
		</header>