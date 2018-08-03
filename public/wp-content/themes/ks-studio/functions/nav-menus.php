<?php


function register_menus() {
    $args = array(
        'Main Menu' => __( 'Main Menu' )
    );
    register_nav_menus( $args );
}
add_action( 'init', 'register_menus' );


