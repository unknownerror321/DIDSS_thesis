<aside id="basicSidebar" class="pmd-sidebar  sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="<?=base_url();?>assets/themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle">CMIC Admin</div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="login.html">Logout</a></li>
			</ul>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect active" href="index.html">	
				<i class="material-icons media-left pmd-sm">dashboard</i> 
				<span class="media-body">Dashboard</span>
			</a> 
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">supervisor_account</i> 
				<span class="media-body">Users</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="<?=base_url();?>admin/view_teachers">Teachers</a></li>
				<li><a href="<?=base_url();?>admin/view_students">Students</a></li>
				<li><a href="<?=base_url();?>admin/view_staffs">Staff</a></li>
			</ul>
		</li>
		
	</ul>
</aside><!-- End Left sidebar -->