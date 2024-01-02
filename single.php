<?php get_header(); ?>
<div>
    <?php 
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <h5><?php the_date();?></h5>
            <div><?php the_content(); ?></div>
        <?php endwhile;
    else : ?>
        <h3>No posts found</h3>
    <?php endif; ?>
</div>
