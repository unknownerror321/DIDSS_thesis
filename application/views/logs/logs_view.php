<!doctype html>
<html lang="">

<?php $this->load->view('common/css');?>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header log-header">	
            <a href="index.html" class="navbar-brand">
                <img src="<?=base_url();?>assets/images/cmic-logo.png" alt="CMIC Logo" class="img-responsive">
            </a>
            <div class="centered-text">
                <h1>Cebu Mary Immaculate College, INC</h1>
                <p class="text-white">A.Borbajo, St. Talamban. Cebu City</p>
            </div>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

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