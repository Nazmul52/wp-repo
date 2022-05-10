<?php
// The template for displaying Search results
    get_header();
?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="search_title">
                        <h1 class="title">
                        <?php
                          printf( __( 'Search results for: %s', 'nazmul'),
                          get_search_query());
                          ?>
                        </h1>
                        
                    </div>
                    <?php get_template_part( 'template/blog_setup' )?>
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