<?php
$ourservices_top_header = get_field('ourservices_top_header');
$ourservices_header = get_field('ourservices_header');
$ourservices_image = isset(get_field('ourservices_image')['sizes']['img_850x850']) ? get_field('ourservices_image')['sizes']['img_850x850'] : '';


?>
<div class="container-fluid our-services">
    <div class="row">
        <div class="col-12 col-lg-5 our-services-side" style="background-image: url(<?= $ourservices_image ?>)">

        </div>
        <div class="col-12 col-lg-7 our-services-content">
            <h5 class="section--header"><?= $ourservices_top_header ?></h5>
            <h2 class="section--box-outline color-white highlight-primary">
                02 <span class="sep sep__grey"></span> <?= $ourservices_header ?>
            </h2>
            <div class="row our-services-list">
                <?php if (have_rows('repeater_ourservices')):
                    while (have_rows('repeater_ourservices')) : the_row();

                        $service_header = get_sub_field('service_header');
                        $service_copy = get_sub_field('service_copy');
                        $service_image = isset(get_sub_field('service_image')['sizes']['img_100x100']) ? get_sub_field('service_image')['sizes']['img_100x100'] : '';

                        ?>
                        <div class="col-8 our-services-list-row">
                            <img class="our-services-list-image" src="<?= $service_image ?>" alt="">
                            <div class="our-services-list-desc">
                                <h4 class="our-services-list-desc-header">
                                    <?= $service_header ?>
                                </h4>
                                <p class="our-services-list-desc-content">
                                    <?= $service_copy ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</div>