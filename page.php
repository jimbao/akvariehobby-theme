<?php get_header();?>

<div id="primary" class="site-content">
    <div id="content" role="main">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>
            
        </div>
    </div><!-- #content -->
    <?php get_sidebar( 'primary' ); ?>
</div><!-- #primary -->

<?php get_footer();?>
