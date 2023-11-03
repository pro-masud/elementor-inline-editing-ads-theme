<!-- include header file  -->
<?php get_header(); ?>


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
        <?php get_template_part('hero'); ?>
        <!-- page header section end -->


        <!-- blog section start -->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                    <?php 
                        while(have_posts()){
                            the_post();
                    ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-article p-5 mb-4 mb-lg-4" <?php post_class(); ?>>
                            <a class="img-article" href="#">
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('large', [
                                            'class' => 'img-fluid'
                                        ]);
                                    }
                                ?>
                            </a>
                            <div class="article-content p-10">
                                <div class="article-category mb-4 d-block">
                                    <?php echo get_the_tag_list('<ul><li class="d-inline-block mx-1 text-dark badge bg-primary-soft">', '</li><li class="d-inline-block mx-1 text-dark badge bg-primary-soft">', '<li></ul>');?>
                                </div>
                                <a href="<?php esc_attr(the_permalink(), 'freethemeads'); ?>">
                                    <h2 class="limit-2-line-text"><?php esc_html(the_title(), 'freethemeads'); ?></h2>
                                </a>

                                <p class="limit-2-line-text"><?php echo esc_html( the_content(), 'freethemeads'); ?></p>
                                
                                <a href="#">
                                    <div class="avatar-container pt-4">
                                        <div class="avatar-img">
                                            <img src="<?php echo get_template_directory_uri() ; ?>/asstes/images/avatar/arif.jpg" alt="avatar">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name"><?php esc_html(the_author(), 'freethemeads'); ?></h6>
                                            <span class="small fw-medium text-meuted"><?php echo esc_html(get_the_date(), 'freethemeads'); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="single_next_prev_post" style="display: flex; justify-content: space-around;">
                            <span style="text-align: left;"><?php previous_post_link('%link', '<i class="fa-solid fa-arrow-left"></i> Previous Post Link', 'mistri'); ?></span>
                            <span style="text-align: right;"><?php next_post_link('%link', 'Next Post Link <i class="fa-solid fa-arrow-right"></i>', 'mistri'); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    <div class="col-4">
                        <?php 
                        // showing sidebar 
                            if(is_active_sidebar('sidebar_1')){
                               dynamic_sidebar('sidebar_1');
                            }
                        
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php 
                        if(comments_open()){
                            comments_template();
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->



<?php get_footer(); ?>