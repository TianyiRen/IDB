

			<?php echo form_open('search'); ?>

				<div class="input-group input-group-lg" style="margin-bottom: 20px;">
					<span class="input-group-addon">Keywords: </span>
					<!--<input type="text" name="searchBox" />-->
					<input type="text" class="form-control" name="searchBox" placeholder="Please input restaurant name or dish name">
					<span class="input-group-btn">
						<button class="btn btn-lg" type="submit" name="searchButton">Search !</button>
					</span>
				</div>
				
			<?php echo form_close(); ?>

