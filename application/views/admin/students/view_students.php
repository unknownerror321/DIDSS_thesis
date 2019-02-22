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
            <li class="active">New Students</li>
            </ol><!--breadcrum end-->
        
            <div class="no-table-blank-state row">
                <!--no table found blank state-->
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <a href="<?php echo base_url().'admin/add_student'?>" class="btn pmd-btn-raised pmd-ripple-effect btn-primary pull-right" type="button">New Student</a>
                    <h2>Students List</h2>
                    <div id="card">
                        <div class="component-box">
                            <!-- table card example -->
                            <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                                <div class="table-responsive">
                                    <table id="datatables" class="table pmd-table table-hover table-striped display responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>RFID</th>
                                            <th>Last name</th>
                                            <th>Firstname</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($get_users as $users){ extract($users); ?>
                                            <tr>
                                                <td><?=$rfid;?></td>
                                                <td><?=$lastname;?></td>
                                                <td><?=$firstname;?></td>
                                                <td><?=$lastname;?></td>
                                                <td><?=($gender) ? 'Male' : 'Female';?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div> <!-- table card example end -->
				        </div>
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