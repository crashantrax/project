<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coop - LoanClerk Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/icon/favicon.ico');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/metisMenu.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css'); ?> ">
    <!-- amchart css -->
    <link rel="stylesheet" href="<?= base_url('https://www.amcharts.com/lib/3/plugins/export/export.css');?>" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/typography.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/default-css.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('public/contents-css/login.css'); ?>" >
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?> ">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="contents">
        <div id="header-black">
            <div id="logo-container"></div>
            <div class="app-title">Coop Loan Management System</div>
        </div>
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
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="<?= base_url('loanclerk'); ?> ">LoanClerk dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url(); ?> ">Item level (1)</a></li>
                                    <li><a href="<?= base_url(); ?> ">Item level (1)</a></li>
                                    <li><a href="<?= base_url();?>"> aria-expanded="true">Item level (1)</a>
                                        <ul class="collapse">
                                            <li><a href="<?= base_url(); ?> ">Item level (2)</a></li>
                                            <li><a href="<?= base_url(); ?> ">Item level (2)</a></li>
                                            <li><a href="<?= base_url(); ?> ">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url(); ?> ">Item level (1)</a></li>
                                </ul>
                            </li>
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
                                <input type="text" name="search" placeholder="Search..." required>
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
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="<?= base_url(); ?> ">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="<?= base_url(); ?> ">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="<?= base_url();?>" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
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
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?= base_url('index.php'); ?> ">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img style="border-radius: 50%;border:1px solid black;padding: 5px;" class="avatar user-thumb" src="public/contents-css/logo/admin.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown" style="font-size: 13px;"> LoanClerk <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url(); ?> ">Message</a>
                                <a class="dropdown-item" href="<?= base_url(); ?> ">Settings</a>
                                <a class="dropdown-item" href="<?= base_url('admin/logout'); ?> ">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- Hoverable Rows Table start -->
                <div class="col-lg-15 mt-5">
                    <div class="card">
                         <div class="card-body">
                             <h4 class="header-title">Loan Applications</h4>
                             <div class="single-table">
                                 <div class="table-responsive">
                                     <table class="table table-hover text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">date</th>
                                                <th scope="col">action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                    <th scope="row">1</th>
                                                <td>Patrick Tiu</td>
                                                <td>09 / 07 / 2018</td>
                                                <td><i class="ti-trash"></i></td>
                                                </tr>
                                            <tr>
                                                    <th scope="row">1</th>
                                                 <td>Patrick Tiu</td>
                                                <td>09 / 07 / 2018</td>
                                                   <td><i class="ti-trash"></i></td>
                                            </tr>
                                            <tr>
                                                   <th scope="row">1</th>
                                                <td>Patrick Tiu</td>
                                                <td>09 / 07 / 2018</td>
                                                <td><i class="ti-trash"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Patrick Tiu</td>
                                                <td>09 / 07 / 2018</td>
                                                <td><i class="ti-trash"></i></td>
                                            </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                    <!-- Hoverable Rows Table end -->
            </div>
                <!-- sales report area start --
                <!-- sales report area end -->
                <!-- overview area start -->
                
                <!-- overview area end -->
                <!-- market value area start -->
                
        </div>
    </div>


    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
