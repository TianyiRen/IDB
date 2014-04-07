<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1 id="RR" class="page-header">Restaurant Reviews</h1>
			<p class="lead">All restaurant reviews left by you.</p>
			<?php foreach($restaurantReviewList as $restaurantReview_item): ?>
				<div class="bs-callout bs-callout-info">
					<h3><?php echo $restaurantReview_item['RESTAURANTNAME']?></h3>
					<table class="table table-condensed" style="table-layout:fixed;">
						<tbody>
							<tr>
								<td style="width: 22%"><h4>Title: </h4></td>
								<td style="width: 78%; word-wrap:break-word;"><?php echo $restaurantReview_item['TITLE'];?> </td>
							</tr>
							<tr>
								<td><h4>Content: </h4></td>
								<td style="word-wrap:break-word;"><?php echo $restaurantReview_item['CONTENT'];?> </td>
							</tr>
							<tr>
								<td><h4>Score: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $restaurantReview_item['SCORE'] * 2;?>0%">
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td><h4>Price: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $restaurantReview_item['PRICE'] * 2;?>0%">
									</div>
								</div>	
								</td>
							</tr>
							<tr>
								<td><h4>Environment: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $restaurantReview_item['ENVIRONMENT'] * 2;?>0%">
									</div>	
								</div>	
								</td>
							</tr>
							<tr>
								<td><h4>Services: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $restaurantReview_item['SERVICES'] * 2;?>0%">
									</div>		
								</div>
								</td>
							</tr>
						</tbody>
				    </table>
					<?php echo form_open('deleteRReview' . "/" . $restaurantReview_item['USERID'] . "/" . $restaurantReview_item['REVIEWID']); ?>
					<button type="submit" class="btn btn-default" name="deleteRReviewButton">Delete</button>
					<?php echo form_close() ;?>
				</div>
			<?php endforeach ?>
		</div>
		
		<div class="col-md-6">
			<h1 id="DR" class="page-header">Dish Reviews</h1>
			<p class="lead">All dish reviews left by you.</p>
			<?php foreach($dishReviewList as $dishReview_item): ?>
				<div class="bs-callout bs-callout-info">
					<!-- BUG? WHY REST NAME??? -->
					<h3><?php echo $dishReview_item['RESTAURANTNAME']?></h3>
					<table class="table" style="table-layout:fixed;">
						<tbody>
							<tr>
								<td style="width: 22%"><h4>Title: </h4></td>
								<td style="width: 78%; word-wrap:break-word;"><?php echo $dishReview_item['TITLE'];?> </td>
							</tr>
							<tr>
								<td><h4>Content: </h4></td>
								<td style="word-wrap:break-word;"><?php echo $dishReview_item['CONTENT'];?> </td>
							</tr>
							<tr>
								<td><h4>Score: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dishReview_item['SCORE'] * 2;?>0%">
									</div>
								</div>
								</td>
							</tr>
							<tr>
								<td><h4>Price: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dishReview_item['PRICE'] * 2;?>0%">
									</div>
								</div>	
								</td>
							</tr>
							<tr>
								<td><h4>Taste: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dishReview_item['TASTE'] * 2;?>0%">
									</div>	
								</div>	
								</td>
							</tr>
							<tr>
								<td><h4>Volumn: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dishReview_item['VOLUMN'] * 2;?>0%">
									</div>		
								</div>
								</td>
							</tr>
							<tr>
								<td><h4>Look: </h4></td>
								<td style="word-wrap:break-word;">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dishReview_item['LOOK'] * 2;?>0%">
									</div>		
								</div>
								</td>
							</tr>
						</tbody>
				    </table>
					<?php echo form_open('deleteDReview' . "/" . $dishReview_item['USERID'] . "/" . $dishReview_item['REVIEWID']); ?>
					<button type="submit" class="btn btn-default" name="deleteDReviewButton">Delete</button>
					<?php echo form_close() ;?>
				</div>				
			<?php endforeach ?>	
		</div>	
	</div>		
</div>