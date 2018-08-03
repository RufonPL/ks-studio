<?php
include_once __DIR__ . '/assets-utils.php';

class Assets
{
    protected $assetsIdPrefix = 'mc-';
    protected $webpackPort;

    public function __construct()
    {
        $this->webpackPort = apply_filters('mc_webpack_port', 7777);
    }

    public function register()
    {
        $this->registerPublic();
        $this->registerAdmin();
    }

    protected function registerPublic()
    {
        add_action('wp_enqueue_scripts', function () {

            $this->enqueue('commons.css');
            $this->enqueue('commons.js');

            $this->enqueue('app.css');
            $this->enqueue('app.js');

            if (is_front_page()) {
                $this->enqueue('home.css');
                $this->enqueue('home.js');
            }

//            $this->enqueue('bundle.css');
//            $this->enqueue('bundle.js');
        });
    }


    /**
     * @param $id
     * @return string
     */
    public function manifest($id)
    {
        if (useWebpackDevServer()) {
            return $id;
        } else {
            global $manifest;
            if (!$manifest) {
                $fileName = __DIR__.'/../dist/webpack-assets.json';
                if (file_exists($fileName)) {
                    $manifest = json_decode(file_get_contents($fileName), JSON_OBJECT_AS_ARRAY);
                }
            }
            $parts = explode('.', $id);
            return 'dist/'.(isset($manifest[$parts[0]]) && isset($manifest[$parts[0]][$parts[1]]) ?  $manifest[$parts[0]][$parts[1]] : $id);
        }
    }
    function jsUrl($js)
    {
        return get_stylesheet_directory_uri() . '/' . $this->manifest($js);
    }

    function cssUrl($css)
    {
        return get_stylesheet_directory_uri() . '/' . $this->manifest($css);
    }

    protected function registerAdmin()
    {
        //TODO ... admin scripts
    }


    private function enqueueCss($id, $params = [])
    {
        if (useWebpackDevServer()) {
            return;
        }
        wp_enqueue_style($this->getAssetId($id), get_stylesheet_directory_uri() . '/' . $this->manifest($id));
    }

    private function enqueueJs($id, $params = [])
    {

        $deps = [];
        if (is_admin()) {
//            $deps = ($id == 'admin-commons.js' ? [] : [$this->assetsIdPrefix . 'admin-commons.js']);
        } else {
            $deps = ($id == 'commons.js' ? [] : [$this->assetsIdPrefix . 'commons.js']);
        }


        if (useWebpackDevServer()) {
            wp_enqueue_script($this->getAssetId($id), 'http://' . $_SERVER['SERVER_NAME'] . ':' . $this->webpackPort . '/' . $id, $deps, '1.0', true);
        } else {
            wp_enqueue_script($this->getAssetId($id), get_stylesheet_directory_uri() . '/' . $this->manifest($id), $deps, '1.0', true);
        }
    }

    public function getAssetId($assetName)
    {
        return $this->assetsIdPrefix . $assetName;

    }

    private function enqueue($id, $params = [])
    {
        $parts = explode('.', $id);
        if ($parts[count($parts) - 1] == 'js') {
            $this->enqueueJs($id, $params);
        } else {
            $this->enqueueCss($id, $params);
        }
    }

//    protected function jqueryAssets()
//    {
//        wp_dequeue_script('jquery');
//        wp_deregister_script('jquery');
//        wp_dequeue_script('jquery-migrate');
//        wp_deregister_script('jquery-migrate');
//
//        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '3.1.1');
//        wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate.min.js', ['jquery'], '3.1.1');
//    }

}

function Assets()
{
    global $mcAssets;
    if (!$mcAssets) {
        $mcAssets = new Assets();
    }
    return $mcAssets;
}