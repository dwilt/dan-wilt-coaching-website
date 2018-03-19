<?php
 /*
Template Name: Courses
*/
get_header();
?>
<main class="page-courses">
    <h1 class="accessible-text">Courses</h1>
    <div class="container">
        <h2 class="courses__title">Are you interested in learning to build mobile apps with React Native?</h2>
        <p class="courses__description">Sign Up to Get Notified When Dan’s Course Opens For Enrollment!</p>
        <div class="courses__form">
            <?php echo do_shortcode('[mc4wp_form id="16"]'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>