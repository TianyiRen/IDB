<div class="container">				
	<h1 id="Info" class="page-header">Restaurant Details</h1>
	<p class="lead">Below is all you want to know about a restaurant.</p>		
	<br>
	<div class="row">
		<div class="col-md-6">
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

				<br>
				<br>

				<h2> Review Info: </h2>
				<?php foreach($rReviewInfo AS $rReviewDetail):?>
					<div id="main" >
					<?php foreach ($rReviewDetail as $key=>$value): ?>
						<div>
						<?php echo $key . " ===> " . $value;?>
						</div>
					<?php endforeach?>
					<br>
					</div>
				<?php endforeach?>

				<h2> Tags: </h2>
				<?php foreach($rtagInfo AS $rtagInfoDetail) :?>
					<div id="main" >
					<?php $tagContent = $rtagInfoDetail['TAGCONTENT'];
							$count = $rtagInfoDetail['COUNT'];
						echo $tagContent;
						echo "===>";
						echo $count;
						echo " Times";?>
					<br>
					</div>
				<?php endforeach?>
		</div>