
<div class="container">		
	<h1 id="Info" class="page-header">Upload Reivew</h1>
	<p class="lead">Upload your review to help more customers.</p>		
	<?php echo form_open('submitReview/' . $restaurantID); ?>
		<form role="form">
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="inputTitle">reviewTitle</label>
						<input type="text" class="form-control" id="inputTitle" name="reviewTitle" placeholder="Enter title"></input>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="inputText">reviewText</label>
						<textarea type="text" rows="10" class="form-control" id="inputText" name="reviewText" placeholder="Enter review details"></textarea>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
					<label class="control-label">Overall Score: </label>
						<div class="radio-inline">
							<label class="radio-inline"><input name="Overall" type="radio" id = "1" value=1 />1 </label> 
							<label class="radio-inline"><input name="Overall" type="radio" id = "2" value=2 />2 </label> 
							<label class="radio-inline"><input name="Overall" type="radio" id = "3" value=3 checked="true"/>3 </label> 
							<label class="radio-inline"><input name="Overall" type="radio" id = "4" value=4 />4 </label> 
							<label class="radio-inline"><input name="Overall" type="radio" id = "5" value=5 />5 </label> 
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
					<label class="control-label">Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
						<div class="radio-inline">
							<label class="radio-inline"><input name="Price" type="radio" id = "1" value=1 />1 </label> 
							<label class="radio-inline"><input name="Price" type="radio" id = "2" value=2 />2 </label> 
							<label class="radio-inline"><input name="Price" type="radio" id = "3" value=3 checked="true"/>3 </label> 
							<label class="radio-inline"><input name="Price" type="radio" id = "4" value=4 />4 </label> 
							<label class="radio-inline"><input name="Price" type="radio" id = "5" value=5 />5 </label> 
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
					<label class="control-label">Environment:&nbsp; </label>
						<div class="radio-inline">
							<label class="radio-inline"><input name="Environment" type="radio" id = "1" value=1 />1 </label> 
							<label class="radio-inline"><input name="Environment" type="radio" id = "2" value=2 />2 </label> 
							<label class="radio-inline"><input name="Environment" type="radio" id = "3" value=3 checked="true"/>3 </label> 
							<label class="radio-inline"><input name="Environment" type="radio" id = "4" value=4 />4 </label> 
							<label class="radio-inline"><input name="Environment" type="radio" id = "5" value=5 />5 </label> 
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
					<label class="control-label">Services:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
						<div class="radio-inline">
							<label class="radio-inline"><input name="Services" type="radio" id = "1" value=1 />1 </label> 
							<label class="radio-inline"><input name="Services" type="radio" id = "2" value=2 />2 </label> 
							<label class="radio-inline"><input name="Services" type="radio" id = "3" value=3 checked="true"/>3 </label> 
							<label class="radio-inline"><input name="Services" type="radio" id = "4" value=4 />4 </label> 
							<label class="radio-inline"><input name="Services" type="radio" id = "5" value=5 />5 </label> 
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<h4>TAGs</h4>
					<div class="btn-group" data-toggle="buttons">
						<?php foreach ($allTags as $tag_item): ?>
						<?php $tagID = $tag_item['TAGID']; $tagContent = $tag_item['TAGCONTENT'] ; ?>
							<label class="btn btn-default">
								<input type="checkbox" name="tagbox[]" id="option" value="<?php echo $tagID?>"> <?php echo $tagContent; ?>
							</label>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			
			<br>
			<br>
			<div class="row">
				<div class="col-xs-5">
					<button type="submit" class="btn btn-default" name="submitButton">Submit !</button>
				</div>
			</div>
			
		</form>
	<?php echo form_close(); ?>
</div>