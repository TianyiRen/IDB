<div class="container">
	<?php echo form_open('login'); ?>
		<form role="form">
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" name="userEmail" placeholder="Enter email">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="userPassword" placeholder="Password">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-default" name="loginButton">Submit</button>
		</form>
	<?php echo form_close(); ?>
</div>