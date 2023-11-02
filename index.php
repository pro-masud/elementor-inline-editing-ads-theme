<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/loading-img.png" type="image/png" sizes="16x16">
 
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- preloader section start -->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/loading-img.png" alt="preloader">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!-- preloader section end -->


    <!-- main div start -->
    <div class="main-wapper">
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
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="index.html" class="nav-link">Home</a></li>
                            <li><a href="our-services.html" class="nav-link">Our Service</a></li>
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


        <!-- page header section start -->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('./images/page-header-bg.svg') no-repeat bottom left;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold">Latest From Our Blog </h1>
                        <p class="lead">Thoughts, ideas, tips and news fresh from our innovation lab  </p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle"></div>
            </div>
        </section>
        <!-- page header section end -->


        <!-- blog section start -->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
                <div class="row">
                    <?php 
                        while(have_posts()){
                            the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article mb-4 mb-lg-4">
                            <a class="img-article" href="#">
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('large', [
                                            'class' => 'img-fluid'
                                        ]);
                                    }
                                ?>
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <?php echo get_the_tag_list('<ul><li class="d-inline-block mx-1 text-dark badge bg-primary-soft">', '</li><li class="d-inline-block mx-1 text-dark badge bg-primary-soft">', '<li></ul>');?>
                                </div>
                                <a href="<?php esc_attr(the_permalink(), 'ads'); ?>">
                                    <h2 class="limit-2-line-text"><?php esc_html(the_title(), 'ads'); ?></h2>
                                </a>
                                <?php if(is_single()){
                                    ?>
                                        <p class="limit-2-line-text"><?php echo esc_html( the_content(), 'ads'); ?></p>
                                    <?php
                                }else{
                                    ?>
                                        <p class="limit-2-line-text"><?php echo esc_html( wp_trim_words(get_the_content(), '30', null), 'ads'); ?></p>
                                    <?php 
                                } ?>
                                
                                <a href="#">
                                    <div class="avatar-container pt-4">
                                        <div class="avatar-img">
                                            <img src="<?php echo get_template_directory_uri() ; ?>/asstes/images/avatar/arif.jpg" alt="avatar">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name"><?php esc_html(the_author(), 'ads'); ?></h6>
                                            <span class="small fw-medium text-meuted"><?php esc_html(the_date(), 'ads'); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-6">
                        <?php 
                             the_posts_pagination( array(
                                'title'              => '', // this should hide the title
                                'prev_text'          => __( 'Previous', 'twentyfifteen' ),
                                'next_text'          => __( 'Next', 'twentyfifteen' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'nieuwedruk' ) . ' </span>',
                            ) );
                        
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->




        <!-- footer section start -->

        <footer class="footer-section">
            <!-- footer section top start -->
            <div class="footer-top  bg-gradient text-white ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="<?php echo get_template_directory_uri() ; ?>/asstes/images/logo/logo-white.png" alt="logo" class="img-fluid logo-white">
                                </div>
                                <p> House #310, Road #21, Mohakhali DOHS, Dhaka, Bangladesh</p>
                                <div><span class="met_color">Support:</span> <a href="#" >contact@wafisolutions.com</a></div>
                                <div><span class="met_color">Inquiry:</span> <a href="#" >info@wafisolutions.com</a></div>
                                <div><span class="met_color">Phone:</span> +8801790591869</div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Work With Us</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="#" class="text-decoration-none">Full-Stack Developers</a></li>
                                            <li><a href="#" class="text-decoration-none">.NET Developers</a></li>
                                            <li><a href="#" class="text-decoration-none">Angular Developers</a></li>
                                            <li><a href="#" class="text-decoration-none">React Developers</a></li>
                                            <li><a href="#" class="text-decoration-none">Node.js Developers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3></h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="#" class="text-decoration-none">DevOps Engineer</a></li>
                                            <li><a href="#" class="text-decoration-none">QA Engineers</a></li>
                                            <li><a href="#" class="text-decoration-none">UI/UX Designers</a></li>
                                            <li><a href="#" class="text-decoration-none">iOS Developers</a></li>
                                            <li><a href="#" class="text-decoration-none">Andriod Developers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Quick Links</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="#" class="text-decoration-none">Our Services</a></li>
                                            <li><a href="#" class="text-decoration-none">About Us</a></li>
                                            <li><a href="#" class="text-decoration-none">Our Works</a></li>
                                            <li><a href="#" class="text-decoration-none">Career</a></li>
                                            <li><a href="#" class="text-decoration-none">Blog</a></li>
                                            <li><a href="#" class="text-decoration-none">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer section top end -->

                      <!-- footer bottom start -->
                      <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2023 Wafi Solutions. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bottom end -->
            
        </footer>
        <!-- footer section end -->
    </div>
    <!-- main div end -->
    
    <?php wp_footer(); ?>
</body>
</html>