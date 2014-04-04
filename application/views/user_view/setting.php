<?php $userID = $user_ID?>
<?php echo form_open('setting' . "/" . $userID); ?>
	Change Name: <input type="text" name="changeName" />
	Change Password: <input type="password" name="changePassword" />
	<input type="submit" name="changeButton" value="Change !!!" />
<?php echo form_close(); ?>
