<div>
<?php 
get_header();
?>
    <div class="title">
        <h1>Have A Read!</h1>
    </div>
    <article>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <?php the_date(); ?>
                </div>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
else :
        ?>
        <p><?php esc_html_e('No posts found.', ''); ?></p>
    <?php endif; ?>

<?php 
get_footer()
?>
</div>
