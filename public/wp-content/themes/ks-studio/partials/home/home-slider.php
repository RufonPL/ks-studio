<div class="container-fluid home-slider-container slick-hero">
    <div class="home-slider-item" style="background-image: url(http://via.placeholder.com/1920x800)">
        <div class="home-slider-inner">
            <div class="home-slider-header">
                Let us make the differences
            </div>
            <div class="home-slider-subheader">
                INTERIOR DESIGN
            </div>
        </div>
    </div>
    <div class="home-slider-item" style="background-image: url(http://via.placeholder.com/1920x800)">
        <div class="home-slider-inner">
            <div class="home-slider-header">
                TITLE 2
            </div>
            <div class="home-slider-subheader">
                SUBTITLE 2
            </div>
        </div>
    </div>

    <?php if (have_rows('repeater_hero') && false):
        while (have_rows('repeater_hero')) : the_row();
            $hero_img = get_sub_field('hero_image')['sizes']['slider'];
            $hero_title = get_sub_field('hero_title');
            $hero_subtitle = get_sub_field('hero_subtitle');
            ?>

            <div class="home-slider-item" style="background-image: url(<?= $hero_img ?>)">
                <div class="home-slider-inner">
                    <div class="home-slider-header">
                        <?= $hero_title ?>
                    </div>
                    <div class="home-slider-subheader">
                        <?= $hero_subtitle ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>