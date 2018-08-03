<?php
/**
 * Bootstrap framework dependencies & helpers
 */
require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/autoload.php';

function isProduction()
{
    return (!isStaging() || isLocalhost());
}

function isStaging()
{
    return !isLocalhost();
}

function isLocalhost()
{
    return apply_filters('is_localhost', $_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'virtual.movecloser.pl');
}

function isLocal()
{
    return isLocalhost();
}
function useWebpackDevServer(){
    //return false;
    return isLocal();
}
function vd($p)
{
    array_map('var_dump', $p);
}

function dd(...$p)
{
    array_map('var_dump', $p);
    die();
}

if (isLocal()) {
    error_reporting(E_ALL & ~(E_NOTICE | E_WARNING));
}

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


//date_default_timezone_set('UTC');
