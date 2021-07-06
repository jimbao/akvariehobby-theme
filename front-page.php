<?php get_header();?>

<div id="primary" class="site-content">
    <div id="content" role="main">
        <div class="front-page container">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
            
        </div>
    </div>
</div>

<?php get_footer();?>
