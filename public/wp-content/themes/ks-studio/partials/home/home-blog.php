
<div class="container">
    <div class="row">
        <div class="col-12 tickets-header">
            <h5 class="section--header">FROM BLOG</h5>
            <h2 class="section--box-outline outline__grey">
                04 <span class="sep"></span> LATEST POSTS
            </h2>
        </div>
    </div>
</div>

<div class="container-fluid tickets-background">
    <div class="container tickets">
        <div class="row">
            <div class="col-12 tickets-boxes">
                <div class="row">
                    <?php for ($i=0; $i < 3; $i++):?>
                        <div class="col-12 col-lg-4">
                            <div class="tickets-box">
                                <div class="tickets-box-image" style="background-image: url(http://via.placeholder.com/400x400)">
                                    <div class="tickets-box-date">
                                        <span>03</span>
                                        <small>
                                            Jun, 2016
                                        </small>
                                    </div>
                                </div>
                                <div class="tickets-box-content">
                                    <h5 class="tickets-box-header">
                                        <?= 'Interior Design Is My life ' . $i ?>
                                    </h5>
                                    <p class="tickets-box-copy">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur consectetur itaque mollitia quasi voluptate. Accusamus eaque ipsam nemo non recusandae reiciendis rerum sit.
                                    </p>
                                    <a href="" class="btn-arrow">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                </div>
            </div>
        </div>
    </div>
</div>