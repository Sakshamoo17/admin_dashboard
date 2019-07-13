<?php
session_start();

include "db.php";
if(isset($_POST['submit']))
{
    $product_name=$_POST['product_name'];
    $product_des=$_POST['product_des'];
    $product_price=$_POST['product_price'];
    $product_offer=$_POST['product_offer'];

    if(count($_FILES) > 0) {
        if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            require_once "db.php";
            $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
            $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

            $sql = "INSERT INTO product_detail(product_name,product_des,product_price,product_offer,product_imageType ,product_imageData)
        VALUES('$product_name','$product_des','$product_price','$product_offer','{$imageProperties['mime']}', '{$imgData}')";
            $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Please check the Entries once.<br/>" . mysqli_error($con));
            if(isset($current_id)) {
                header("Location: view_product.php");
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
    <title>Add Product</title>
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
                        <li><a href="add_category.php"><em class="ti ti-user"></em>Add Product</a></li>
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
                        <h2 class="user-panel-title">Add Product</h2>
                       <!--  <div class="alert-box alert-primary">
                            <div class="alert-txt"><em class="ti ti-alert"></em>Confirm your email address</div>
                            <a href="#" class="btn btn-sm btn-primary">Resend Email</a>
                        </div> --><!-- .alert-box -->
                        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#product-data">Product Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#wallet-address">Wallet Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#notification">Notification</a>
                            </li>
                        </ul><!-- .nav-tabs-line -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="product-data">
                                <form enctype="multipart/form-data" method="POST">
                                    <div class="input-item input-with-label">
                                        <label for="full-name" class="input-item-label">Product Name</label>
                                        <input class="input-bordered" type="text" id="full-name" name="product_name">
                                    </div><!-- .input-item -->
                                    <div class="input-item input-with-label">
                                        <label for="sur-name" class="input-item-label">Product Description</label>
                                        <input class="input-bordered" type="text" id="sur-name" name="product_offer">
                                    </div><!-- .input-item -->
                                    <div class="input-item input-with-label">
                                        <label for="email-address" class="input-item-label">Product Price</label>
                                        <input class="input-bordered" type="int" id="email-address" name="product_des">
                                    </div><!-- .input-item -->
                                    <div class="input-item input-with-label">
                                        <label for="mobile-number" class="input-item-label">Product Offer Price</label>
                                        <input class="input-bordered" type="int" id="mobile-number" name="product_price">
                                    </div><!-- .input-item -->
                                    <div class="input-item input-with-label">
                                        <label for="mobile-number" class="input-item-label">Product Image</label>
                                        <input class="input-bordered" type="file" id="mobile-number" name="userImage">
                                    </div><!-- .input-item -->
                                    <div class="gaps-1x"></div><!-- 10px gap -->
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
                                        <div class="gaps-2x d-sm-none"></div>
                                        <!-- <span class="color-success"><em class="ti ti-check-box"></em> All Changes are saved</span> -->
                                    </div>
                                </form><!-- form -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane fade" id="wallet-address">
                                <p>In order to receive your ICOX Tokens, please select your wallet addres and you have to put the address below input box. You will receive ICOX tokens to this address after the Token Sale end.</p>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="swalllet" class="input-item-label">Select Wallet </label>
                                                <select class="input-bordered" name="swalllet" id="swalllet">
                                                    <option value="eth">Paytm</option>
                                                    <option value="dac">PhonePe</option>
                                                    <option value="bic">BHIM/UPI</option>
                                                </select>
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="input-item input-with-label">
                                        <label for="token-address" class="input-item-label">Your Address for tokens:</label>
                                        <input class="input-bordered" type="text" id="token-address" name="token-address" value="0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae">
                                        <span class="input-note">Note: Address should be ERC20-compliant.</span>
                                    </div><!-- .input-item -->
                                    <div class="gaps-2x"></div>
                                    <div class="note note-plane note-danger">
                                        <em class="fas fa-info-circle"></em>
                                        <p>DO NOT USE your exchange wallet address such as Kraken, Bitfinex, Bithumb, Binance etc. You can paytm,phonepe,bhim,freecharge wallets etc. Do not use the address if you don’t have a private key of the your address. You WILL NOT receive ICOX Tokens and WILL LOSE YOUR FUNDS if you do.</p>
                                    </div>
                                    <div class="gaps-3x"></div>
                                    <div class="gaps-1x"></div><!-- 10px gap -->
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <button class="btn btn-primary">Update</button>
                                        <div class="gaps-2x d-sm-none"></div>
                                        <span class="color-success"><em class="ti ti-check-box"></em> Saved your wallet address</span>
                                    </div>
                                </form><!-- form -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane fade" id="notification">
                                <p>You can manage your all kind of notification from here.</p>
                                <div class="gaps-1x"></div>
                                <ul class="notification-list">
                                    <li>
                                        <span>Notify me by email about resumption of sales</span>
                                        <div class="padl-2x"><input class="input-switch" type="checkbox" id="rsmpts"><label for="rsmpts"></label></div>
                                    </li>
                                    <li>
                                        <span>Notify me by email for latest news</span>
                                        <div class="padl-2x"><input class="input-switch" type="checkbox" checked id="lnews"><label for="lnews"></label></div>
                                    </li>
                                    <li>
                                        <span>Alert me by email for unusual activity.</span>
                                        <div class="padl-2x"><input class="input-switch" type="checkbox" checked id="unuact"><label for="unuact"></label></div>
                                    </li>
                                </ul>
                                <div class="gaps-4x"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span></span>
                                    <span class="color-success"><em class="ti ti-check-box"></em> Update Notification Settings</span>
                                </div>
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
