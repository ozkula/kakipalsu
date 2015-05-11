<div class="sidebar-left">
	<ul class="nav nav-stacked nav-boldtext">
		<li><a href="#"><h3 class="text-left"><?php echo $username; ?></h3></li>
		<li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
		<li><a href="<?php echo base_url(); ?>post">Posts</a></li>
		<li><a href="<?php echo base_url(); ?>article">Article</a></li>
		<li><a href="<?php echo base_url(); ?>category">Categories</a></li>
		<li><a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Others</a></li>
			<div class="collapse nav-inner" id="collapseExample">
				<li class="bg-info"><a href="<?php echo base_url(); ?>about">About</a></li>
				<li class="bg-info"><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
				<li class="bg-info"><a href="<?php echo base_url(); ?>setting">Setting</a></li>
			</div>
		<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
	</ul>
</div>