<?php
get_header();

$gallery = get_field('offer_gallery');

?>

<div class="container single-offer">
    <div class="row">
        <div class="col-12 single-offer-header">
            <h1><?= the_title();?></h1>
        </div>
        <div class="col-12 single-offer-content">
            <?= wpautop(get_post_field('post_content', $post->ID), true); ?>
        </div>
        <div class="col-12 single-offer-gallery">
            <div class="row">
            <?php if (!empty($gallery)):
                foreach ($gallery as $image):
                    $image_url = isset($image['sizes']['img_450x450']) ? $image['sizes']['img_450x450'] : '' ; ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-offer-gallery-item" style="background-image: url(<?= $image_url ?>);">

                        </div>
                    </div>
                <?php endforeach;
            endif;?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>