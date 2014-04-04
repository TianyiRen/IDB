<h2>Restaurant Reviews</h2>
<?php foreach($restaurantReviewList as $restaurantReview_item): ?>
	<?php echo form_open('deleteRReview' . "/" . $restaurantReview_item['USERID'] . "/" . $restaurantReview_item['REVIEWID']); ?>
	<h2><?php echo $restaurantReview_item['TITLE']?></h2>
	<div id="main" >
		<?php echo $restaurantReview_item['CONTENT']?>
		<?php echo $restaurantReview_item['SCORE']?>
		<?php echo $restaurantReview_item['PRICE']?>
		<?php echo $restaurantReview_item['ENVIRONMENT']?>
		<?php echo $restaurantReview_item['SERVICES']?>
	</div>	
	<input type='submit' name='deleteRReviewButton' value='Delete !!!' />
	<?php echo form_close() ;?>
<?php endforeach ?>