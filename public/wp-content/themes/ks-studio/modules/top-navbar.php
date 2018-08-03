<header class="top-navbar-container">
    <div class="container-fluid">
        <div class="row align-items-center navbar-main">
            <div class="col-12 col-md-3 navbar-logo">
                <a href="<?= get_site_url() ;?>">
                    <img src="<?= $site_logo ?>" alt="">
                </a>
            </div>
            <div class="col-12 col-md-9 navbar-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'Main Menu',
                    'container_class' => '',
                    'menu_class' => 'nav justify-content-center'));
                ?>
            </div>
        </div>
    </div>
</header>