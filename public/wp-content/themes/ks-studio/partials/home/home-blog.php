<div class="container-fluid blog">
    <div class="row">
        <div class="col-12">
            <h5 class="section--header">FROM BLOG</h5>
            <h2>
                04 - LATEST POSTS
            </h2>
        </div>
        <div class="col-12 blog">
            <div class="row">
                <?php for ($i=0; $i < 3; $i++):?>
                    <div class="col-12 col-lg-4 blog-recent-item">
                        <?= 'blog item ' . $i ?>
                    </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</div>