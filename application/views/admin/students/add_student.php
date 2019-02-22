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
                <span>Students</span>
            </h1><!-- End Title -->
        
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
            <li><a href="index.html">Students</a></li>
            <li class="active">New Student</li>
            </ol><!--breadcrum end-->
        
            <div class="no-table-blank-state row">
                <!--no table found blank state-->
                <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="section section-custom billinfo"> 
                    <!--section-title -->
                    <h2>New Student</h2><!--section-title end -->
                    <!-- section content start-->
                    <div id="rfid_modal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title text-center">Scan RFID</h2>
                                </div>
                                <div class="modal-body">
                                    <input type="text" id="rfid_input" class="form-control" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="validationForm" action="" method="post">
                        <div class="pmd-card pmd-z-depth">
                            <div class="pmd-card-body">
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                RFID No*
                                            </label>
                                            <input type="text" id="" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Name*
                                            </label>
                                            <input type="text" id="regular1" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">       
                                            <label>City*</label>
                                            <select class="select-simple form-control pmd-select2">
                                                <option></option>
                                                <option>Dallas Cowboys</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">       
                                            <label>State*</label>
                                            <select class="select-simple form-control pmd-select2">
                                                <option></option>
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Zip Code*
                                            </label>
                                            <input type="text" id="regular1" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Phone*
                                            </label>
                                            <input type="text" id="regular1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Email*
                                            </label>
                                            <input type="text" id="regular1" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label class="control-label">Address</label>
                                            <textarea required class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkbox pmd-default-theme">
                                            <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                                <input type="checkbox" value="">
                                                <span>Save Details</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                            <div class="pmd-card-actions">
                                <a href="javascript:void(0);" class="btn btn-primary next">Submit</a>
                                <a href="javascript:void(0);" class="btn btn-default">Cancel</a>
                            </div>
                        </div> <!-- section content end -->  
                    </form>
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




