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