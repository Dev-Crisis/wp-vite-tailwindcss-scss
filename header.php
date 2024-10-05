<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name') ?> - </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1 class="text-7xl">Header</h1>
    <menu class="bg-blue-800 flex items-center justify-center text-xl gap-12 text-white py-4 px-6">
    </menu>
</header>