<?php
 /*
Template Name: Work With Me
*/
get_header();
?>
<main>
    <h1 class="accessible-text"><?php the_title(); ?></h1>
    <section class="hero__training">
        <div class="container">
            <h2 class="hero__training-title">What type of training are you interested in?</h2>
            <p class="hero__training-description">We offer a variety of training and coaching options on an individual level and to large groups. Choose the option below that best suits your needs and we’ll tell you a little more about it.</p>
            <div class="hero__training-inner">
                <a href="#1-on-1-training" class="hero__training-link">
                    <div class="hero__training-img">
                        <?php echo file_get_contents(IMAGES_SERVER . '/headset.svg'); ?>
                    </div>
                    Training for myself
                </a>
                <a href="#quick-fix-coaching" class="hero__training-link">
                    <div class="hero__training-img">
                        <?php echo file_get_contents(IMAGES_SERVER . '/code.svg'); ?>
                    </div>
                    Just a quick fix
                </a>
                <a href="#training-consulting-for-agency-dev-teams" class="hero__training-link">
                    <div class="hero__training-img">
                        <?php echo file_get_contents(IMAGES_SERVER . '/presentation.svg'); ?>
                    </div>
                    Training for my team
                </a>
            </div>
        </div>
    </section>
    <section class="trainingOptions">
        <div class="trainingOption" id="1-on-1-training">
            <div class="container">
                <div class="trainingOption__img-container">
                    <?php echo file_get_contents(IMAGES_SERVER . '/headset.svg'); ?>
                </div>
                <div class="trainingOption__container">
                    <h2 class="trainingOption__title">Customized 1-on-1 Training</h2>
                    <p class="trainingOption__description">Get development training tailored to your needs and skills, delivered to you in effective, 1-hour, coaching-style sessions.</p>
                    <h3 class="trainingOption__subtitle">Details</h3>
                    <ul class="trainingOption__list">
                        <li>1-on-1, hourly sessions via video call</li>
                        <li>Trainings are tailored to your skill level, experience and needs.</li>
                        <li>No required multiple-session commitments; you can book as needed and I’ll be here to help</li>
                    </ul>
                    <p class="trainingOption__price">$60/hr</p>
                    <div class="trainingOption__link-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Book a Training Call</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="trainingOption" id="quick-fix-coaching">
            <div class="container">
                <div class="trainingOption__img-container">
                    <?php echo file_get_contents(IMAGES_SERVER . '/code.svg'); ?>
                </div>
                <div class="trainingOption__container">
                    <h2 class="trainingOption__title">Quick Fix Coaching</h2>
                    <p class="trainingOption__description">If you’re working on a project and hit a roadblock, my quick-fix coaching sessions are designed to help you move past that obstacle -- while giving you a more comprehensive understanding of Javascript fundamentals in the process.</p>
                    <h3 class="trainingOption__subtitle">Details</h3>
                    <ul class="trainingOption__list">
                        <li>1-on-1, hourly sessions via video call</li>
                        <li>Coaching to help you get past the roadblock and increase your  understanding Javascript.</li>
                        <li>No required multiple-session commitments; you can book as needed and I’ll be here to help.</li>
                    </ul>
                    <p class="trainingOption__price">$60/hr</p>
                    <div class="trainingOption__link-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Book a Coaching Call</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="trainingOption" id="training-consulting-for-agency-dev-teams">
            <div class="container">
                <div class="trainingOption__img-container">
                    <?php echo file_get_contents(IMAGES_SERVER . '/presentation.svg'); ?>
                </div>
                <div class="trainingOption__container">
                    <h2 class="trainingOption__title">Training & Consulting For Agency Dev Teams</h2>
                    <p class="trainingOption__description">Get group training and consulting tailored to your development team’s needs and skills. To learn more, click below and complete a quick form so I can learn more about your agency’s training and consulting needs.</p>
                    <h3 class="trainingOption__subtitle">Details</h3>
                    <ul class="trainingOption__list">
                        <li>Onsite, in-person team training sessions</li>
                        <li>Customized lessons and exercises to help your dev team master JavaScript fundamentals they need to complete existing and future agency projects</li>
                        <li>Flexible timeline to ensure your team learns what they need to know</li>
                    </ul>
                    <p class="trainingOption__price">Price is variable based on your agency’s needs. Book a call to learn more!</p>
                    <div class="trainingOption__link-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Book a Call</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta__quiz">
        <div class="container">
            <div class="cta__quiz-inner">
                <h2 class="cta__quiz-title">Take the Assessment</h2>
                <p class="cta__quiz-description">Take the FREE Javascript strengths assessment to discover exactly how you can improve your skills to start successfully developing apps.</p>
            </div>
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>quiz" class="btn">Take the Quiz</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>