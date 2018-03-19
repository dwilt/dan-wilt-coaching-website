        <footer class="footer">
            <div class="container">
                <p class="copyright">&copy; <?php echo date("Y"); ?> Dan Wilt Coaching</p>
                <div class="footer__inner">
                    <a href="mailto:info@danwiltcoaching.com" class="email__link">info@danwiltcoaching.com</a>
                    <?php if( have_rows('social_media', 'option') ): ?>
                    <div class="social-media">
                        <?php while( have_rows('social_media', 'option') ): the_row();
                            $site = get_sub_field('site');
                            $link = get_sub_field('link');
                        ?>
                        <a href="<?php echo $link; ?>" class="social-media-link social-media-<?php echo $site; ?>" target="_blank">
                            <span class="accessible-text"><?php echo $site; ?></span>
                        </a>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-XXXXXX-X', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>