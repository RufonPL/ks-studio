<?php
/**
 *
 * Assets helpers
 *
 */

function imgUrl($img)
{
    return get_template_directory_uri() . '/images/' . $img;
}

function imgTag($img, $css = "")
{
    return '<img ' . ($css ? 'class="' . $css . '" ' : '') . 'src="' . imgUrl($img) . '"/>';
}


add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});
