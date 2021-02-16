<?php
//Disable Gutenburg
add_filter('use_block_editor_for_post', '__return_false', 10);

//Hide Admin Bar
show_admin_bar(false);

//Thumbnail support
add_action('after_setup_theme', fn() => add_theme_support('post-thumbnails'));

//Tagline
add_filter('admin_footer_text', fn() => print '<strong>' . get_bloginfo()['name'] . ' ' . date('Y') . '</strong> | v');

//Disable Comments
add_filter('comments_open', fn() => false, 10, 2);

//SVGs
if (WP_DEBUG) {
    add_action('upload_mimes', static function ($file_types) {
        $file_types['svg'] = 'image/svg+xml';
        return $file_types;
    });
}
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}
