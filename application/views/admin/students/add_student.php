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
                    <form id="" action="<?php echo base_url().'admin/insert_student'?>" method="post">
                        <div class="pmd-card pmd-z-depth">
                            <div class="pmd-card-body">
                                <div class="group-fields clearfix row">
                                    <div class="image-holder">
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <span>Profile Image*</span>
                                            <input type="file" id="profile_image" name="profile_image" class="form-control" placeholder="RFID No." readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <input type="text" id="rfid_input_hldr" name="rfid_input_hldr" class="form-control" placeholder="RFID No." readonly required>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">       
                                            <label>Firstname*</label>
                                            <input type="text" id="stud_fname" name="stud_fname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">       
                                            <label>Middlename*</label>
                                            <input type="text" id="stud_mname" name="stud_mname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Lastname*
                                            </label>
                                            <input type="text" id="stud_lname" name="stud_lname" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">       
                                            <label>Gender*</label>
                                            <select name="stud_gender" class="select-simple form-control pmd-select2" required>
                                                <option></option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">       
                                            <label>Age*</label>
                                            <input type="text" id="stud_age" name="stud_age" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                            <div class="pmd-card-actions">
                                <button type="submit" class="btn btn-primary next"> Add </button>
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




