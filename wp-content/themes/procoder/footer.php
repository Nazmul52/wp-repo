<?php
/**
 * Theme Footer Section
 * It will be visible on everypage
 */
?>

<footer id="footer_area">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <?php dynamic_sidebar( 'footer-1'); ?>
                </div>
                <div class="col-md-8">
                <?php dynamic_sidebar( 'footer-2'); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                <?php dynamic_sidebar( 'footer-3'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod( 'nazmul_copyright_section' ); ?></p>
                </div>
            </div>
        </div>
    </section>
</footer>

    <?php  wp_footer(); ?>
</body>
</html>