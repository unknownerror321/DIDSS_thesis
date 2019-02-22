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
                <span>Staffs</span>
            </h1><!-- End Title -->
        
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
            <li><a href="index.html">Staffs</a></li>
            <li class="active">Lists</li>
            </ol><!--breadcrum end-->
        
            <div class="no-table-blank-state row">
                <!--no table found blank state-->
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div id="card">
                        <h2>Staffs List</h2>
                        <div class="component-box">
                            <!-- table card example -->
                            <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                                <div class="table-responsive">
                                    <table id="datatables" class="table pmd-table table-hover table-striped display responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Tiger</td>
                                            <td>Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Garrett</td>
                                            <td>Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                        </tr>
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