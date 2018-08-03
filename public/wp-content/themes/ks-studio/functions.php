<?php

include __DIR__ . '/lib/boot.php';

include __DIR__ . '/functions/constants.php';
include __DIR__ . '/functions/app.php';
include __DIR__ . '/functions/post-types.php';
include __DIR__ . '/functions/nav-menus.php';

include __DIR__ . '/lib/Assets.php';

Assets()->register();



function pr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}