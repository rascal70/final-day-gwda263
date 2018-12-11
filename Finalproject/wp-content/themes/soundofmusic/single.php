<?php get_header(); ?>
<main>
        <h1>BLOG Single</h1>

        <div class="flexme flex-sidebar">
                <article>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="post single">
                                        <a href="/blog">back to all posts</a>
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_post_thumbnail(); ?>
                                        <?php the_content(); ?>
                                </div>
                        <?php endwhile; else: ?>
                        <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
                        <?php endif; ?>
                </article>
                <aside>
                        <h2>Sidebar Goes Here.</h2>
                </aside>
        </div>

</main>
<?php get_footer(); ?>