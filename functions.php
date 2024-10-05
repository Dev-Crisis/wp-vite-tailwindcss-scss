<?php
function is_dev(): bool
{
    return @fsockopen('localhost', 5173, $msg, $tt, 1) || @fsockopen('127.0.0.1', 5173, $msg, $tt, 1);
}

function default_actions(): void
{

    $base_path = get_template_directory_uri();

    if (is_dev()) {
        wp_enqueue_script_module('dev-script', 'http://localhost:5173/@vite/client', [], null);
        wp_enqueue_script_module('dev-style', 'http://localhost:5173/style.scss', [], null);
    } else {
        wp_enqueue_style('dist-style', $base_path . '/dist/main.css', [], null);
        wp_enqueue_script_module('dist-script', $base_path . '/dist/main.js', [], null);
    }

    if (!is_admin()) {
        // Unload all default styles + jquery
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('global-styles');
        wp_dequeue_style('wp-elements');
        wp_deregister_script('jquery');
    }
}

add_action('wp_enqueue_scripts', 'default_actions');

function add_nav(): void
{
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'add_nav');

function dd($value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

