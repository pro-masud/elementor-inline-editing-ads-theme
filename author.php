<!-- include header file  -->
<?php get_header(); ?>

<div class="container">
    <!-- blog section start -->
    <section class="masonary-blog-section ptb-120">
        <div class="container">
            <div class="row">
                <a href="#">
                    <div class="avatar-container pt-4">
                        <div class="avatar-img">
                            <?php 
                                // author information
                                $authorImage = wp_get_current_user();
                                if($authorImage){
                                ?>
                                    <img src="<?php echo get_avatar_url( $authorImage -> ID ); ?>" alt="avatar"> 
                            <?php 
                                }
                            ?>
                        </div>
                        <div class="avatar-info">
                            <h6 class="mb-0 avatar-name"><?php echo esc_html(the_author_posts_link(), 'freethemeads'); ?></h6>
                            <span class="small fw-medium text-meuted"><?php echo esc_html(get_the_date(), 'freethemeads'); ?></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- blog section end -->
</div>

<?php get_footer(); ?>