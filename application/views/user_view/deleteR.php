<h2>Restaurant Reviews</h2>
<?php foreach($restaurantReviewList as $restaurantReview_item): ?>
	<?php echo form_open('deleteRReview' . "/" . $restaurantReview_item['USERID'] . "/" . $restaurantReview_item['REVIEWID']); ?>
	<h3><?php echo $restaurantReview_item['RESTAURANTNAME']?></h3>
	<div id="main" >
		<?php echo "Title: "; echo $restaurantReview_item['TITLE'];?>
		<br />
		<?php echo "Content: "; echo $restaurantReview_item['CONTENT']?>
		<br />
		<?php echo "Score: "; echo $restaurantReview_item['SCORE']?>
		<br />
		<?php echo "Price: "; echo $restaurantReview_item['PRICE']?>
		<br />
		<?php echo "Evironment: "; echo $restaurantReview_item['ENVIRONMENT']?>
		<br />
		<?php echo "Services: "; echo $restaurantReview_item['SERVICES']?>
		<br />
	</div>	
	<input type='submit' name='deleteRReviewButton' value='Delete !!!' />
	<?php echo form_close() ;?>
<?php endforeach ?>