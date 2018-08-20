<?php
$portfolio_header = get_field('offer_top_header');
$portfolio_subheader = get_field('offer_header');

$offers = get_posts(array(
    'post_type' => 'offer',
    'post_status' => 'publish',
    'posts_per_page' => -1
));

?>

<div class="container-fluid portfolio">
    <div class="row portfolio-row-header">
        <div class="col-12">
            <h5 class="section--header section-header__white"><?= $portfolio_header ?></h5>
            <h2 class="section--box-outline color-white highlight-dark">
                03 <span class="sep sep__white"></span> <?= $portfolio_subheader ?>
            </h2>
        </div>
    </div>
    <div class="row portfolio-gallery">
        <?php foreach ($offers as $offer):
            $offer_id = $offer->ID;
            $offer_title = $offer->post_title;
            $offer_desc = get_field('short_description', $offer_id);
            $offer_url = get_permalink($offer_id);
            $offer_thumb = get_the_post_thumbnail_url($offer_id, 'img_450x450');
            ?>
            <div class="col-12 col-md-6 col-lg-3 portfolio-gallery-item" style="background-image: url(<?= $offer_thumb ?>)">
                <div class="portfolio-gallery-item-content">
                    <h5><?= $offer_title ?></h5>
                    <p><?= $offer_desc ?></p>
                    <a class="btn btn-default" href="<?= $offer_url ?>">
                        ZOBACZ WIĘCEJ
                    </a>
                </div>
            </div>
        <?php endforeach; ?>


        <?php
        // this is to fill other thumbstones with placeholders - to be deleted when they are filled
        for ($i = count($offers); $i < 8; $i++): ?>
            <div class="col-12 col-md-6 col-lg-3 portfolio-gallery-item" style="background-image: url(https://via.placeholder.com/450x450)">
                <div class="portfolio-gallery-item-content">
                    <h5>
                        <?= 'gallery item ' . $i ?>
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, deserunt natus placeat quibusdam veniam voluptatem?
                    </p>
                    <a class="btn btn-default">
                        ZOBACZ WIĘCEJ
                    </a>
                </div>
            </div>
        <?php endfor; ?>


    </div>
<!--    <div class="row portfolio-seemore-row">-->
<!--        <div class="col-12 portfolio-seemore">-->
<!--            <a href="">-->
<!--                ZOBACZ WIĘCEJ-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
</div>