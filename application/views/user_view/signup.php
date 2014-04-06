<div class="container">
	<?php echo form_open('signup'); ?>
		<form role="form">
			<div class="row">
				<h2>Registration</h2>
				<br>
			</div>
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
						<label for="exampleInputEmail1">User name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="userName" placeholder="Enter name">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<div class="radio">
						  <label>
							<input type="radio" name="userGender" id="optionsRadios1" value="male" checked>
							Male
						  </label>
						</div>
						<div class="radio">
						  <label>
							<input type="radio" name="userGender" id="optionsRadios2" value="female">
							Female
						  </label>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" class="form-control" id="exampleInputEmail1" name="userPassword" placeholder="Enter password">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<label for="exampleInputEmail1">Password again</label>
						<input type="password" class="form-control" id="exampleInputEmail1" name="userPasswordAgain" placeholder="Enter same password again">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-default" name="signupButton">Sign Up</button>
		</form>
	<?php echo form_close(); ?>
</div>