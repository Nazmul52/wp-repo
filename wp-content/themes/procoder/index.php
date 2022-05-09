<?php
// The main template header file
    get_header();
?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                        if(have_posts()):
                            while(have_posts()): the_post();
                    ?>
                    <div class="blog_area">
                        <div class="post_thumb">

                            <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                        </div>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                        </div>
                        <?php the_excerpt(  )?>
                    </div>
                    <?php
                            endwhile;
                    else:
                        _e('No post found.');
                    endif;
                    ?>
                    <div id="page_nav">
                        <?php if('nazmul_pagenav') {nazmul_pagenav();} else {?>
                            <?php next_posts_link();?>
                            <?php previous_post_link();?>

                        <?php } ?>
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