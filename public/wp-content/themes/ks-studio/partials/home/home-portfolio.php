<div class="container-fluid portfolio">
    <div class="row portfolio-row-header">
        <div class="col-12">
            <h5 class="section--header section-header__white">PORTFOLIO</h5>
            <h2 class="section--box-outline">
                03 <span class="sep"></span> COMPLETED PROJECTS
            </h2>
        </div>
    </div>
    <div class="row portfolio-gallery">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="col-12 col-md-6 col-lg-3 portfolio-gallery-item">
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
    <div class="row portfolio-seemore-row">
        <div class="col-12 portfolio-seemore">
            <a href="">
                ZOBACZ WIĘCEJ
            </a>
        </div>
    </div>
</div>