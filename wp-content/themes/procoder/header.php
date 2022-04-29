<?php

/*
* This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<? language_attributes()?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><? site_title()?></title> -->
    <?php  wp_head(); ?>
</head>
<body>
    <!-- <?php body_class(); ?> -->
    <header id="header_area" class="<?php echo get_theme_mod( 'nazmul_menu_position' ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo  home_url(); ?>"><img src="<?php echo get_theme_mod( 'nazmul_logo' );?>" alt="test"/></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav'))?>
                </div>
            </div>
        </div>
    </header>