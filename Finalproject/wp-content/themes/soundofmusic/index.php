<?php get_header(); ?>
<main id="faded">
        <h1>BLOG ALL POSTS</h1>

        <div class="flexme flex-sidebar">
                <article>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="post all">
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_post_thumbnail(); ?>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>">Read More...</a>
                                </div>
                        <?php endwhile; else: ?>
                        <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
                        <?php endif; ?>
                </article>
                <?php get_sidebar(); ?>
        </div>

</main>
<?php get_footer(); ?>