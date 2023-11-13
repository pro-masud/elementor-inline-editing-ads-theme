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
                            get_template_part("/post-formats/content", get_post_format());
                        } 
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-6">
                        <?php 
                             the_posts_pagination( array(
                                'title'              => '', // this should hide the title
                                'prev_text'          => __( 'Previous', 'free-theme-ads' ),
                                'next_text'          => __( 'Next', 'free-theme-ads' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'free-theme-ads' ) . ' </span>',
                            ) );
                        
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->

<?php get_footer(); ?>