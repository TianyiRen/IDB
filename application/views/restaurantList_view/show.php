<?php foreach($restaurantList as $restaurant_item): ?>
	<h2><?php echo $restaurant_item['RESTAURANTNAME']?></h2>
	<div id="main" >
		<?php echo $restaurant_item['RESTAURANTADDRESS']?>
		<?php echo $restaurant_item['RESTAURANTID']?>
	</div>
	<?php
		$url = "http://localhost/IDB/index.php/restaurantInfo/";
		$url = $url . (string)$restaurant_item['RESTAURANTID'];
	?>
	<p><a href = <?php echo $url ?>>Details</a></p>
	
<?php endforeach ?>
		