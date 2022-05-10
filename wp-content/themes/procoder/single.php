<?php
// This template for displaying pages
    get_header();
?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php get_template_part( 'template/post_setup' )?>
                    <div id="comments_area">
                        <?php comments_template()?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar()?>
                </div>
            </div>
        </div>
    </section>

<?php
// The main template footer file
    get_footer();
?>