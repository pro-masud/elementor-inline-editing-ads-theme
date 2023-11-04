<!-- include header file  -->
<?php get_header(); ?>

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
                        <div  <?php post_class('single-article mb-4 mb-lg-4'); ?>>
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