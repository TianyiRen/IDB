<?php foreach($restaurantList as $restaurant_item): ?>
	<h2><?php echo $restaurant_item['RESTAURANTNAME']?></h2>
	<div id="main" >
		<?php echo $restaurant_item['RESTAURANTADDRESS']?>
		<?php echo $restaurant_item['RESTAURANTID']?>
	</div>
	<p><a href = "http://localhost/IDB/index.php/restaurantInfo/00000000011">Details</a></p>
	
<?php endforeach ?>
		