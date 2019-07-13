<?php
session_start();

include "db.php";

    if(isset($_GET['did']))
    {
        $type_of_move=$_POST['type_of_move'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $desired_date=$_POST['desired_date'];
        $mf_address=$_POST['mf_address'];
        $mf_code=$_POST['mf_code'];
        $mf_location=$_POST['mf_location'];
        $mf_area=$_POST['mf_area'];
        $mf_property=$_POST['mf_property'];
        $mf_noofroom=$_POST['mf_noofroom'];
        $mf_freightcar=$_POST['mf_freightcar'];
        $mf_floor=$_POST['mf_floor'];
        $mf_worc=$_POST['mf_worc'];
        $mf_lift=$_POST['mf_lift'];
        $mt_address=$_POST['mt_address'];
        $mt_code=$_POST['mt_code'];
        $mt_location=$_POST['mt_location'];
        $mt_area=$_POST['mt_area'];
        $mt_property=$_POST['mt_property'];
        $mt_noofroom=$_POST['mt_noofroom'];
        $mt_freightcar=$_POST['mt_freightcar'];
        $mt_floor=$_POST['mt_floor'];
        $mt_worc=$_POST['mt_worc'];
        $mt_lift=$_POST['mt_lift'];
        $help=$_POST['help'];
        $info=$_POST['info'];

        $ins="select * from din";
    $exe=mysqli_query($con, $ins);

    if($exe)
    {
    ?>

    <?php

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
    <title>View Company</title>
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
                        <img src="images/logo.png" alt="logo" srcset="images/logo2x.png 2x">
                    </a>
                </div><!-- .site-logo -->

                <div class="dropdown topbar-action-item topbar-action-user">
                    <a href="#" data-toggle="dropdown"> <img class="icon" src="images/user-thumb-sm.png" alt="thumb"> </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-dropdown">
                            <div class="user-dropdown-head">
                                <h6 class="user-dropdown-name">Stefan Harary <span>(IXIA1A105)</span></h6>
                                <span class="user-dropdown-email">useremail@example.com</span>
                            </div>
                            <div class="user-dropdown-balance">
                                <h6>ICO TOKEN BALANCE</h6>
                                <h3>120,000,000 IC0X</h3>
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
                        <img src="images/logo.png" alt="logo" srcset="images/logo2x.png 2x">
                    </a>
                </div><!-- .site-logo -->
            </div><!-- .topbar-lg -->

            <div class="topbar-action d-none d-lg-block">
                <ul class="topbar-action-list">
                    <li class="topbar-action-item topbar-action-link">
                        <a href="#"><em class="ti ti-home"></em> Go to main site</a>
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
                                    <h6 class="user-dropdown-name">Stefan Harary <span>(IXIA1A105)</span></h6>
                                    <span class="user-dropdown-email">useremail@example.com</span>
                                </div>
                                <div class="user-dropdown-balance">
                                    <h6>ICO TOKEN BALANCE</h6>
                                    <h3>120,000,000 IC0X</h3>
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
                    <h6 class="user-name">Stefan Harary</h6>
                    <div class="user-uid">Unique ID: <span>IXIA1A105</span></div>
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
                    <li><a href="account.html"><em class="ti ti-user"></em>Account</a></li>
                    <li><a href="security.html"><em class="ti ti-lock"></em>Security</a></li>
                </ul><!-- .user-icon-nav -->
                <div class="user-sidebar-sap"></div><!-- .user-sidebar-sap -->
                <ul class="user-nav">
                    <li><a href="how-to.html">How to buy?</a></li>
                    <li><a href="faq.html">Faqs</a></li>
                    <li><a href="#">Whitepaper</a></li>
                    <li>Contact Support<span>info@icocrypto.com</span></li>
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
                    <h2 class="user-panel-title">Company Details</h2>
                    <input type="text" id="">
                    <table class="data-table tranx-table">
                        <thead>
                        <tr>
                            <th class="tranx-from"><span>Name</span></th>
                            <th class="tranx-from"><span>Phone No.</span></th>
                            <th class="tranx-from"><span>Address</span></th>
                            <th class="tranx-from"><span>Location</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $view="select * from din";
                        $exe_view=mysqli_query($con, $view);

                        while($result=mysqli_fetch_array($exe_view))
                        {
                            ?>
                            <tr>
                                <td class="tranx-no"><span><?php echo $result['name'];?></span></td>
                                <td class="tranx-amount"><span><?php echo $result['phoneno'];?></span></td>
                                <td class="tranx-from"><span><?php echo $result['mf_address'];?></span><?php echo $result['mt_address'];?></td>
                                <td class="tranx-from"><span><?php echo $result['mf_location'];?></span><?php echo $result['mt_location'];?></td>
                                <td class="tranx-action" id="test1" onclick="assignValue(<?php echo $result['order_id']; ?>)">
                                    <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <script>
                            function assignValue(order_id) {
                                var kate=order_id;
                                window.alert(kate);

                            }
                        </script>

                        </tbody>
                    </table>

                </div><!-- .user-panel -->
            </div><!-- .user-content -->
        </div><!-- .d-flex -->
    </div><!-- .container -->
</div>
<!-- UserWraper End -->


<div class="modal fade" id="tranxPending" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="tranx-popup">
                <h5>View Order Details</h5>
                <div class="tranx-purchase-details d-none active">
                    <p>Transaction <strong>ICIYOW0102</strong> was place on <strong>24-Jul-2018, 12:10 am</strong> and <br> is currently <strong>Pending Payment</strong>. <a href="#" class="make-pay">Please Make your payment <em class="ti ti-arrow-right"></em></a></p>
                    <h6>Purchase Details</h6>
                    <ul class="tranx-purchase-info">
                        <li>
                            <div class="tranx-purchase-head">Package Name</div>
                            <div class="tranx-purchase-des">ICO Phace 3</div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Payment Method</div>
                            <div class="tranx-purchase-des"></div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Your Contribution</div>
                            <div class="tranx-purchase-des">1</div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Token (T)</div>
                            <div class="tranx-purchase-des">
                                <span>4,780.00</span>
                                <span>(4780 * 1)</span>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Bonus Tokens (B)</div>
                            <div class="tranx-purchase-des">
                                <span>956.00</span>
                                <span>(956 * 1)</span>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Total Tokens</div>
                            <div class="tranx-purchase-des">
                                <span>5,736.00</span>
                                <span>(T+B)</span>
                            </div>
                        </li><!-- li -->
                    </ul><!-- .tranx-purchase-info -->

                    <h6>Payment Deposit From <em class="ti ti-arrow-right"></em> <span>Ethereum Address</span></h6>
                    <div class="tranx-payment-info">
                        <em class="fab fa-ethereum"></em>
                        <input type="text" class="tranx-payment-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled>
                    </div><!-- .tranx-payment-info -->
                </div><!-- .tranx-payment-details -->
                <div class="tranx-payment-details d-none">
                    <p>Hi, Your transaction <strong>ICIYOW0102</strong> is still <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
                    <h6>Please make your Payment to the bellow Address</h6>
                    <div class="tranx-payment-info">
                        <span class="tranx-copy-feedback copy-feedback"></span>
                        <em class="fab fa-ethereum"></em>
                        <input type="text" class="tranx-payment-address copy-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled>
                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                    </div><!-- .tranx-payment-info -->
                    <ul class="tranx-info-list">
                        <li><span>SET GAS LIMIT:</span> 120 000</li>
                        <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                    </ul><!-- .tranx-info-list -->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="tranx-info-qr">
                                <span>OR Scan bellow QR Code to pay</span>
                                <img class="tranx-info-qrimg" src="images/eth-qr.png" alt="qr">
                                <div class="gaps-4x"></div>
                                <a href="#" class="btn btn-light pay-done">OK</a>
                                <div class="gaps-1x"></div>
                                <a href="#" class="btn btn-xs btn-uline btn-uline-danger">Cancel Payment</a>
                                <div class="gaps-2x d-sm-none"></div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-7">
                            <div class="note note-info">
                                <em class="fas fa-info-circle"></em>
                                <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                            </div>
                            <div class="gaps-1x"></div>
                            <div class="note note-danger">
                                <em class="fas fa-info-circle"></em>
                                <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .tranx-payment-details -->
            </div><!-- .tranx-popup -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<!-- Modal End -->

<div class="modal fade" id="tranxApproved" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="tranx-popup">
                <h5>View Transaction Details</h5>
                <p>Transaction <strong>ICIYOW0102</strong> was place on <strong>24-Jul-2018, 12:10 am</strong> and <br> it’s  <strong>Successfully Paid.</strong></p>
                <div class="tranx-purchase-details">
                    <h6>Purchase Details</h6>
                    <ul class="tranx-purchase-info">
                        <li>
                            <div class="tranx-purchase-head">Package Name</div>
                            <div class="tranx-purchase-des">ICO Phace 3</div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Payment Method</div>
                            <div class="tranx-purchase-des"></div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Your Contribution</div>
                            <div class="tranx-purchase-des">1</div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Token (T)</div>
                            <div class="tranx-purchase-des">
                                <span>4,780.00</span>
                                <span>(4780 * 1)</span>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Bonus Tokens (B)</div>
                            <div class="tranx-purchase-des">
                                <span>956.00</span>
                                <span>(956 * 1)</span>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="tranx-purchase-head">Total Tokens</div>
                            <div class="tranx-purchase-des">
                                <span>5,736.00</span>
                                <span>(T+B)</span>
                            </div>
                        </li><!-- li -->
                    </ul><!-- .tranx-purchase-info -->

                    <h6>Payment Deposit From <em class="ti ti-arrow-right"></em> <span>Ethereum Address</span></h6>
                    <div class="tranx-payment-info">
                        <em class="fab fa-ethereum"></em>
                        <input type="text" class="tranx-payment-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled>
                    </div><!-- .tranx-payment-info -->
                </div><!-- .tranx-payment-details -->
            </div><!-- .tranx-popup -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<!-- Modal End -->


<div class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <span class="footer-copyright">Copyright 2018, <a href="#">ICO Crypto</a>.  All Rights Reserved.</span>
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
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>
