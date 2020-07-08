<?php
$version = WP_DEBUG ? time() : '1.0';

$assets = static function () use ($version) {
    wp_enqueue_style('styles', get_stylesheet_uri() . '?version=' . $version);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/app-compiled.min.js', '', $version, true);
};

$adminAssets = static function () use ($version) {
    wp_enqueue_style('custom_admin', get_stylesheet_directory_uri() . '/assets/admin.css', '', $version);
    wp_enqueue_script('custom_admin_js', get_template_directory_uri() . '/assets/js/app-compiled.js', '', $version);
};

add_action('wp_enqueue_scripts', $assets);
add_action('admin_enqueue_scripts', $adminAssets);


add_filter('script_loader_tag', fn($tag, $handle, $src) => $handle !== 'custom_admin_js' ? $tag : str_replace('<script', '<script defer', $tag), 10, 3);
