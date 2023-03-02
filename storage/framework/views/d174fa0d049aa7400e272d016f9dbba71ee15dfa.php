<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Labb Water Management Company">

        <!-- ========== Page Title ========== -->
        <title><?php echo e($company? $company->name : 'Admin Company'); ?></title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!-- ========== Start Stylesheet ========== -->
        <link href="<?php echo e(asset('company/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/icofont.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/themify-icons.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/flaticon-set.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/magnific-popup.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/animate.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/bootsnav.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('company/assets/css/responsive.css')); ?>" rel="stylesheet">
        <!-- ========== End Stylesheet ========== -->
    </head>

    <body>
        <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-3 shape">
                    <ul class="social">
                        <li class="facebook">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="pinterest">
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 info float-right text-right">
                    <div class="info box">
                        <ul class="list">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                California, TX 70240
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <form method="get">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <div class="call">
                        <a href="tel:+1234567890">
                            <i class="fas fa-phone"></i>
                            <div class="contact">
                                <h4>+886 34467</h4>
                                <span>Call Us Anytime</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e($company? asset('tmp/uploads/'.$company->main_photo) : asset('company/assets/img/logo-yellow.png')); ?>" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home One <span class="badge">Construction</span></a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                                <li><a href="index-5.html">Home Five</a></li>
                                <li><a href="index-6.html">Home Six <span class="badge">Car Repair</span></a></li>
                                <li><a href="index-7.html">Home Seven <span class="badge">Business</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Projects</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Grid Colum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-grid-2-colum.html">Gallery Two Colum</a></li>
                                        <li><a href="gallery-grid-3-colum.html">Gallery Three Colum</a></li>
                                        <li><a href="gallery-grid-4-colum.html">Gallery Four Colum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Masonary Colum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-masonary-2-colum.html">Gallery Two Colum</a></li>
                                        <li><a href="gallery-masonary-3-colum.html">Gallery Three Colum</a></li>
                                        <li><a href="gallery-masonary-4-colum.html">Gallery Four Colum</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery-load-more.html">Project With Load More</a></li>
                                <li><a href="projects-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services Version One</a></li>
                                <li><a href="services-2.html">Services Version Two</a></li>
                                <li><a href="services-3.html">Services Version Three</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Team</a>
                            <ul class="dropdown-menu">
                                <li><a href="team.html">Team Grid</a></li>
                                <li><a href="team-carousel.html">Team Carousel</a></li>
                                <li><a href="team-single.html">Team Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>

                        <li>
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-large">
        <div id="bootcarousel" class="carousel slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item bg-cover active" style="background-image: url(company/assets/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <div class="shape animated slideInLeft"></div>
                                            <h3 data-animation="animated slideInUp"><?php echo e($company? $company->name : 'Professional Services'); ?></h3>
                                            <h2 data-animation="animated slideInDown"><?php echo e($company? $company->name : 'Professional Services'); ?></h2>
                                            <div class="slider-button">
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Projects</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-cover" style="background-image: url(company/assets/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <div class="shape animated slideInLeft"></div>
                                            <h3 data-animation="animated slideInUp"><?php echo e($company? $company->name : 'Professional Services'); ?></h3>
                                            <h2 data-animation="animated slideInRight"><?php echo e($company? $company->name : 'Professional Services'); ?></h2>
                                            <div class="slider-button">
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Projects</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control theme" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control theme" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area ver-two overflow-hidden shape-box default-padding-top">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="<?php echo e(asset('company/assets/img/shape/1.png')); ?>" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-5 thumb-box">
                    <div class="thumb">
                        <img src="<?php echo e(asset('company/assets/img/illustration/1.png')); ?>" alt="Thumb">
                    </div>
                </div>

                <div class="col-lg-7 info">
                    <h2 class="text-opacity">About</h2>
                    <h2>Create Innovative and Sustainable <br> Places in the World.</h2>
                    <p>
                        Repair summer one winter living feebly pretty his. In so sense am known these since. Shortly respect ask cousins brought. Last ask him cold feel met spot shy want. Children me laughing we prospect. Me we offending Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                    <ul>
                        <li>Invest in your simply neighborhood</li>
                        <li>Largest global industrial business community</li>
                    </ul>
                    <a class="btn btn-theme effect btn-md" href="#">Know More</a>
                </div>
                
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bg">
            <img src="<?php echo e(asset('company/assets/img/shape.png')); ?>" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Our About -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area carousel-shadow with-thumb bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>What We Do</h4>
                        <h2>Our Services</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-items services-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                            </div>
                            <div class="info">
                                <i class="flaticon-milling-machine"></i>
                                <h4>
                                    <a href="#">Construction & Engineering</a>
                                </h4>
                                <p>
                                    Direct enough off others say eldest may exeter she. Possible all ignorant supplied get settling marriage recurred. Past add size game.
                                </p>
                                <div class="button">
                                    <a href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                            </div>
                            <div class="info">
                                <i class="flaticon-wind-energy"></i>
                                <h4>
                                    <a href="#">Power & Energy</a>
                                </h4>
                                <p>
                                    Direct enough off others say eldest may exeter she. Possible all ignorant supplied get settling marriage recurred. Past add size game.
                                </p>
                                <div class="button text-right">
                                    <a href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                            </div>
                            <div class="info">
                                <i class="flaticon-house"></i>
                                <h4>
                                    <a href="#">Mechanical Engineering</a>
                                </h4>
                                <p>
                                    Direct enough off others say eldest may exeter she. Possible all ignorant supplied get settling marriage recurred. Past add size game.
                                </p>
                                <div class="button text-right">
                                    <a href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                            </div>
                            <div class="info">
                                <i class="flaticon-building"></i>
                                <h4>
                                    <a href="#">Ship Building Insudtry</a>
                                </h4>
                                <p>
                                    Direct enough off others say eldest may exeter she. Possible all ignorant supplied get settling marriage recurred. Past add size game.
                                </p>
                                <div class="button text-right">
                                    <a href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Work Porccess 
    ============================================= -->
    <div class="work-process-area relative default-padding bottom-less bg-fixed" style="background-image: url(company/assets/img/bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>How we work</h4>
                        <h2>Work Process</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="work-pro-items">
                <div class="row">
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="item-inner">
                                <i class="flaticon-ruler"></i>
                                <h4>Design <span>01</span></h4>
                                <p>
                                    Preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="item-inner">
                                <i class="flaticon-creativity"></i>
                                <h4>Planning <span>02</span></h4>
                                <p>
                                    Preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="item-inner">
                                <i class="flaticon-antivirus"></i>
                                <h4>Devolepment <span>03</span></h4>
                                <p>
                                    Preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Porccess -->

    <!-- Start Why Chose Us 
    ============================================= -->
    <div class="why-us-area default-padding shadow bg-dark text-light">
        <!-- Fixed Thumb -->
        <div class="fixed-thumb bg-cover" style="background-image: url(company/assets/img/2440x1578.png);"></div>
        <!-- End Fixed Thumb -->
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 offset-lg-3 left-info">
                    <div class="content">
                        <h4>Why Choose us</h4>
                        <h2>Great Experience For Building Construction & Renovation</h2>
                        <a class="btn btn-light effect btn-md" href="#">Start a Projects</a>
                    </div>
                </div>
                <div class="col-lg-4 info">
                    <div class="content">
                        <ul>
                            <li>
                                <h5>Reliability</h5>
                                <p>
                                    Get open game him what hour more part. Adapted as smiling of females journey.
                                </p>
                            </li>
                            <li>
                                <h5>Innovation</h5>
                                <p>
                                    Get open game him what hour more part. Adapted as smiling of females oh me journey exposed concern mainly point.
                                </p>
                            </li>
                            <li>
                                <h5>Smart Technology</h5>
                                <p>
                                    Get open game him what hour more part. Adapted as smiling of females oh me journey exposed concern.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <!-- Start Projects Area 
    ============================================= -->
    <div class="projects-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-item projects-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row align-center">
                                <div class="col-lg-6 order-lg-last thumb-box">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                                        <a href="https://www.youtube.com/watch?v=RprMgAcrpmg" class="popup-youtube"><i class="fas fa-video"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 info">
                                    <h4>Running Prjects</h4>
                                    <h2><a href="#">Ship Building Insudtry</a></h2>
                                    <p>
                                        Hope they dear who its bred. Smiling nothing affixed he carried it clothes calling he no. Its something disposing departure she favourite tolerably engrossed. Truth short folly court why she their balls.
                                    </p>
                                    <ul>
                                        <li>
                                            <h5>Project Type</h5>
                                            <span>Factory</span>
                                        </li>
                                        <li>
                                            <h5>Duration</h5>
                                            <span>5 year</span>
                                        </li>
                                        <li>
                                            <h5>Budget</h5>
                                            <span>15m</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row align-center">
                                <div class="col-lg-6 order-lg-last thumb-box">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                                        <a href="https://www.youtube.com/watch?v=RprMgAcrpmg" class="popup-youtube"><i class="fas fa-video"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 info">
                                    <h4>Running Prjects</h4>
                                    <h2><a href="#">Power & Energy</a></h2>
                                    <p>
                                        Hope they dear who its bred. Smiling nothing affixed he carried it clothes calling he no. Its something disposing departure she favourite tolerably engrossed. Truth short folly court why she their balls.
                                    </p>
                                    <ul>
                                        <li>
                                            <h5>Project Type</h5>
                                            <span>Energy</span>
                                        </li>
                                        <li>
                                            <h5>Duration</h5>
                                            <span>8 year</span>
                                        </li>
                                        <li>
                                            <h5>Budget</h5>
                                            <span>27m</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row align-center">
                                <div class="col-lg-6 order-lg-last thumb-box">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                                        <a href="https://www.youtube.com/watch?v=RprMgAcrpmg" class="popup-youtube"><i class="fas fa-video"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 info">
                                    <h4>Running Prjects</h4>
                                    <h2><a href="#">Mechanical Engineering</a></h2>
                                    <p>
                                        Hope they dear who its bred. Smiling nothing affixed he carried it clothes calling he no. Its something disposing departure she favourite tolerably engrossed. Truth short folly court why she their balls.
                                    </p>
                                    <ul>
                                        <li>
                                            <h5>Project Type</h5>
                                            <span>Machine</span>
                                        </li>
                                        <li>
                                            <h5>Duration</h5>
                                            <span>3 year</span>
                                        </li>
                                        <li>
                                            <h5>Budget</h5>
                                            <span>10m</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Area -->

    <!-- Start Team Area 
    ============================================= -->
    <div class="team-area default-padding-top bottom-less bg-gray">
        <!-- Fixed Shape  -->
        <div class="fixed-shape">
            <img src="<?php echo e(asset('company/assets/img/shape/4.svg')); ?>" alt="Shape">
        </div>
        <!-- End Fixed Shape  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Meet our experts</h4>
                        <h2>Team Members</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/700x800.png')); ?>" alt="Thumb">
                                <div class="info">
                                    <h4>Jessica Jones</h4>
                                    <span>Founder of Factry</span>
                                </div>
                                <div class="overlay text-light">
                                    <h4>Jessica Jones</h4>
                                    <p>
                                        Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point. 
                                    </p>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/700x800.png')); ?>" alt="Thumb">
                                <div class="info">
                                    <h4>Munia Ankor</h4>
                                    <span>Architect</span>
                                </div>
                                <div class="overlay text-light">
                                    <h4>Munia Ankor</h4>
                                    <p>
                                        Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point. 
                                    </p>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="<?php echo e(asset('company/assets/img/700x800.png')); ?>" alt="Thumb">
                                <div class="info">
                                    <h4>Ahmed Kamal</h4>
                                    <span>Engineering Officer</span>
                                </div>
                                <div class="overlay text-light">
                                    <h4>Ahmed Kamal</h4>
                                    <p>
                                        Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point. 
                                    </p>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials Area 
    ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="testimonial-items">
                <div class="row align-center">
                    <div class="col-lg-5 title text-center">
                        <h1 style="background-image: url(company/assets/img/800x700.png);">85</h1>
                        <h2>Millions of Customers <br> Like Our Services</h2>
                    </div>
                    <div class="col-lg-7 testimonial-box">
                        <div class="testimonial-content testimonials-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>
                                        I feel very happy and be proud to connect with absolute industry. Pure presume this is a very productive and perfect professional industry. I wish very good luck & success for this industry. Through it examine express game.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('company/assets/img/100x100.png')); ?>" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Jones Adhor</h5>
                                        <span>Architect</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>
                                        I feel very happy and be proud to connect with absolute industry. Pure presume this is a very productive and perfect professional industry. I wish very good luck & success for this industry. Through it examine express game.
                                    </p>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('company/assets/img/100x100.png')); ?>" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Mones Basel</h5>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Clients Area
    ============================================= -->
    <div class="clients-area default-padding bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="<?php echo e(asset('company/assets/img/shape/1.png')); ?>" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="clients-item-box">
                <div class="row align-center">
                    <div class="col-lg-5 left-info">
                        <h2>Our Partners</h2>
                        <p>
                            Forming two comfort invited. Yet she income effect edward. Entire desire way design few. Mrs sentiments led solicitude estimating friendship fat. Meant those event 
                        </p>
                    </div>
                    <div class="col-lg-6 offset-lg-1 clients-box">
                        <div class="clients-items owl-carousel owl-theme text-center">
                            <div class="single-item">
                                <a href="#"><img src="<?php echo e(asset('company/assets/img/150x80.png')); ?>" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="<?php echo e(asset('company/assets/img/150x80.png')); ?>" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="<?php echo e(asset('company/assets/img/150x80.png')); ?>" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="<?php echo e(asset('company/assets/img/150x80.png')); ?>" alt="Clients"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->

    <!-- Start Blog Area 
    ============================================= -->
    <div class="blog-area home-blog date-less default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Blog</h4>
                        <h2>Latest News</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-user"></i>
                                                <span>Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>13 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">Transform way you accept online donations. With GiveWP you</a>
                                    </h4>
                                    <p>
                                        Preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied.
                                    </p>
                                    <a class="more-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-user"></i>
                                                <span>Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>08 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">Morbis dictumst mentaeos felis morbi magna perfect solution</a>
                                    </h4>
                                    <p>
                                        Preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied.
                                    </p>
                                    <a class="more-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="<?php echo e(asset('company/assets/img/800x600.png')); ?>" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-user"></i>
                                                <span>Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>34 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">Conditions matter family active mutual is wishes choices perfect.</a>
                                    </h4>
                                    <p>
                                        Preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied.
                                    </p>
                                    <a class="more-btn" href="#">Read More <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Us</h4>
                            <p>
                                5919 Trussville Crossings Pkwy, <br> Birmingham AL 35235
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    California, TX 70240
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="#">Oil & Gas</a>
                                </li>
                                <li>
                                    <a href="#">Chemical Research</a>
                                </li>
                                <li>
                                    <a href="#">Industrial</a>
                                </li>
                                <li>
                                    <a href="#">Construction</a>
                                </li>
                                <li>
                                    <a href="#">Energy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Latest News</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">General Inquiries</a>
                                </li>
                                <li>
                                    <a href="#">Case Studies</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item opening-hours">
                            <h4 class="widget-title">Opening Hours</h4>
                            <ul>
                                <li> 
                                    <span>Sat - Sun :  </span>
                                    <div class="float-right"> 8.00 - 14.30</div>
                                </li>
                                <li> 
                                    <span>Monday :</span>
                                    <div class="float-right"> 11.00 - 16.00</div>
                                </li>
                                <li> 
                                    <span>Wed - Thu :</span>
                                    <div class="float-right"> 7.00 - 15.30</div>
                                </li>
                                <li> 
                                    <span> Friday : </span>
                                    <div class="float-right closed"> Closed </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Fixed Shape -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->

        <div class="fixed-shape">
            <img src="<?php echo e(asset('company/assets/img/shape/footer-shape.png')); ?>" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </footer>
    <!-- End Footer -->

        <!-- jQuery Frameworks
        ============================================= -->
        <script src="<?php echo e(asset('company/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/jquery.appear.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/jquery.easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/modernizr.custom.13711.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/progress-bar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/jquery.simpleLoadMore.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/count-to.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/bootsnav.js')); ?>"></script>
        <script src="<?php echo e(asset('company/assets/js/main.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\final labbwater\resources\views/layouts/company.blade.php ENDPATH**/ ?>