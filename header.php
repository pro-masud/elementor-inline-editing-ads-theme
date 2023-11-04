<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/loading-img.png" type="image/png" sizes="16x16">
 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- preloader section start -->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/loading-img.png" alt="preloader">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!-- preloader section end -->

        <!-- header part start -->
        <header class="main-header w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <!-- brand logo -->
                    <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img class="img-fluid logo-color" src="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/logo.png" alt="logo">
                    </a>

                    <!-- offcanvaswithbackdrop button start -->
                    <a class="navbar-toggler offRight position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span class="navbar-toggler-icon"
                              data-bs-toggle="offcanvas"
                              data-bs-target="#offcanvasWithBackdrop"
                              aria-controls="offcanvasWithBackdrop">
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <!-- offcanvaswithbackdrop button end -->

                    <!-- header main menu start -->
                    <div class="collapse navbar-collapse justify-content-center">
                        <!-- <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="index.html" class="nav-link">Home</a></li>
                            <li><a href="our-services.html" class="nav-link">Our Service</a></li>
                            <li><a href="about.html" class="nav-link">About Us</a></li>
                            <li><a href="works.html" class="nav-link">Our Works</a></li>
                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="career.html" class="nav-link">Career</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul> -->
                        <?php 

                            wp_nav_menu([
                                'theme_location'    => 'main-menu',
                                'menu_class'        => 'nav col-12 col-md-auto justify-content-center main-menu',
                            ]);
                        
                        ?>
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
                                <img class="img-fluid ps-2" src="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/logo.png" alt="logo">
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