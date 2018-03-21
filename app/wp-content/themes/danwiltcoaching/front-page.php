<?php
 /*
Template Name: Home
*/
get_header(); ?>
<main>
    <section class="hero">
        <div class="container">
            <div class="hero__outer">
                <h1 class="hero__title">Take Your Javascript Skills To The Next Level & Master App Development</h1>
                <p class="hero__subtitle">Coaching For Front-End Developers</p>
                <div class="entry-content">
                    <p>Dan Wilt is an experienced front-end developer and Javascript enthusiast who works with developers and agency development teams looking to advance their Javascript skills and master mobile app development.</p>
                    <p>His coaching, training and online courses cut through the fluff and offer a customized approach to learning exactly what you need to know, so you can level up even faster.</p>
                </div>
                <a href="#cta" class="btn">Learn More</a>
            </div>
            <div class="hero__img-container">
                <img src="<?php echo IMAGES; ?>/app.svg" alt="" class="hero__img">
                <a href="#cta" class="hero__link">
                    <span class="accessible-text">Learn more about building mobile apps.</span>
                </a>
            </div>
        </div>
    </section>

    <section class="cta" id="cta">
        <div class="container">
            <div class="cta__img-container">
                <img src="<?php echo IMAGES; ?>/laptop.svg" alt="Start developing mobile apps" class="cta__img">
            </div>
            <div class="cta__content">
                <h2 class="cta__title">Do You Have What It Takes To Start Developing Mobile Apps?</h2>
                <div class="entry-content">
                    <ul>
                        <li>Free Javascript strengths assessment</li>
                        <li>Custom training recommendations</li>
                        <li>15-minute follow up coaching call</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>quiz" class="btn btn--large">Take the Quiz</a>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="service">
                <div class="service__img-container">
                    <img src="<?php echo IMAGES; ?>/headset.svg" alt="1-on-1 coaching" class="service__img">
                </div>
                <div class="service__container">
                    <h2 class="service__title">Want 1-on-1 coaching & training that’s tailored to your needs?</h2>
                    <p class="service__description">As your coach, I’ll learn where you’re stuck and tailor the training experience to your needs and goals. This is the fast-track to advance your skills, since we’ll only spend time covering exactly what you need to know.</p>
                    <div class="service__link-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>work-with-me" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service__img-container">
                    <img src="<?php echo IMAGES; ?>/code.svg" alt="develop mobile apps" class="service__img">
                </div>
                <div class="service__container">
                    <h2 class="service__title">Ready to learn to develop mobile apps using React Native?</h2>
                    <p class="service__description">My new course will teach you [main takeaway for course participants], so that [benefit of learning this]. Enrollment opens soon. Click below to learn more and get on the waitlist.</p>
                    <div class="service__link-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>courses" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service__img-container">
                    <img src="<?php echo IMAGES; ?>/present.svg" alt="group training" class="service__img">
                </div>
                <div class="service__container">
                    <h2 class="service__title">Interested in group training for your agency’s development team?</h2>
                    <p class="service__description">I offer front-end development group trainings, customized to fit your team’s needs and current skillset. I’ll also adapt my approach based on your agency’s goals so that your team will be ready to tackle more complex client projects.</p>
                    <div class="service__link-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>work-with-me" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="testimonials__container">
                <h2 class="testimonials__title">What are people saying?</h2>
                <div class="testimonials__slider-container">
                    <div class="testimonials__slider">
                        <div>
                            <p class="testimonial">“Dan is capable of teaching developers of all experience levels. He has the unique ability to simplify and clearly explain complex coding concepts. He has a passion for teaching code that makes you excited to learn more. He’s able to boil down key lessons that he learned throughout his years of experience and deliver them in a clear, logical way. a fast lane to best practices.”</p>
                            <div class="testimonial__author-container">
                                <div class="testimonial__author">
                                    <img src="<?php echo IMAGES; ?>/jake-repash-sm.png" alt="Jake R" class="testimonial__author-img">
                                    <p class="testimonial__author-name">Jake R</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="testimonial">“I would recommend Dan for two reasons: (1) He’s a great developer and (2) a great teacher. On the developer side, he’s extremely knowledgeable about JavaScript and all things related to building apps. On the teacher side, he’s patient and has a good way of explaining things and filling in the gaps.”</p>
                            <div class="testimonial__author-container">
                                <div class="testimonial__author">
                                    <img src="<?php echo IMAGES; ?>/joe.png" alt="Jake R" class="testimonial__author-img">
                                    <p class="testimonial__author-name">Joe Y</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="testimonial">“Dan gave me a solid foundation for best practices, which I’ve found to be extremely valuable. A lot of developers don’t code with best practices and therefore it can be hard to distinguish between what’s good and bad if you’re a beginner and don’t know any better.”</p>
                            <div class="testimonial__author-container">
                                <div class="testimonial__author">
                                    <img src="<?php echo IMAGES; ?>/jake-repash-sm.png" alt="Jake R" class="testimonial__author-img">
                                    <p class="testimonial__author-name">Amie W</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="about__img-container">
                <img src="<?php echo IMAGES; ?>/dan.png" alt="Dan Wilt" class="about__img">
            </div>
            <div class="about__content">
                <h2 class="about__title">Hi, I’m Dan.</h2>
                <div class="entry-content">
                    <p>I’ve experienced, first hand, how understanding the foundations of Javascript opens up new opportunities for front-end developers. This is exactly why I’m passionate about coaching and training other developers who want to get “unstuck” and master Javascript so they can start building web and mobile apps.</p>
                    <p>I love teaching a student something complex that they are struggling with and seeing them achieve that “Aha” moment when it finally clicks.</p>
                    <p>I know this stuff can be tough and overwhelming to learn; I had to put in a lot of time figuring it out and overcoming the roadblocks. But that process helped me realize what’s essential when it comes to mastering the fundamentals of Javascript to start developing mobile apps.</p>
                </div>
                <div class="experience">
                    <div class="experience__logo-container">
                        <img src="<?php echo IMAGES; ?>/walmart.svg" alt="Walmart" class="experience__logo">
                    </div>
                    <div class="experience__logo-container">
                        <img src="<?php echo IMAGES; ?>/expedia.svg" alt="Expedia" class="experience__logo">
                    </div>
                    <div class="experience__logo-container">
                        <img src="<?php echo IMAGES; ?>/amazon-logo.svg" alt="Amazon" class="experience__logo">
                    </div>
                </div>
                <div class="entry-content">
                    <p>Now, I’m sharing that essential information through my coaching, training and online courses.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta__hire">
        <div class="container">
            <h2 class="cta__hire-title">Interested in hiring me?</h2>
            <p class="cta__hire-description">I’m excited to see how I can help you (or your team) master Javascript and app development.</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">Contact Me</a>
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