<div class="container">				
	<h1 id="Info" class="page-header">Restaurant Details of <?php echo $restaurantInfo[0]['NAME']?></h1>
	<p class="lead">Below is all you want to know about the restaurant.</p>		
	<br>
	<div class="row">
		<div class="col-md-6">
			<h2>Restaurant Info:</h2>
			<table class="table table-condensed">
				<tbody>
					<?php $restInfo = $restaurantInfo[0]; ?>
					<tr>
						<td style="width: 40%"><strong>Restaurant Name:</strong></td>
						<td style="width: 60%"><?php echo $restInfo['NAME']?></td>
					</tr>
					<tr>
						<td><strong>Open Time:</strong></td>
						<td><?php echo $restInfo['OPEN']?> AM</td>
					</tr>
					<tr>
						<td><strong>Close Time:</strong></td>
						<td><?php echo $restInfo['CLOSE']?> PM</td>
					</tr>
					<tr>
						<td><strong>Restaurant Address:</strong></td>
						<td><?php echo $restInfo['ADDR']?></td>
					</tr>
				</tbody>
			</table>
			
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>
			
			<h2>Menu:</h2>
			<table class="table table-condensed">
				<tbody>
					<?php foreach($dishInfo as $dishDetail):?>
						<tr>
							<td style="width: 45%"><strong><?php echo $dishDetail['NAME']?><strong></td>
							<td style="width: 55%">$<?php echo $dishDetail['PRICE']?></td>
						</tr>
					<?php endforeach?>
				</tbody>
			</table>
			
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>	
			
		</div>