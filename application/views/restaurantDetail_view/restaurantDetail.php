<h2> Restaurant Info: </h2>
<?php foreach ($restaurantInfo[0] as $key=>$value): ?>
<div id="main" >
	<?php echo $key . " ===> " . $value;?>
</div>
<?php endforeach ?>

<br>
<br>

<h2> Dish Info: </h2>
<?php foreach($dishInfo AS $dishDetail):?>
	<div id="main" >
	<?php foreach ($dishDetail as $key=>$value): ?>
		<?php echo $key . " ===> " . $value;?>
	<?php endforeach?>
	</div>
<?php endforeach?>