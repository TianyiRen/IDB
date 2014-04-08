<div class="container">
	<div class="row">
		<div class="col-xs-4 col-xs-offset-1">
			<?php foreach($restaurantList as $restaurant_item): ?>
				<h2><?php echo $restaurant_item['RESTAURANTNAME']?></h2>
				<?php echo $restaurant_item['RESTAURANTADDRESS']?><br>
				<?php
					$url = "http://localhost/IDB/index.php/restaurantInfo/";
					$url = $url . (string)$restaurant_item['RESTAURANTID'];
				?>
				<p><a href = <?php echo $url ?>>Restaurant Details</a></p>
				
			<?php endforeach ?>
		</div>
		
		<div class="col-xs-6">
			<?php if (!empty($restaurantList)):?>
				<div id="map-canvas" style="width:540px; height: 500px">
					<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
					<style type="text/css">
					  html { height: 100% }
					  body { height: 100%; margin: 0; padding: 0 }
					  #map-canvas { height: 100% }
					</style>
					<script type="text/javascript"
					  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqeUTt7VFlkrw1kiZHumHBoNBhES7qrBI&sensor=true&language=eng">
					</script>
					<script type="text/javascript">
						var markers = [];
						function initialize() 
						{
							var myLatlng = new google.maps.LatLng(40.76, -73.96);
							var mapOptions = 
							{
								zoom: 13,
								center: myLatlng,
								mapTypeId: google.maps.MapTypeId.ROADMAP
							}
							var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
							
							var count = 0;
							<?php foreach($restaurantList as $restaurant_item): ?>
								if(count < 13)
								{
									count = count + 1;
									var marker = new google.maps.Marker
									({
									  position: new google.maps.LatLng(<?php echo $restaurant_item['RESTAURANTLOCATIONX']?>, <?php echo $restaurant_item['RESTAURANTLOCATIONY']?>),
									  map: map,
									  title:"<?php echo $restaurant_item['RESTAURANTNAME']?>"
									});
								}
							<?php endforeach ?>
							
						}
						google.maps.event.addDomListener(window, 'load', initialize);
						
					</script>
				</div>
			<?php endif?>
		</div>
	</div>
</div>		