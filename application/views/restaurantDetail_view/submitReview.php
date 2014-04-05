<h2> Upload Review: </h2>
<?php echo form_open('submitReview/' . $restaurantID); ?>
	<div>
	Title: <input type="text" name="reviewTitle" cols="35"/>
	</div>
	<div>
	Text: <textarea name ="reviewText" rows="15" cols="35"></textarea>
	</div>
	
	
	Overall Score: <br />
	<label><input name="Overall" type="radio" value=1 />1 </label> 
	<label><input name="Overall" type="radio" value=2 />2 </label> 
	<label><input name="Overall" type="radio" value=3 checked="true"/>3 </label> 
	<label><input name="Overall" type="radio" value=4 />4 </label> 
	<label><input name="Overall" type="radio" value=5 />5 </label> 
	<br />
	
	Price: <br />
	<label><input name="Price" type="radio" value=1 />1 </label> 
	<label><input name="Price" type="radio" value=2 />2 </label> 
	<label><input name="Price" type="radio" value=3 checked="true"/>3 </label> 
	<label><input name="Price" type="radio" value=4 />4 </label> 
	<label><input name="Price" type="radio" value=5 />5 </label> 
	<br />
	
	Environment: <br />
	<label><input name="Environment" type="radio" value=1 />1 </label> 
	<label><input name="Environment" type="radio" value=2 />2 </label> 
	<label><input name="Environment" type="radio" value=3 checked="true"/>3 </label> 
	<label><input name="Environment" type="radio" value=4 />4 </label> 
	<label><input name="Environment" type="radio" value=5 />5 </label> 
	<br />
	
	Services: <br />
	<label><input name="Services" type="radio" value=1 />1 </label> 
	<label><input name="Services" type="radio" value=2 />2 </label> 
	<label><input name="Services" type="radio" value=3 checked="true"/>3 </label> 
	<label><input name="Services" type="radio" value=4 />4 </label> 
	<label><input name="Services" type="radio" value=5 />5 </label> 
	<br />
	
	Tags
	<?php foreach ($allTags as $tag_item): ?>
	<?php $tagID = $tag_item['TAGID'] ;
		 $tagContent = $tag_item['TAGCONTENT'] ; ?>
		<input type="checkbox" name="tagbox[]" value="<?php echo $tagID?>" /><?php echo $tagContent; ?>
	<?php endforeach ?>
	

	<div>
	<input type="submit" name="submitButton" value="Submit !!!" />
	</div>
<?php echo form_close(); ?>
