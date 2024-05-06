<?php
	session_start();
	include('connect.php');
	include('delete.php');
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
			<form method="POST" action="exit.php" class="header-auth_menu">
				<?php
					$login = $_SESSION['login'];
					echo $login;
				?>
				<button type="submit">Выйти</button>
			</form>
		</header>
		<section>
			<h1>Новости</h1>
			<div class="section_news-block">
				<?php
    				$query = "SELECT * FROM news";
    				$result = mysqli_query($db, $query);
       				if(mysqli_num_rows($result)){
           				while($row = $result->fetch_assoc()){
                			echo '<div class="section_news-block_content">
                				'.$row['img'].'
                				<h1>'.$row['title'].'</h1>
                				<p>'.$row['description'].'</p>
                				<a href="?del='.$row['id'].'"></a>
                			</div>';
            			}
       				}
				?>
			</div>
			<form method="POST" action="news.php" enctype="multipart/form-data" class="auth_form">
				<label>Выберите изображение</label>
				<input type="file" name="imgNews">
				<label>Заголовок записи</label>
				<input type="text" name="titleNews" placeholder="Заголовок...">
				<label>Текст записи</label>
				<textarea type="text" name="textNews" placeholder="Текст..."></textarea>
				<button type="submit">Добавить новость</button>
			</form>
			<h1>Прайс лист</h1>
			<div class="section_price-block">
				<?php
    				$query = "SELECT * FROM price";
    				$result = mysqli_query($db, $query);
       				if(mysqli_num_rows($result)){
           				while($row = $result->fetch_assoc()){
                			echo '<div class="section_price-block_content">
                				<div style="display: flex;">
                				'.$row['imgPrice'].'
                					<div class="section_price-block_content-split">
                						<h1>'.$row['titlePrice'].'</h1>
                						<p>'.$row['descriptionPrice'].'</p>
                					</div>
                				</div>
                				<div style="display: flex;">
                					<p class="section_news-block_content-price">'.$row['price'].' ₽</p>
                					<a href="?delPrice='.$row['idPrice'].'"></a>
                				</div>
                			</div>';
            			}
       				}
				?>
			</div>
			<form method="POST" action="price.php" enctype="multipart/form-data" class="auth_form">
				<label>Выберите изображение</label>
				<input type="file" name="imgPrice">
				<label>Заголовок товара</label>
				<input type="text" name="titlePrice" placeholder="Заголовок...">
				<label>Описание товара</label>
				<textarea type="text" name="textPrice" placeholder="Текст..."></textarea>
				<label>Цена товара</label>
				<input type="text" name="pricePrice" placeholder="Цена...">
				<button type="submit">Добавить товара</button>
			</form>
		</section>
	</body>
</html>