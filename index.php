<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ads
 */

get_header();
?>
    <!-- ADS hero section start -->
    <section class="hero-it-ads hero-nine-bg ptb-120" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                        <h1 class="fw-bold display-5">Bespoke Software Development Company</h1>
                        <p class="lead">
                            A results-driven software development agency with the skills and experience to help you achieve your goals. 
                        </p>
                        <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                            <a href="/contact" class="btn btn-primary me-3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img position-relative mt-5 mt-lg-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ADS hero section end -->



    <!-- ADS About section start -->
    <section class="about ptb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left text-lg-center mb-32 mb-lg-0">
                        <img class="img-fluid rounded-custom" src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- about right details start -->
                    <div class="about-right">
                        <h4 class="text-primary h5 mb-3">Why Chooose Us</h4>
                        <h2 class="mb-4">We Build Custom Softwares <br /> for Your Business</h2>
                        <p>Wafi Solutions, a software development company, serving clients to digitize businesses by focusing on client’s business challenges and providing business-goals-oriented software solutions. Our software engineers build innovative custom software for businesses and organizations around the world using our proven techniques, DevOps processes combined with rigorous checks and balances</p>
                        
                        <!-- team about list start -->
                        <ul class="list-unstyled about-lists list-two-col mt-4 mb-4">
                            <li class="py-1">
                                <div class="about-icon-box align-items-center">
                                    <div class="me-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pie-chart.png" alt="team">
                                    </div>
                                    <div>
                                        <h5>On-Demand Software Engineers</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="py-1">
                                <div class="about-icon-box align-items-center">
                                    <div class="me-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team.png" alt="team">
                                    </div>
                                    <div>
                                        <h5>Managed Remote Teams</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- team about list end -->

                        <!-- team about items start -->
                        <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                            <li><i class="fa-regular fa-circle-check me-2 text-primary"></i> End to End Application Development</li>
                            <li><i class="fa-regular fa-circle-check me-2 text-primary"></i> End to End Application Development</li>
                            <li><i class="fa-regular fa-circle-check me-2 text-primary"></i> End to End Application Development</li>
                            <li><i class="fa-regular fa-circle-check me-2 text-primary"></i> End to End Application Development</li>
                            <li><i class="fa-regular fa-circle-check me-2 text-primary"></i> End to End Application Development</li>
                            <li><i class="fa-regular fa-circle-check me-2 text-primary"></i> End to End Application Development</li>
                        </ul>
                        <!-- team about items end -->

                        <a href="#" class="link-with-icon text-decoration-none mt-3 btn btn-primary">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- about right details end -->
                </div>
            </div>
        </div>
    </section>
    <!-- ADS About section end -->


    <!-- ADS App Two Features section start -->
    <section class="section-icon bg-light ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <h2>Services We Provide</h2>
                        <p>Properly set processes. Transparent cooperation. Predictable delivery. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                        <div class="service-icon icon-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/1.png" alt="service">
                        </div>
                        <div class="service-info-wrap">
                            <h3 class="h5">Custom Software Development</h3>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="single-service p-lg-5 p-4 text-center mt-3  border-bottom border-end">
                        <div class="service-icon icon-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/2.png" alt="service">
                        </div>
                        <div class="service-info-wrap">
                            <h3 class="h5">Custom Software Development</h3>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom">
                        <div class="service-icon icon-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/3.png" alt="service">
                        </div>
                        <div class="service-info-wrap">
                            <h3 class="h5">Custom Software Development</h3>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="single-service p-lg-5 p-4 text-center border-end">
                        <div class="service-icon icon-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/4.png" alt="service">
                        </div>
                        <div class="service-info-wrap">
                            <h3 class="h5">Custom Software Development</h3>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="single-service p-lg-5 p-4 text-center border-end">
                        <div class="service-icon icon-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/5.png" alt="service">
                        </div>
                        <div class="service-info-wrap">
                            <h3 class="h5">Custom Software Development</h3>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="single-service p-lg-5 p-4 text-center">
                        <div class="service-icon icon-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/6.png" alt="service">
                        </div>
                        <div class="service-info-wrap">
                            <h3 class="h5">Custom Software Development</h3>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ADS App Two Features section end -->

    <!-- ADS integration section start -->
    <section class="integration-section ptb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3">
                    <div class="integration-list-wrap">
                        <a href="#" class="integration-1" data-toggle="tooltip" data-placement="top" title="Visual Studio">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/visual-studio.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-2" data-toggle="tooltip" data-placement="top" title="GitHub">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/github.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-3" data-toggle="tooltip" data-placement="top" title="Azure">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/azure.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-4" data-toggle="tooltip" data-placement="top" title="Docker">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/docker.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-5" data-toggle="tooltip" data-placement="top" title="Amazon Web Service">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/aws.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-6" data-toggle="tooltip" data-placement="top" title="Google Cloud">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/google-cloud.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="section-title text-center my-5 my-lg-0 my-xl-0">
                        <h5 class="h6 text-primary">Integration</h5>
                        <h2>Technologies, Tools and Platforms We Love To Work With</h2>
                        <a href="/our-services/" class="mt-4 btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="integration-list-wrap">
                        <a href="#" class="integration-7" data-toggle="tooltip" data-placement="top" title=".NET Core">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/net-core.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-8" data-toggle="tooltip" data-placement="top" title="Angular">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/angular.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-9" data-toggle="tooltip" data-placement="top" title="Node JS">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/node-js.png" alt="integration" class="img-fluid rounded-circle">
                        </a>

                        <a href="#" class="integration-10" data-toggle="tooltip" data-placement="top" title="React">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/react.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-11" data-toggle="tooltip" data-placement="top" title="Umbraco">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/umbraco.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a href="#" class="integration-12" data-toggle="tooltip" data-placement="top" title="ABP.IO">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integations/abp.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ADS integration section end -->

    <!-- ADS Home Testimonail Section start -->
    <section class="section-testimonial bg-light ptb-120 ptb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title text-center aos-init aos-animate" data-aos="fade-up" >
                        <h5>Testimonial</h5>
                        <h2>What’s Clients Say</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonials owl-carousel owl-theme aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                            <div class="single-testimonial p-4 mx-3">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat a labore sint natus nihil temporibus! Itaque ipsum dicta quidem blanditiis dolorum nisi quas nihil qui eius maxime sapiente facere molestias distinctio quia, inventore voluptate hic dolorem autem numquam. Amet, sint.</p>
                                <div class="author">
                                    <div class="author-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/author.jpg" alt="autor-photos" class="rounded-circle">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="m-0">Sohan Dharmaraja</h6>
                                        <span>Chief Technology Officer at Gradient</span>
                                        <ul class="review-rate mb-0 list-unsltyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial p-4 mx-3">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat a labore sint natus nihil temporibus! Itaque ipsum dicta quidem blanditiis dolorum nisi quas nihil qui eius maxime sapiente facere molestias distinctio quia, inventore voluptate hic dolorem autem numquam. Amet, sint.</p>
                                <div class="author">
                                    <div class="author-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/author.jpg" alt="autor-photos" class="rounded-circle">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="m-0">Sohan Dharmaraja</h6>
                                        <span>Chief Technology Officer at Gradient</span>
                                        <ul class="review-rate mb-0 list-unsltyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial p-4 mx-3">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat a labore sint natus nihil temporibus! Itaque ipsum dicta quidem blanditiis dolorum nisi quas nihil qui eius maxime sapiente facere molestias distinctio quia, inventore voluptate hic dolorem autem numquam. Amet, sint.</p>
                                <div class="author">
                                    <div class="author-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/author.jpg" alt="autor-photos" class="rounded-circle">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="m-0">Sohan Dharmaraja</h6>
                                        <span>Chief Technology Officer at Gradient</span>
                                        <ul class="review-rate mb-0 list-unsltyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial p-4 mx-3">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat a labore sint natus nihil temporibus! Itaque ipsum dicta quidem blanditiis dolorum nisi quas nihil qui eius maxime sapiente facere molestias distinctio quia, inventore voluptate hic dolorem autem numquam. Amet, sint.</p>
                                <div class="author">
                                    <div class="author-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/author.jpg" alt="autor-photos" class="rounded-circle">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="m-0">Sohan Dharmaraja</h6>
                                        <span>Chief Technology Officer at Gradient</span>
                                        <ul class="review-rate mb-0 list-unsltyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial p-4 mx-3">
                                <p>It was great to work with Wafi Solutions. They completed all our tasks very quickly and efficiently. Excellent communication, very easy to work with. They took our requirement and made it work perfectly. Arif and Rubayat were both very patient during the final review - much appreciated. Would not hesitate to work with them again.</p>
                                <div class="author">
                                    <div class="author-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/author.jpg" alt="autor-photos" class="rounded-circle">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="m-0">Sohan Dharmaraja</h6>
                                        <span>Chief Technology Officer at Gradient</span>
                                        <ul class="review-rate mb-0 list-unsltyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ADS Home Testimonail Section end -->


    <!-- ADS Brand Section start -->
    <section class="section-brand-post ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section-title text-center">
                        <h2>Over 50+ Companies Trusted Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="brand-logo-grid list-unstyled">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/a2ztech-logo.png" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/wafilife-logo.png" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/nexttech-logo.png" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/khaasfood-logo.png" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/novotech-logo.png" alt="brand logo" />
                    </li>
                </ul>
                <ul class="brand-logo-grid list-unstyled">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/sovolve-logo.jpg" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/anthology-logo.jpg" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/sean-logo.png" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/gemcon-logo.png" alt="brand logo" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/imobisoft-logo.png" alt="brand logo" />
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ADS Brand Section End -->



    <!-- ADS Latest Post Section Start -->
    <section class="section-latest-post bg-light ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section-title text-center">
                        <h2>Latest From Our Blog </h2>
                        <p>Thoughts, ideas, tips and news fresh from our innovation lab</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single post start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-article mb-4 mb-lg-0">
                        <a class="img-article" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post/1.jpg" alt="article" class="img-fluid">
                        </a>
                        <div class="article-content p-4">
                            <div class="article-category mb-4 d-block">
                                <a href="#" class="d-inline-block text-dark badge bg-primary-soft">Career</a>
                            </div>
                            <a href="#">
                                <h2 class="limit-2-line-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
                            </a>
                            <p class="limit-2-line-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, placeat consequatur cupiditate perspiciatis dolorem obcaecati eos expedita ratione alias voluptate.</p>
                            <a href="#">
                                <div class="avatar-container pt-4">
                                    <div class="avatar-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/arif.jpg" alt="avatar">
                                    </div>
                                    <div class="avatar-info">
                                        <h6 class="mb-0 avatar-name">Ariful Islam</h6>
                                        <span class="small fw-medium text-meuted">Aug 02, 2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single post start -->

                 <!-- single post start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="single-article mb-4 mb-lg-0">
                        <a class="img-article" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post/1.jpg" alt="article" class="img-fluid">
                        </a>
                        <div class="article-content p-4">
                            <div class="article-category mb-4 d-block">
                                <a href="#" class="d-inline-block text-dark badge bg-primary-soft">Career</a>
                            </div>
                            <a href="#">
                                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
                            </a>
                            <p class="limit-2-line-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, placeat consequatur cupiditate perspiciatis dolorem obcaecati eos expedita ratione alias voluptate.</p>
                            <a href="#">
                                <div class="avatar-container pt-4">
                                    <div class="avatar-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/arif.jpg" alt="avatar">
                                    </div>
                                    <div class="avatar-info">
                                        <h6 class="mb-0 avatar-name">Ariful Islam</h6>
                                        <span class="small fw-medium text-meuted">Aug 02, 2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single post start -->

                 <!-- single post start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="single-article mb-4 mb-lg-0">
                        <a class="img-article" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post/1.jpg" alt="article" class="img-fluid">
                        </a>
                        <div class="article-content p-4">
                            <div class="article-category mb-4 d-block">
                                <a href="#" class="d-inline-block text-dark badge bg-primary-soft">Career</a>
                            </div>
                            <a href="#">
                                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
                            </a>
                            <p class="limit-2-line-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, placeat consequatur cupiditate perspiciatis dolorem obcaecati eos expedita ratione alias voluptate.</p>
                            <a href="#">
                                <div class="avatar-container pt-4">
                                    <div class="avatar-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/arif.jpg" alt="avatar">
                                    </div>
                                    <div class="avatar-info">
                                        <h6 class="mb-0 avatar-name">Ariful Islam</h6>
                                        <span class="small fw-medium text-meuted">Aug 02, 2023</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single post start -->
            </div>
            <div class="row justify-content-center">
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary">View All Article</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ADS Latest Post Section End -->


 
	

<?php
get_footer();