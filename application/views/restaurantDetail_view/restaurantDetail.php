<div class="container">				
	<h1 id="Info" class="page-header">Restaurant Details</h1>
	<p class="lead">Below is all you want to know about a restaurant.</p>		
	<br>
	<div class="row">
		<div class="col-md-6">
			<h2>Restaurant Info:</h2>
			<dl class="dl">
				<?php foreach ($restaurantInfo[0] as $key=>$value): ?>
				<dt><?php echo $key?></dt>
				<dd><?php echo $value?></dd>
				<?php endforeach ?>
			</dl>	
				
			<h2>Dish Info:</h2>
			<dl class="dl">
				<?php foreach ($dishInfo as $dishDetail): ?>
					<?php foreach ($dishDetail as $key=>$value): ?>
						<dt><?php echo $key?></dt>
						<dd><?php echo $value?></dd>
					<?php endforeach?>
					<br>
				<?php endforeach ?>
			</dl>		
				
			<h2>Review Info:</h2>
			<dl class="dl">
				<?php foreach ($rReviewInfo as $rReviewDetail): ?>
					<?php foreach ($rReviewDetail as $key=>$value): ?>
						<dt><?php echo $key?></dt>
						<dd><?php echo $value?></dd>
					<?php endforeach?>
					<br>
				<?php endforeach ?>
			</dl>	
			
			<h2>Tags:</h2>
			<dl class="dl">
				<?php foreach ($rtagInfo as $rtagInfoDetail): ?>
					<?php $tagContent = $rtagInfoDetail['TAGCONTENT']; $count = $rtagInfoDetail['COUNT'];?>
						<dt><?php echo $tagContent?></dt>
						<dd><?php echo $count. " times"?></dd>
				<br>
				<?php endforeach ?>
			</dl>	
			
		</div>