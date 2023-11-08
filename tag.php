<!-- include header file  -->
<?php get_header(); ?>

        <?php
            get_template_part('hero');
        ?>

        <!-- blog section start -->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
                <div class="row">
                    
                
               <h1> This is a Current Tag Name:<?php single_tag_title(); ?></h1>
                </div>
                <div class="row">
                    <?php 
                        while(have_posts()){
                            the_post();

                           ?>
                           <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                           <?php 
                        } 
                    ?>
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