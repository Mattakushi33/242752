<?php
	include('header.php');	
?>
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
           			</div>';
        		}
       		}
		?>
	</div>
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
               			</div>
               		</div>';
           		}
      		}
		?>
	</div>