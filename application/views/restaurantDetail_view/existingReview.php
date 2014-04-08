<div class="container">				
	<h1 id="Info" class="page-header">Existed Reviews</h1>
	<p class="lead">Below are the reviews left by current users, the information may be helpful.</p>		
	<br>
	<div class="row">
		<div class="col-md-11">			
			<table class="table table-condensed">
				<thead>
					<tr>
						<th style="width: 20%">Title</th>
						<th style="width: 55%">Content</th>
						<th style="width: 5%">Overall</th>
						<th style="width: 5%">Price</th>
						<th style="width: 5%">Environment</th>
						<th style="width: 5%">Services</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($rReviewInfo as $rReviewDetail): ?>
						<tr>
						<?php foreach ($rReviewDetail as $key=>$value): ?>
							<td><?php echo $value?></td>
						<?php endforeach?>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>	
			
			<h2>Tags:</h2>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th style="width: 40%">TAGs</th>
						<th style="width: 60%">Agreed Times</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($rtagInfo as $rtagInfoDetail): ?>
						<tr>
						<?php $tagContent = $rtagInfoDetail['TAGCONTENT']; $count = $rtagInfoDetail['COUNT'];?>
							<td><?php echo $tagContent?></td>
							<td><?php echo $count. " times"?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>
			<HR style="border:3 double #987cb9" width="80%" color=#987cb9 SIZE=3>	
			
		</div>
	</div>
</div>