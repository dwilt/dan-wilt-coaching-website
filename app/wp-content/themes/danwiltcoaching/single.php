<?php get_header(); ?>

<main>
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section class="blog__container">
                <article class="post">
                    <h1 class="post__title"><?php the_title(); ?></h1>
                    <p class="post__date"><?php echo get_the_date('F j, Y'); ?></p>
                    <div class="clearfix">
                        <div class="post-content"><?php the_content(); ?></div>
                    </div>
                </article>
                <?php wp_reset_query(); ?>
            </section>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>