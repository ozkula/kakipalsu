     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <!-- with nested -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-list-alt"></i> <span>Post</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo base_url('post');?>">All Post</a></li>
                  <li><a href="<?php echo base_url('post/new_post') ?>"><i class="fa fa-plus"></i> Write New</a></li>
                </ul>
              </li>
            <!-- end nested -->
            <!-- with nested -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-book"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo base_url('article');?>">All Post</a></li>
                  <li><a href="<?php echo base_url('article/new') ?>"><i class="fa fa-plus"></i> Write New</a></li>
                </ul>
              </li>
            <!-- end nested -->
            <li><a href="<?php echo base_url('categories'); ?>"><i class="fa fa-tags"></i> Categories</a></li>
            <li><a href="<?php echo base_url('about'); ?>"><i class="fa fa-fire"></i> About</a></li>
            <!-- with nested -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-gears"></i> <span>Other</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('article/new') ?>"><i class="fa fa-comment-o"></i> Contact Person</a></li>
                  <li><a href="<?php echo base_url('article/new') ?>"><i class="fa fa-picture-o"></i> Slider Image</a></li>
                  <li><a href="<?php echo base_url('article/new') ?>"><i class="fa fa-bullseye"></i> Meta</a></li>
                  <li><a href="<?php echo base_url('article/new') ?>"><i class="fa fa-users"></i> User</a></li>
                </ul>
              </li>
            <!-- end nested -->
            <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
