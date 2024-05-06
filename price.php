<?php
	include('connect.php');
	$title = $_POST['titlePrice'];
	$description = $_POST['textPrice'];
	$price = $_POST['pricePrice'];
	$name = $_FILES['imgPrice']['name'];
	$tmp_name = $_FILES['imgPrice']['tmp_name'];
	$source = 'img/'.$name;
	$source_img = '<img class="img_price" src='.$source.'>';
	move_uploaded_file($tmp_name, $source);
	
	$query = "INSERT INTO price (imgPrice, titlePrice, descriptionPrice, price) VALUES ('$source_img', '$title', '$description', '$price')";
	$result = mysqli_query($db, $query);
	if($result){
		header('Location: admin.php');
		mysqli_close($db);
	}
?>