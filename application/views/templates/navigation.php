<!-- navigation -->
<div class="navbar navbar-inverse" role="navigation">
	<div class="container">
	  <div class="navbar-header">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo site_url('search') ?>">Home</a></li>
			<?php if(empty($logged_in)): ?>
			<li><a href="<?php echo site_url('login') ?>">Log In</a></li>
			<li><a href="<?php echo site_url('signup') ?>">Sign Up</a></li>
			<?php else: ?>
			<li><a href="<?php echo site_url('user') . "/" . $user_ID ?>"><?php echo $user_name ?>'s Profile</a></li>
			<li><a href="<?php echo site_url('setting') . "/" . $user_ID ?>">Setting</a></li>
			<li><a href="<?php echo site_url('logout') ?>">Log Out</a></li>
			<?php endif ?>
		</ul>
	  </div>
	</div>
</div>

<div class="container">