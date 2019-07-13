<?php
session_start();

include "db.php";
if(isset($_POST['submit']))
{
    $cateogry_name=$_POST['cateogry_name'];
    $category_sub_category=$_POST['category_sub_category'];


    if(count($_FILES) > 0) {
        if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            require_once "db.php";
            $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
            $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

            $sql = "INSERT INTO category(cateogry_name,category_sub_category)
        VALUES('$cateogry_name','$category_sub_category')";
            $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Please check the Entries once.<br/>" . mysqli_error($con));
            if(isset($current_id)) {
                header("Location: view_cateogry.php");
            }
            }
    }

}
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Add cateogry</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=101">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style.css?ver=101">
    
</head>

<body class="user-dashboard">
    
    
    <div class="topbar">
        <div class="topbar-md d-lg-none">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#" class="toggle-nav">
                        <div class="toggle-icon">
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                        </div>
                    </a><!-- .toggle-nav -->

                    <div class="site-logo">
                        <a href="index1.html" class="site-brand">
                            <!--<img src="" alt="logo" srcset="images/logo2x.png 2x"> -->
                            <p>Fuerte Developers</p>
                        </a>
                    </div><!-- .site-logo -->
                    
                    <div class="dropdown topbar-action-item topbar-action-user">
                        <a href="#" data-toggle="dropdown"> <img class="icon" src="images/user-thumb-sm.png" alt="thumb"> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-dropdown">
                                <div class="user-dropdown-head">
                                    <h6 class="user-dropdown-name">Saksham <span>(FD0001)</span></h6>
                                    <span class="user-dropdown-email">saksham@fuertedevelopers.com</span>
                                </div>
                                <div class="user-dropdown-balance">
                                    <h6>FD BALANCE</h6>
                                    <h3>Rs.21000000</h3>
                                    <ul>
                                        <li>1.240 BTC</li>
                                        <li>19.043 ETH</li>
                                        <li>6,500.13 USD</li>
                                    </ul>
                                </div>
                                <ul class="user-dropdown-btns btn-grp guttar-10px">
                                    <li><a href="#" class="btn btn-xs btn-warning">Confirm Email</a></li>
                                    <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                                </ul>
                                <div class="gaps-1x"></div>
                                <ul class="user-dropdown-links">
                                    <li><a href="account.html"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                    <li><a href="security.html"><i class="ti ti-lock"></i>Security</a></li>
                                    <li><a href="activity.html"><i class="ti ti-eye"></i>Activity</a></li>
                                </ul>
                                <ul class="user-dropdown-links">
                                    <li><a href="login.html"><i class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .toggle-action -->
                </div><!-- .container -->
            </div><!-- .container -->
        </div><!-- .topbar-md -->
        <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="topbar-lg d-none d-lg-block">
                    <div class="site-logo">
                        <a href="index1.html" class="site-brand">
                            <!--<img src="images/logo.png" alt="logo" srcset="images/logo2x.png 2x"> -->
                            <p><h1>Fuerte Developers</h1></p>
                        </a>
                    </div><!-- .site-logo -->
                </div><!-- .topbar-lg -->

                <div class="topbar-action d-none d-lg-block">
                    <ul class="topbar-action-list">
                        <li class="topbar-action-item topbar-action-link">
                            <a href="//index.html"><em class="ti ti-home"></em> Go to main site</a>
                        </li><!-- .topbar-action-item -->

                        <li class="dropdown topbar-action-item topbar-action-language">
                            <a href="#" data-toggle="dropdown"> EN <em class="ti ti-angle-down"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">FR</a></li>
                                <li><a href="#">JY</a></li>
                                <li><a href="#">CH</a></li>
                            </ul>
                        </li><!-- .topbar-action-item -->

                        <li class="dropdown topbar-action-item topbar-action-user">
                            <a href="#" data-toggle="dropdown"> <img class="icon" src="images/user-thumb-sm.png" alt="thumb"> </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="user-dropdown">
                                    <div class="user-dropdown-head">
                                        <h6 class="user-dropdown-name">Saksham <span>(FD0001)</span></h6>
                                        <span class="user-dropdown-email">saksham@fuertedevelopers.com</span>
                                    </div>
                                    <div class="user-dropdown-balance">
                                        <h6>FD BALANCE</h6>
                                        <h3>Rs.210000</h3>
                                        <ul>
                                            <li>1.240 BTC</li>
                                            <li>19.043 ETH</li>
                                            <li>6,500.13 USD</li>
                                        </ul>
                                    </div>
                                    <ul class="user-dropdown-links">
                                        <li><a href="account.html"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                        <li><a href="security.html"><i class="ti ti-lock"></i>Security</a></li>
                                        <li><a href="activity.html"><i class="ti ti-eye"></i>Activity</a></li>
                                    </ul>
                                    <ul class="user-dropdown-links">
                                        <li><a href="login.html"><i class="ti ti-power-off"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li><!-- .topbar-action-item -->
                    </ul><!-- .topbar-action-list -->
                </div><!-- .topbar-action -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- TopBar End -->
    
    
    <div class="user-wraper">
        <div class="container">
            <div class="d-flex">
                <div class="user-sidebar">
                    <div class="user-sidebar-overlay"></div>
                    <div class="user-box d-none d-lg-block">
                        <div class="user-image">
                            <img src="images/user-thumb-lg.png" alt="thumb">
                        </div>
                        <h6 class="user-name">Saksham</h6>
                        <div class="user-uid">Unique ID: <span>FD0001</span></div>
                        <ul class="btn-grp guttar-10px">
                            <li><a href="#" class="btn btn-xs btn-warning">Confirm Email</a></li>
                            <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                        </ul>
                    </div><!-- .user-box -->
                    <ul class="user-icon-nav">
                        <li><a href="index1.html"><em class="ti ti-dashboard"></em>Dashboard</a></li>
                        <li><a href="kyc.html"><em class="ti ti-files"></em>KYC Application</a></li>
                        <li><a href="tokens.html"><em class="ti ti-pie-chart"></em>Contributions</a></li>
                        <li><a href="transactions.html"><em class="ti ti-control-shuffle"></em>Transactions</a></li>
                        <li><a href="referrals.html"><em class="ti ti-infinite"></em>Referral</a></li>
                        <li><a href="add_cateogry.php"><em class="ti ti-user"></em>Add cateogry</a></li>
                        <li><a href="security.html"><em class="ti ti-lock"></em>Security</a></li>
                    </ul><!-- .user-icon-nav -->
                    <div class="user-sidebar-sap"></div><!-- .user-sidebar-sap -->
                    <ul class="user-nav">
                        <li><a href="how-to.html">How to buy?</a></li>
                        <li><a href="faq.html">Faqs</a></li>
                        <li><a href="#">Whitepaper</a></li>
                        <li>Contact Support<span>info@fuertedevelopers.com</span></li>
                    </ul><!-- .user-nav -->
                    <div class="d-lg-none">
                        <div class="user-sidebar-sap"></div>
                        <div class="gaps-1x"></div>
                        <ul class="topbar-action-list">
                            <li class="topbar-action-item topbar-action-link">
                                <a href="#"><em class="ti ti-home"></em> Go to main site</a>
                            </li><!-- .topbar-action-item -->
                            <li class="dropup topbar-action-item topbar-action-language">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true"> EN <em class="ti ti-angle-up"></em> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">FR</a></li>
                                    <li><a href="#">JY</a></li>
                                    <li><a href="#">CH</a></li>
                                </ul>
                            </li><!-- .topbar-action-item -->
                        </ul><!-- .topbar-action-list -->
                    </div>
                </div><!-- .user-sidebar -->
                
                <div class="user-content">
                    <div class="user-panel">
                        <h2 class="user-panel-title">Add cateogry</h2>
                       <!--  <div class="alert-box alert-primary">
                            <div class="alert-txt"><em class="ti ti-alert"></em>Confirm your email address</div>
                            <a href="#" class="btn btn-sm btn-primary">Resend Email</a>
                        </div> --><!-- .alert-box -->
                        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#cateogry-data">cateogry Data</a>

                        </ul><!-- .nav-tabs-line -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cateogry-data">
                                <form enctype="multipart/form-data" method="POST">
                                    <div class="input-item input-with-label">
                                        <label for="full-name" class="input-item-label">Cateogry Name</label>
                                        <input class="input-bordered" type="text" id="full-name" name="cateogry_name">
                                    </div><!-- .input-item -->
                                    <div class="input-item input-with-label">
                                        <label for="sur-name" class="input-item-label">Sub Category</label>
                                        <input class="input-bordered" type="text" id="sur-name" name="cateogry_subcategory">
                                    </div><!-- .input-item -->
                                    <div class="gaps-1x"></div><!-- 10px gap -->
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <button type="submit" name="submit" class="btn btn-primary">next</button>
                                        <div class="gaps-2x d-sm-none"></div>
                                        <!-- <span class="color-success"><em class="ti ti-check-box"></em> All Changes are saved</span> -->
                                    </div>
                                </form><!-- form -->
                            </div><!-- .tab-pane -->

                        </div><!-- .tab-content -->
                    </div><!-- .user-panel -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
    
    
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <span class="footer-copyright">Copyright 2019, <a href="http://www.fuertedevelopers.com">Fuerte Developers</a>.  All Rights Reserved.</span>
                </div><!-- .col -->
                <div class="col-md-5 text-md-right">
                    <ul class="footer-links">
                        <li><a href="policy.html">Privacy Policy</a></li>
                        <li><a href="policy.html">Terms of Sales</a></li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- FooterBar End -->
    
    
    <!-- JavaScript (include all script here) -->
    <script src="assets/js/jquery.bundle.js?ver=101"></script>
    <script src="assets/js/script.js?ver=101"></script>
</body>
</html>
