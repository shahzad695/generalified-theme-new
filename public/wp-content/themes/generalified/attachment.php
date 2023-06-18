<?php get_header()?>


<div class="entry clearfix">

    <!-- Entry Title
                  ============================================= -->
    <div class="entry-title">
        <h2><?php the_title();?></h2>
    </div><!-- .entry-title end -->


    <!-- Entry Content
                  ============================================= -->
    <div class="entry-content notopmargin">
        <a href="<?php echo $post->guid?>">Download Attachment</a>

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

<?php get_sidebar()?>

</div>

</div>

</section><!-- #content end -->
<?php get_footer()?>