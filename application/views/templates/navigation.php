<!-- navigation -->

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url('search') ?>">I Love Food !</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<?php if(empty($logged_in)): ?>
							<li><a href="<?php echo site_url('login') ?>">Log In</a></li>
							<li><a href="<?php echo site_url('signup') ?>">Sign Up</a></li>
							<?php else: ?>
							<li><a href="<?php echo site_url('user') . "/" . $user_ID ?>"><?php echo $user_name ?>'s Profile</a></li>
							<li><a href="<?php echo site_url('setting') . "/" . $user_ID ?>">Setting</a></li>
							<li><a href="<?php echo site_url('logout') ?>">Log Out</a></li>
							<?php endif ?>
						</ul>
						<!--
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						-->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
</div>


<div class="container">