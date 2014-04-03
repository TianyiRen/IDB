<?php echo form_open('signup'); ?>
<ul>
	<li>Email: <input type="email" name="userEmail" /></li>
	<li>Name: <input type="text" name="userName" /></li>
	<li>Gender: <input type="radio" name="userGender" value="male" checked="checked" />Male
				<input type="radio" name="userGender" value="female" /> Female</li>
	<li>Password: <input type="password" name="userPassword" /></li>
	<li>Password again: <input type="password" name="userPasswordAgain" /></li>
	<li><input type="submit" name="signupButton" value="Sign Up"/></li>
</ul>
<?php echo form_close(); ?>