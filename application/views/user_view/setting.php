<div class="container">
	<h1 id="Setting" class="page-header">Settings</h1>
	<p class="lead">Input your new nick name and password.</p>
	<?php $userID = $user_ID?>
	<?php echo form_open('setting' . "/" . $userID); ?>
		<form role="form">
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="ChangeName">Change name</label>
						<input type="text" class="form-control" id="ChangeName" name="changeName" placeholder="Enter new name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="ChangePassword">Change password</label>
						<input type="password" class="form-control" id="ChangePassword" name="changePassword" placeholder="Enter new password">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-default" name="changeButton">Submit</button>
		</form>
	<?php echo form_close(); ?>
</div>
