<?php

namespace App;
use App\Endpoints\Navigation;
use UWebPro\WordPress\Rest\Router;

require_once 'vendor/autoload.php';

/**
 * Strict Error Capturing
 */
if (WP_DEBUG && !file_exists(ABSPATH . '.maintenance')) {
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Content-Type: application/xml; charset=utf-8");

    add_filter('wp_fatal_error_handler_enabled', '__return_false', PHP_INT_MAX);
    ob_start();

    (new \Whoops\Run)->pushHandler(new \Whoops\Handler\PrettyPageHandler)->register();
}

header('Content-Security-Policy: upgrade-insecure-requests;');

/**
 * Includes
 */
require_once __DIR__ . '/includes/options.php';
require_once __DIR__ . '/includes/assets.php';


/**
 * Controllers
 */
(new PostTypes());

/**
 * Router
 */

$router = new Router('data');
$router->get('/navigation')->uses((new Navigation));
$router->register();
