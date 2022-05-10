<?php
// The template for displaying 404 page (not found)
    get_header();
?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 error_page">
                    <p> 404 Error - Page not Found</p>
                    <p>Oops! Looks like someting was wrong.</p>
                    <div class="error_search">
                        <?php get_search_form()?>
                    </div>
                    <a href="<?php echo home_url()?>" class="homepage">Home Page</a>
                </div>
            </div>
        </div>
    </section>

<?php
// The main template footer file
    get_footer();
?>