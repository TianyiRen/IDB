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

<h2>Dish Reviews</h2>
<?php foreach($dishReviewList as $dishReview_item): ?>
	<?php echo form_open('deleteDReview' . "/" . $dishReview_item['USERID'] . "/" . $dishReview_item['REVIEWID']); ?>
	<h3><?php echo $dishReview_item['RESTAURANTNAME']?></h3>
	<div id="main" >
		<?php echo "Title: "; echo $dishReview_item['TITLE'];?>
		<br />
		<?php echo "Content: "; echo $dishReview_item['CONTENT']?>
		<br />
		<?php echo "Score: "; echo $dishReview_item['SCORE']?>
		<br />
		<?php echo "Price: "; echo $dishReview_item['PRICE']?>
		<br />
		<?php echo "Taste: "; echo $dishReview_item['ENVIRONMENT']?>
		<br />
		<?php echo "Volumn: "; echo $dishReview_item['SERVICES']?>
		<br />
		<?php echo "Look: "; echo $dishReview_item['SERVICES']?>
		<br />
	</div>	
	<input type='submit' name='deleteDReviewButton' value='Delete !!!'/>
	<?php echo form_close() ;?>
<?php endforeach ?>	