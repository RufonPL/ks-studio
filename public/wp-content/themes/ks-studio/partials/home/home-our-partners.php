<?php if (have_rows('repeater_partners')):
    $partners_top_header = get_field('partners_top_header');
    $partners_header = get_field('partners_header'); ?>

    <div class="container our-partners">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h5 class="section--header"><?= $partners_top_header ?></h5>
                <h2 class="section--box-outline">
                    06 <span class="sep"></span> <?= $partners_header ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php while (have_rows('repeater_partners')) : the_row();
                $partner_logo = isset(get_sub_field('parters_logo')['sizes']['img_200x150']) ? get_sub_field('parters_logo')['sizes']['img_200x150'] : ''; ?>
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="our-partner-item">
                        <img src="<?= $partner_logo ?>" alt="" style="max-width: 100%;">
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>