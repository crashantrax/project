
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
          
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="<?=base_url()?>"><i class="ti-home"></i> <span>Home</span></a></li>
                            <li class="active"><a href="<?= base_url('applicationform');?>"><i class="ti-write"></i><span>Review Loan Application</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="<?= base_url(); ?>">
                                <input type="text" id="search" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?= $page ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?=base_url()?>">Home</a></li>
                                <?php 
                                if($links == "main"){
                                    echo "<li><span>View</span></li>";
                                 }
                                 else if($links == "register"){
                                     echo "<li><span>Register</span></li>";
                                 }
                                ?>
                               

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?=base_url('public/contents-css/logo/admin.png')?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"> <?= $this->session->userdata('user_type');?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url(); ?> ">Profile</a>
                                <a class="dropdown-item" href="<?= base_url('admin/logout'); ?> ">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <?php 
                if(isset($contents)){
                    $this->load->view($contents);
                }
                ?>
            </div>
    </div>
    
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="<?=base_url('assets/js/vendor/jquery-2.2.4.min.js')?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/js/metisMenu.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.slicknav.min.js')?>"></script>

    <!-- start chart js -->
    
    <!-- start highcharts js -->
    <!-- start zingchart js -->

    <!-- all line chart activation -->
    <!-- all pie chart -->

    <!-- others plugins -->
    <script src="<?=base_url('assets/js/plugins.js')?>"></script>
    <script src="<?=base_url('assets/js/scripts.js')?>"></script>



    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/jquery-validation/dist/jquery.validate.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/jquery-validation/dist/additional-methods.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/jquery-steps/jquery.steps.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/minimalist-picker/dobpicker.js')?>"></script>
    <script src="<?=base_url('assets/vendor/nouislider/nouislider.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/wnumb/wNumb.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>
    <script src="<?=base_url('public/contents-script/search.js')?>"></script>


</body>

</html>
