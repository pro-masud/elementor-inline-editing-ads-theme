<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ads
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta <?php echo bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon include here -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/loading-img.png" type="image/png" sizes="16x16">

    <!-- font-awesome icon main css files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css">

    <!-- bootstrap main css files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <!-- AOS-main-css-file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
    
    <!-- magnific-popup-css-file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">

    <!-- owl carousel main css file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">

    <!-- owl carousel theme default main css file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">

    <!-- Main Style CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <!-- Main Style CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- preloader section start -->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/loading-img.png" alt="preloader">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!-- preloader section end -->


    <!-- main div start -->
    <div class="main-wapper">
        <!-- header part start -->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <!-- brand logo -->
                    <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img class="img-fluid logo-color" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="logo">
                    </a>

                    <!-- offcanvaswithbackdrop button start -->
                    <a class="navbar-toggler offRight position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span class="navbar-toggler-icon"
                              data-bs-toggle="offcanvas"
                              data-bs-target="#offcanvasWithBackdrop"
                              aria-controls="offcanvasWithBackdrop"></span>
                    </a>
                    <div class="clearfix"></div>
                    <!-- offcanvaswithbackdrop button end -->

                    <!-- header main menu start -->
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="index.html" class="nav-link">Home</a></li>
                            <li><a href="our-service.html" class="nav-link">Our Service</a></li>
                            <li><a href="about.html" class="nav-link">About Us</a></li>
                            <li><a href="works.html" class="nav-link">Our Works</a></li>
                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="career.html" class="nav-link">Career</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                    <!-- header main menu end -->

                    <!-- get start button start -->
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="" class="btn btn-primary">Get Started</a>
                    </div>
                    <!-- get start button end -->

                    <!-- offcanvaswithbackdrop menu start -->
                    <div class="offcanvas offcanvas-end" id="offcanvasWithBackdrop">
                        <!-- offcanvs header start-->
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <!-- offcanvas logo -->
                            <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img class="img-fluid ps-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="logo">
                            </a>
                            <!-- offcanvs close button -->
                            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <!-- offcanvs header end-->

                         <!-- offcanvs body start-->
                         <div class="offcanvas-body">
                            <!-- main menu start -->
                            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                                <li><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="our-services.html" class="nav-link">Our Service</a></li>
                                <li><a href="about.html" class="nav-link">About Us</a></li>
                                <li><a href="works.html" class="nav-link">Our Works</a></li>
                                <li><a href="blog.html" class="nav-link">Blog</a></li>
                                <li><a href="career.html" class="nav-link">Career</a></li>
                                <li><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                            <!-- main menu end -->

                            <!-- get start button start -->
                            <div class="action-btns mt-4 ps-3">
                                <a href="" class="btn btn-primary">Get Started</a>
                            </div>
                            <!-- get start button end -->
                         </div>
                         <!-- offcanvs body end-->
                    </div>
                    <!-- offcanvaswithbackdrop menu end -->

                </div>                
            </nav>
        </header>
        <!-- header part end -->

