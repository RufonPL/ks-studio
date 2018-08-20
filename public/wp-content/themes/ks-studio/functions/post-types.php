<?php

function create_post_type() {

    register_post_type('offer', // type name
        array('labels' =>
            array(
                'name' => __('Oferta'),
                'singular_name' => __('Oferta'),
                'add_new' => 'Dodaj ofertę',
                'add_new_item' => 'Dodaj nową ofertę',
                'not_found' => 'Brak ofert'
            ),
            'public' => true,
            'menu_position' => 5,
            'rewrite' => array('slug' => 'oferta'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-tickets-alt'
        )
    );
}
add_action('init','create_post_type');