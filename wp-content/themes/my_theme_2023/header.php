<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="author" content="Anna Kharytontseva"> -->
    <!-- <meta name="description" content="Garibaldi's Pizza"> -->
    <!-- <meta name="keywords" content="HTML, php, wordpress, project"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                <li><a
                <?php
                    if (is_page('menu') || get_post_type() == 'dish') {
                        echo "class='current-menu-item'";
                    }
                ?>
                href="<?php echo site_url('/menu'); ?>">Menu</a></li>
                <li><a
                <?php
                    if (is_page('about') || wp_get_post_parent_ID(0) == 2) {
                        echo "class='current-menu-item'";
                    }
                ?>
                href="<?php echo site_url('/about'); ?>">About</a></li>
                <li><a
                <?php
                    if (is_page('contact')) {
                        echo "class='current-menu-item'";
                    }
                ?>
                href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </nav>
    </header>

