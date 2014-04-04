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

<h2>Dish Reviews</h2>
<?php foreach($dishReviewList as $dishReview_item): ?>
	<?php echo form_open('deleteDReview' . "/" . $dishReview_item['USERID'] . "/" . $dishReview_item['REVIEWID']); ?>
	<h2><?php echo $dishReview_item['TITLE']?></h2>
	<div id="main" >
		<?php echo $dishReview_item['CONTENT']?>
		<?php echo $dishReview_item['SCORE']?>
		<?php echo $dishReview_item['PRICE']?>
		<?php echo $dishReview_item['TASTE']?>
		<?php echo $dishReview_item['VOLUMN']?>
		<?php echo $dishReview_item['LOOK']?>
	</div>	
	<input type='submit' name='deleteDReviewButton' value='Delete !!!'/>
	<?php echo form_close() ;?>
<?php endforeach ?>	