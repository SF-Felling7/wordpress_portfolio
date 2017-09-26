<?php

function my_own_styles() {


    wp_enqueue_style( 'portfolio_theme', get_template_directory_uri() . '/css/portfolio.css' );

}

add_action( 'wp_enqueue_scripts', 'my_own_styles');

 ?>
