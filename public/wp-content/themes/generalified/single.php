<?php

use function FakerPress\get;

 get_header();
global $post;
$author_ID = $post->post_author;
$author_url = get_author_posts_url($author_ID)

?>


<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">


        <div class="container clearfix">

            <!-- Post Content
          ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <?php if(have_posts()){
                    while(have_posts()){
                    the_post();
                    ?>
                <div class="single-post nobottommargin">

                    <!-- Single Post
              ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                  ============================================= -->
                        <div class="entry-title">
                            <h2><?php the_title();?></h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                  ============================================= -->
                        <ul class="entry-meta clearfix">
                            <?php echo get_the_date()?>
                            <li>
                                <a href="<?php $author_url?>">
                                    <?php the_author()?>
                                </a>
                            </li>
                            <?php the_category();?>
                            </li>
                            <li><?php comments_number('0')?></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                  ============================================= -->
                        <div class="entry-image">
                            <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail('full')?>"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                  ============================================= -->
                        <div class="entry-content notopmargin">
                            <?php the_content()?>
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                      ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                <?php the_tags('',' ')?>
                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->
                    <?php wp_link_pages()?>
                    <!-- Post Navigation
              ============================================= -->
                    <div class="post-navigation clearfix">

                        <div class="col_half nobottommargin">
                            <?php previous_post_link()?>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <?php next_post_link()?>
                        </div>

                    </div><!-- .post-navigation end -->

                    <div class="line"></div>

                    <!-- Post Author Info
              ============================================= -->
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                Posted by
                                <a href="<?php the_permalink()?>"><?php the_author()?></a>
                            </strong>
                        </div>
                        <div class="card-body">
                            <div class="author-image">
                                <?php get_avatar($author_ID)?>
                            </div>
                            <?php the_author_meta('description')?>
                        </div>
                    </div><!-- Post Single - Author End -->

                    <div class="line"></div>
                    <h4>Related Posts:</h4>
                    <?php  }

                    }?>

                    <?php 
                    
                            $categories = get_the_category();

                            $rp_query = new WP_Query([
                            'posts_per_page'    =>  2,
                            'post__not_in'     =>   [$post ->  ID  ],
                            'cat'               => !empty($categories)? $categories[0]->term_id : null
                        
                            ]);
                        
                        if($rp_query->have_posts()){
                            while($rp_query->have_posts()){
                                $rp_query->the_post();?>


                    <div class="related-posts clearfix">
                        <div class="mpost clearfix">
                            <div class="entry-image">
                                <a href="<?php the_permalink()?>">
                                    <?php the_post_thumbnail('thumbnail')?>
                                </a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <a href="<?php the_permalink()?>">
                                            <?php the_title()?>
                                        </a>
                                    </h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i><?php echo get_the_date()?></li>
                                    <li><i class="icon-comments"></i> <?php comments_number('0')?></li>
                                </ul>
                                <div class="entry-content">
                                    <?php the_excerpt()?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php      }
                        wp_reset_postdata();
                    } ?>





                    <?php if(comments_open() || get_comments_number() ){
                            comments_template();
                        }?>

                </div>


            </div><!-- .postcontent end -->

            <?php get_sidebar()?>

        </div>

    </div>

</section><!-- #content end -->
<?php get_footer()?>