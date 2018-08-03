<?php
/**
 *
 * General wordpress project customization
 *
 */

// image sizes
add_theme_support('post-thumbnails');
add_image_size('slider',1920,800,true);
add_image_size('img_1920x350',1920,350,true);
add_image_size('img_550x400',550,400,true);
add_image_size('img_450x450',450,450,true);
add_image_size('img_350x350',350,350,true);
add_image_size('img_200x150',200,150,false);
add_image_size('img_180x80',180,80,true);
add_image_size('img_60x60',60,60,true);

// admin bar customization

//add_filter('show_admin_bar', '__return_false'); // hide admin bar on pages

function remove_menus(){

    //remove_menu_page( 'index.php' );                  //Dashboard
    //remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    //remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'remove_menus' );

// template parts including

function renderTemplate($template) {
    include(locate_template($template));
}

// media library svg support

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg_thumb_display() {
    echo '
    <style>
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    
    }
    </style>
  ';
}
add_action('admin_head', 'fix_svg_thumb_display');