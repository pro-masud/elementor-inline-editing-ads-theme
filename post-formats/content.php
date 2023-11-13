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
                                </div>
                                <a href="<?php esc_attr(the_permalink(), 'free-theme-ads'); ?>">
                                    <h2 class="limit-2-line-text"><?php esc_html(the_title(), 'free-theme-ads'); ?></h2>
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
                                            <h6 class="mb-0 avatar-name"><?php esc_html(the_author(), 'free-theme-ads'); ?></h6>
                                            <span class="small fw-medium text-meuted"><?php echo esc_html(get_the_date(), 'free-theme-ads'); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>