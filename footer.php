<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ads
 */

?>

   <!-- footer section start -->

   <footer class="footer-section">
        <!-- footer section top start -->
        <div class="footer-top  bg-gradient text-white ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                        <div class="footer-single-col">
                            <div class="footer-single-col mb-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-white.png" alt="logo" class="img-fluid logo-white">
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
                                <li class="list-inline-item"><a href=#"><i class="fab fa-facebook-f"></i></a></li>
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


    <!-- Bootstrap js main file -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

    <!-- Bootstrap js main file -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- AOS-main-JS-file -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>

     <!-- magnific-popup-js-file -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>

     <!-- owl carousel main js file -->
     <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

    <!-- Custom JavaScript File -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>


