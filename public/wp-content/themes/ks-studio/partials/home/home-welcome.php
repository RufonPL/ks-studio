<?php
$welcome_top_header = get_field('welcome_top_header');
$welcome_header = get_field('welcome_header');
$welcome_copy = get_field('welcome_copy');
$welcome_image = isset(get_field('welcome_image')['sizes']['slider']) ? get_field('welcome_image')['sizes']['slider'] : '';
$welcome_url = get_field('welcome_url');
$welcome_cta = get_field('welcome_cta'); ?>

<div class="container welcome">
    <div class="row">
        <div class="col-12 col-md-8 welcome-content">
            <h5 class="section--header"><?= $welcome_top_header ?></h5>
            <h2 class="section--box-outline outline__grey">
                01 <span class="sep"></span> <?= $welcome_header ?>
            </h2>
            <p class="welcome-content-copy">
                <?= $welcome_copy ?>
            </p>
            <a class="btn-arrow" href="#">
                <?= $welcome_cta; ?><i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
        <div class="col-12 col-md-4 welcome-side">
            <img src="<?= $welcome_image ?>" alt="">
        </div>
    </div>
</div>