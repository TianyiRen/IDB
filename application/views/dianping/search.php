<!--
<br>
<br>
<form>
	SearchWord: <input type="text" name="searchWord" />
	
	<select name="Category">
	<option value="Restaruant">Restaurant</option>
	<option value="Dishes">Dishes</option>
	</select>

<input type="submit" />
</form>
-->

<h2>Create a news item</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('dianping/search') ?>

  <label for="title">Title</label> 
  <input type="input" name="title" /><br />

  <label for="text">Text</label>
  <textarea name="text"></textarea><br />
  
  <input type="submit" name="submit" value="Create news item" /> 

</form>