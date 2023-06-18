<?php get_header();
/*
*Template Name: Full page Template
*/

?>
<!-- Page Title
        ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title() ?> </h1>
        <span>
            <?if(function_exists('the_subtitle')){
            //  the_subtitle();

            }
    
    
    ?>
        </span>
    </div>
</section><!-- #page-title end -->

<!-- Content
    ============================================= -->
<section id="content">




    <div class="container clearfix">

        <!-- Post Content
          ============================================= -->
        <div class="postcontent nobottommargin clearfix">

            <?php if(have_posts()){
                    while(have_posts()){
                    the_post();
                    }
            
                    }?>
            <div class="single-post nobottommargin">

                <!-- Single Post
              ============================================= -->
                <div class="entry clearfix">

                    <!-- Entry Title
                  ============================================= -->
                    <div class="entry-title">
                        <h2><?php the_title();?></h2>
                    </div><!-- .entry-title end -->


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



                        <div class="clear"></div>

                    </div>
                </div><!-- .entry end -->



                <?php if(comments_open() || get_comments_number() ){
                            comments_template();
                        }?>

            </div>


        </div><!-- .postcontent end -->



    </div>



</section><!-- #content end -->
<?php get_footer()?>