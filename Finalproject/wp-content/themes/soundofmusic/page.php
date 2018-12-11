<?php get_header(); ?>
<main>
        <h1>DEFAULT PAGE</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
        </div>
        <?php endwhile; else: ?>
        <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
        <?php endif; ?>

</main>
<?php get_footer(); ?>