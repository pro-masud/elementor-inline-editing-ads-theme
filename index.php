<!-- include header file  -->
<?php get_header(); ?>

        <?php
            get_template_part('hero');
        ?>

        <!-- blog section start -->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
                <div class="row">
                    <?php 
                        while(have_posts()){
                            the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
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
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <?php echo get_the_tag_list('<ul><li class="d-inline-block mx-1 text-dark badge bg-primary-soft">', '</li><li class="d-inline-block mx-1 text-dark badge bg-primary-soft">', '<li></ul>');?>
                                    <?php 
                                        $post_formats = get_post_format();
                                        if($post_formats == 'aside'){
                                            echo '<span class="dashicons dashicons-format-aside"></span>';
                                        }else if($post_formats == 'audio'){
                                            echo '<span class="dashicons dashicons-format-audio"></span>';
                                        }else if($post_formats == 'chat'){
                                            echo '<span class="dashicons dashicons-format-chat"></span>';
                                        }else if($post_formats == 'gallery'){
                                            echo '<span class="dashicons dashicons-format-gallery"></span>';
                                        }else if($post_formats == 'image'){
                                            echo '<span class="dashicons dashicons-format-image"></span>';
                                        }else if($post_formats == 'quote'){
                                            echo '<span class="dashicons dashicons-format-quote"></span>';
                                        }else if($post_formats == 'link'){
                                            echo '<span class="dashicons dashicons-format-link"></span>';
                                        }else if($post_formats == 'status'){
                                            echo '<span class="dashicons dashicons-format-status"></span>';
                                        }else if($post_formats == 'video'){
                                            echo '<span class="dashicons dashicons-format-video"></span>';
                                        }
                                    ?>
                                </div>
                                <a href="<?php esc_attr(the_permalink(), 'freethemeads'); ?>">
                                    <h2 class="limit-2-line-text"><?php esc_html(the_title(), 'freethemeads'); ?></h2>
                                </a>
                                <?php
                                   the_excerpt();
                                
                                ?>
                                
                                
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

<?php get_footer(); ?>