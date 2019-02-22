<!doctype html>
<html lang="">

<?php $this->load->view('common/css');?>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">

			
			<!-- Notifications -->
            <div class="dropdown notification icons pmd-dropdown">
			
				<a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
					<div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
				</a>
			
				<div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
					<!-- Card header -->
					<div class="pmd-card-title">
						<div class="media-body media-middle">
							<a href="notifications.html" class="pull-right">3 new notifications</a>
							<h3 class="pmd-card-title-text">Notifications</h3>
						</div>
					</div>
					
					<!-- Notifications list -->
					<ul class="list-group pmd-list-avatar pmd-card-list">
						<li class="list-group-item hidden">
							<p class="notification-blank">
								<span class="dic dic-notifications-none"></span> 
								<span>You don´t have any notifications</span>
							</p>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?=base_url();?>assets/themes/images/profile-1.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Prathit</span> posted a new challanegs</span>
									<span class="list-group-item-text">5 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?=base_url();?>assets/themes/images/profile-2.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Keel</span> Cloned 2 challenges.</span>
									<span class="list-group-item-text">15 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?=base_url();?>assets/themes/images/profile-3.png" data-holder-rendered="true">
									</span>
								</div>
							
								<div class="media-body">
									<span class="list-group-item-heading"><span>John</span> posted new collection.</span>
									<span class="list-group-item-text">25 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?=base_url();?>assets/themes/images/profile-4.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Valerii</span> Shared 5 collection.</span>
									<span class="list-group-item-text">30 Minutes ago</span>
								</div>
							</a>
						</li>
					</ul><!-- End notifications list -->

				</div>
				
				
            </div> <!-- End notifications -->
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" data-target="basicSidebar" data-placement="left" data-position="slidepush" is-open="true" is-open-width="1200" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons md-light">menu</i></a>	
            <a href="index.html" class="navbar-brand">
                
            </a>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside id="basicSidebar" class="pmd-sidebar  sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="<?=base_url();?>assets/themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle">Propeller Admin</div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="login.html">Logout</a></li>
			</ul>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect" href="index.html">	
				<i class="media-left media-middle"></i>
				<span class="media-body">Dashboard</span>
			</a> 
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"></i> 
				<span class="media-body">UI Elements</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="typography.html">Typography</a></li>
				<li><a href="icons.html">Icons</a></li>
				<li><a href="shadow.html">Shadow</a></li>
				<li><a href="accordion.html">Accordion</a></li>
				<li><a href="alert.html">Alert</a></li>
				<li><a href="badge.html">Badge</a></li>
				<li><a href="button.html">Button</a></li>
				<li><a href="modal.html">Modal</a></li>
				<li><a href="dropdown.html">Dropdown</a></li>
				<li><a href="list.html">List</a></li>
				<li><a href="navbar.html">Navbar</a></li>
				<li><a href="popover.html">Popover</a></li>
				<li><a href="progressbar.html">Progressbar</a></li>
				<!--<li><a href="sidebar.html">Sidebar</a></li> -->
				<li><a href="tab.html">Tab</a></li>
				<li><a href="tooltip.html">Tooltip</a></li>
				<li><a href="card.html">Card</a></li>
				<li><a href="floating-button.html">Floating Action Button</a></li>
			</ul>
		</li>
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">swap_calls</i> 
				<span class="media-body">Third Party Elements</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="custom-scroll.html">Custom Scrollbar</a></li>
				<li><a href="datetimepicker.html">Datetimepicker</a></li>
				<li><a href="range-slider.html">Range Slider</a></li>
				<li><a href="select2.html">Select2</a></li>
			</ul>
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"></i>
				<span class="media-body">Form</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="form-element.html">Form Elements</a></li>
				<li><a href="form.html">Form Examples</a></li>
			</ul>
		</li>
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"></i> 
				<span class="media-body">Table</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="table.html">Normal Table</a></li>
				<li><a href="data-table.html">Data Table</a></li>
				<li><a href="table-with-expand-collapse.html">Table with Expand/Collapse</a></li>
			</ul>
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"></i> 
				<span class="media-body">Pages</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="404.html">404</a></li>
				<li><a href="blank.html">Blank</a></li>
				<li><a href="profile.html">Profile</a></li>
			</ul>
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="login.html">	
				<i class="media-left media-middle">
				</i> 
				<span class="media-body">Login</span>
			</a> 
		</li>
		
	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content inner-page">
	<!--tab start-->
	<div class="container-fluid full-width-container blank">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Blank</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.html">Dashboard</a></li>
		  <li class="active">Blank</li>
		</ol><!--breadcrum end-->
	
		<div class="no-table-blank-state row">
				<!--no table found blank state-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="no-table-found text-center">
						<h2>No such Element Found</h2>
						<p>Hang on...Take a look at our list of elements.</p>
						<a href="docs/index.php" type="button" class="btn btn-primary pmd-ripple-effect">Get Started</a>
					</div>
				</div><!-- end no table found blank state-->
			</div>
	</div><!-- tab end -->
	
</div><!-- content area end -->

<!-- Footer Starts -->
<footer class="admin-footer">
 <div class="container-fluid">
 	<ul class="list-unstyled list-inline">
	 	<li>
			<span class="pmd-card-subtitle-text">Propeller &copy; <span class="auto-update-year"></span>. All Rights Reserved.</span>
			<h3 class="pmd-card-subtitle-text">Licensed under <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license.</a></h3>
        </li>
        
        <li class="pull-right for-support">
			<a href="mailto:support@propeller.in">
            	<div>
				  <span class="pmd-card-subtitle-text">For Support</span>
				  <h3 class="pmd-card-title-text">support@propeller.in</h3>
				</div>
            </a>
        </li>
    </ul>
 </div>
</footer>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="<?=base_url();?>assets/js/jquery-1.12.2.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/propeller.min.js"></script>

<!-- Scripts Ends -->

</body>
</html>