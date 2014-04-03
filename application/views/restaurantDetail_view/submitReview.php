<h2> Upload Review: </h2>
<?php echo form_open('submitReview/' . $restaurantID); ?>
	<div>
	Title: <input type="text" name="reviewTitle" cols="35"/>
	</div>
	<div>
	Text: <textarea name ="reviewText" rows="15" cols="35"></textarea>
	</div>
	<div>
	<input type="submit" name="submitButton" value="Submit !!!" />
	</div>
<?php echo form_close(); ?>
