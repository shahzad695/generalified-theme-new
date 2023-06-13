<div class="entry clearfix">
    <div class="entry-image">
        <a href="<?php the_permalink()?>">
            <?php the_post_thumbnail('full', ['class' =>'image-fade'])?>
        </a>
    </div>
    <div class="entry-title">
        <h2>
            <a href="<?php the_permalink()?>">
                <?php the_title()?>
            </a>
        </h2>
    </div>
    <ul class="entry-meta clearfix">
        <li><?php echo get_the_date()?></li>
        <li>
            <a href="<?php get_author_posts_url(get_the_author_meta('ID'))?>">
                <i class="icon-user"></i>
                <?the_author()?>
            </a>
        </li>
        <li>
            <i class="icon-folder-open"></i>
            <?php the_category(' ')?>
        </li>
        <li>
            <a href="#">
                <i class="icon-comments"></i>
                <? comments_number('0')?>
            </a>
        </li>
    </ul>
    <div class="entry-content">
        <p>
            <?php the_excerpt()?>
        </p>
        <a href="<?php the_post_thumbnail()?>">Read More</a>
    </div>
</div>