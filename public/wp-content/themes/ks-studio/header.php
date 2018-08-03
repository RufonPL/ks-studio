<?php

// echo imgUrl('arrow-right.png');

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"                content="<?php the_permalink(); ?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="<?php the_title(); ?>" />
    <meta property="og:image"              content="" />
    <meta property="og:description"        content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>

<div class="onload"
     style="background-color: #fff; position: fixed; display: block; width: 100vw; height: 100vh; z-index: 3000;">
</div>

<?php renderTemplate('modules/top-navbar.php'); ?>