<?php

session_start();
include '../variables.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content=""> <!-- website name -->
        <meta property="og:site" content=""> <!-- website link -->
        <meta property="og:title" content=""> <!-- title shown in the actual shared post -->
        <meta property="og:description" content=""> <!-- description shown in the actual shared post -->
        <meta property="og:image" content=""> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content=""> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>EblockTrader | Login</title>
        
        <!-- Styles -->
        <link href="../../css2.css?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../css/swiper.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="../"><img src="../images/logo.png" alt="alternative"></a> 

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Evolo</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="./deposit/">Deposit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./withdraw/">withdraw</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./profile/">profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Payout/">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./delete/">Logout</a>
                        </li>
                    </ul>
                    <span class="nav-item social-icons">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->


        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1>Dashboard</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->


        <!-- Basic -->
        <div class="ex-basic-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col alert alert-success alert-dismissible">
                        <h2>$0.00</h2>
                        <p>balance</p>
                    </div>
                    <div class="col alert alert-danger alert-dismissible">
                        <h2>$0.00</h2>
                        <p>total deposit</p>
                    </div>
                    <div class="col alert alert-primary alert-dismissible">
                        <h2>$0.00</h2>
                        <p>Total withdrawal</p>
                    </div>
                    <div class="col alert alert-secondary alert-dismissible">
                        <h2>0</h2>
                        <p>total referal</p>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>About Website</h6>
                            <p class="p-small">eblocktrader is an advanced investment platform. It was established July 2010. We are strictly into trading, mining with lots of investment and assets in paid adverts, HYIPs, ICOs, Forex also buying signals from big exchanges</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Links</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li><a href="../signup/">Sign up</a></li>
                                <li><a href="../login/">Log in</a></li>
                                <li><a href="mailto:support@eblocktrader.com">Support</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-small">Follow us on social media <a href="mailto:support@eblocktrader.com"><strong>support@eblocktrader.com</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © <a href="../">eBlocktrader 2022</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
