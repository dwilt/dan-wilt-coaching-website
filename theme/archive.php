<?php get_header();
global $paged; ?>
<main id="main">
    <div class="blog__page">
        <div class="outer-container">
            <div class="container">
                <section class="blog__container">
                    <div class="blog__inner">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php $post_excerpt = get_field('post_excerpt'); ?>
                        <article class="post">
                            <a class="post__link" href="<?php the_permalink(); ?>">
                                <div class="post__image">
                                    <?php the_post_thumbnail('blog'); ?>
                                </div>
                                <p class="post__date"><?php echo get_the_date('M j'); ?></p>
                                <h1 class="post__title"><?php the_title(); ?></h1>
                            </a>
                        </article>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php $max_num_pages = $wp_query->max_num_pages;
                    if ($max_num_pages > 1): ?>
                    <?php jsd_pagination($max_num_pages, $wp_query->found_posts, $paged == 0 ? 1 : $paged); ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </section>
            </div>
            <?php include('modules/flex-content/flex-content.php') ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>