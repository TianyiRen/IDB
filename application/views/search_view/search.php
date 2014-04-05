<?php echo form_open('search'); ?>
	<!--
	Find: <input type="text" name="searchBox" />
	<input type="submit" name="searchButton" value="Search !!!" />
	-->

	<div class="input-group input-group-lg">
		<span class="input-group-addon">Keywords: </span>
		<!--<input type="text" name="searchBox" />-->
		<input type="text" class="form-control" name="searchBox" placeholder="Please input restaurant name or dish name">
		<span class="input-group-btn">
			<button class="btn btn-lg" type="submit" name="searchButton">Search !</button>
		</span>
		<!--<input type="submit" name="searchButton" value="Search !!!" />-->
	</div>
	
<?php echo form_close(); ?>
