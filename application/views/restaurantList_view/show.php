<div class="container-fluid">
	<div class="row-fluid">
			<?php foreach($restaurantList as $restaurant_item): ?>
				<h2><?php echo $restaurant_item['RESTAURANTNAME']?></h2>
				<?php echo $restaurant_item['RESTAURANTADDRESS']?><br>
				<?php echo $restaurant_item['RESTAURANTID']?><br>
				<?php
					$url = "http://localhost/IDB/index.php/restaurantInfo/";
					$url = $url . (string)$restaurant_item['RESTAURANTID'];
				?>
				<p><a href = <?php echo $url ?>>Restaurant Details</a></p>
				
			<?php endforeach ?>
	</div>
</div>		