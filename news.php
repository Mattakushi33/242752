<?php
	include('connect.php');
	$title = $_POST['titleNews'];
	$description = $_POST['textNews'];
	$name = $_FILES['imgNews']['name'];
	$tmp_name = $_FILES['imgNews']['tmp_name'];
	$source = 'img/'.$name;
	$source_img = '<img class="img_news" src='.$source.'>';
	move_uploaded_file($tmp_name, $source);
	
	$query = "INSERT INTO news (img, title, description) VALUES ('$source_img', '$title', '$description')";
	$result = mysqli_query($db, $query);
	if($result){
		header('Location: admin.php');
		mysqli_close($db);
	}
?>