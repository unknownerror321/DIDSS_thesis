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
            <a href="index.html" class="floated-logo">
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
<div id="content" class="pmd-content inner-page logs-content">
	<div class="container-fluid full-width-container blank">
        <div class="row">
            <div class="col-md-12">
                <div class="pmd-card pmd-z-depth pmd-card-custom-form log-time"> 
                    <div class="pmd-card-body">
                        <h1><span id="date-part">February 23, 2018</span>, <span id="time-part">12:12:12</span> </h1>
                    </div>
                </div>
            </div>
            <input id="_inputrfid" type="text" name="_inputrfid">
        </div>
        
		<div class="row">
            <div class="main-row">
                <div class="col-md-6">
                    <div class="pmd-card pmd-card-default pmd-z-depth">
                        <div class="pmd-card-media cust-img">
                            <img src="http://propeller.in/assets/images/profile-pic.png">
                        </div>
                        <div class="pmd-card-title text-center">
                            <h2 class="pmd-card-title-text"><i class="material-icons md-dark pmd-md inline-icon">account_circle</i> Churvabels Babols</h2>
                            <span class="pmd-card-subtitle-text"><span id="idNum">100001</span> - <span id="type">Student</span></span>	
                        </div>	
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="pmd-card pmd-card-default pmd-z-depth cust-sec-wrapper">
                                <div class="pmd-card-media cust-img-sec">
                                    <img src="http://propeller.in/assets/images/profile-pic.png">
                                </div>
                                <div class="pmd-card-title text-center">
                                    <h2 class="pmd-card-title-text"><i class="material-icons md-dark pmd-md inline-icon">account_circle</i> Churvabels Babols</h2>
                                    <span class="pmd-card-subtitle-text"><span id="idNum">100001</span> - <span id="type">Student</span></span>	
                                </div>	
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pmd-card pmd-card-default pmd-z-depth cust-sec-wrapper">
                                <div class="pmd-card-media cust-img-sec">
                                    <img src="http://propeller.in/assets/images/profile-pic.png">
                                </div>
                                <div class="pmd-card-title text-center">
                                    <h2 class="pmd-card-title-text"><i class="material-icons md-dark pmd-md inline-icon">account_circle</i> Churvabels Babols</h2>
                                    <span class="pmd-card-subtitle-text"><span id="idNum">100001</span> - <span id="type">Student</span></span>	
                                </div>	
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-md-12 m-t-10">
                            <div class="pmd-card pmd-z-depth pmd-card-custom-view">
                                <div class="table-responsive">
                                    <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>February 10, 2019</td>
                                                <td>12:00 PM</td>
                                                <td>Out</td>
                                            </tr>
                                            <tr>
                                                <td>February 10, 2019</td>
                                                <td>12:00 PM</td>
                                                <td>Out</td>
                                            </tr>
                                            <tr>
                                                <td>February 10, 2019</td>
                                                <td>12:00 PM</td>
                                                <td>Out</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
	</div><!-- tab end -->
	
</div><!-- content area end -->

<?php $this->load->view('common/footer');?>
<?php $this->load->view('common/js');?>

</body>
</html>