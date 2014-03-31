<h1>Search</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('search_view/search') ?>

	keyWord: <input type="text" name="searchWord" />
	<select name="category">
		<option value="Restaurant">Restaurant</option>
		<option value="Dishes">Dishes</option>
	</select>

  
  <input type="submit" name="submit" value="Search" /> 
  
