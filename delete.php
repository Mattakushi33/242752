<?php
if(isset($_GET['del'])){
	$id = $_GET['del'];
	$query = "DELETE FROM news WHERE id=$id";
	mysqli_query($db, $query);
	header('Location: admin.php');
}

if(isset($_GET['delPrice'])){
	$idPrice = $_GET['delPrice'];
	$query = "DELETE FROM price WHERE idPrice=$idPrice";
	mysqli_query($db, $query);
	header('Location: admin.php');
}