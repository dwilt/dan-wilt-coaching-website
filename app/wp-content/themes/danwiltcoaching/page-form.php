<?php
 /*
Template Name: Form
*/
get_header();
?>
<main class="page-form">
    <div class="container">
        <?php
        $form_hero_title = get_field('form_hero_title');
        $form_hero_description = get_field('form_hero_description');
        if($form_hero_title) :
        ?>
        <h1 class="form__title"><?php echo $form_hero_title; ?></h1>
        <?php endif; ?>
        <?php if($form_hero_description) : ?>
        <p class="form__description"><?php echo $form_hero_description; ?></p>
        <?php endif; ?>
        <div class="entry-content"><?php the_content(); ?></div>
    </div>
</main>
<?php get_footer(); ?>