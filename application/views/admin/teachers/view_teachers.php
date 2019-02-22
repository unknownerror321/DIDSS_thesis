<!doctype html>
<html lang="">

<?php $this->load->view('common/css');?>

<body>
<!-- Header Starts -->
<?php $this->load->view('common/nav');?>
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<?php $this->load->view('common/sidebar');?>
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content inner-page">
	<!--tab start-->
	<div class="container-fluid full-width-container blank">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Teachers</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.html">Teachers</a></li>
		  <li class="active">Lists</li>
		</ol><!--breadcrum end-->
	
		<div class="no-table-blank-state row">
				<!--no table found blank state-->
				<div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="pmd-card pmd-z-depth recent-post">      
                        <div class="pmd-card-title">
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Recent Logs</h2>
                            </div>
                        </div>
                        <ul class="list-group pmd-card-list pmd-list-avatar">
                            <li class="list-group-item">
                                <div class="media-left"> 
                                    <a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?=base_url();?>assets/themes/images/profile-1.png" data-holder-rendered="true"> 
                                    </a> 
                                </div>
                                <div class="media-body media-middle">
                                    <h3 class="list-group-item-heading">Christopher Columbus</h3>
                                    <span class="list-group-item-text">100001 -  Student</span>
                                </div>
                                <div class="media-right post">
                                    <span class="post-time">12:00 AM</span>
                                </div>
                            </li>
                        </ul>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div>
			</div>
	</div><!-- tab end -->
	
</div><!-- content area end -->

<!-- Footer Starts -->
<?php $this->load->view('common/footer');?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php $this->load->view('common/js');?>
<!-- Scripts Ends -->

</body>
</html>