<?php
    function my_post_types(){
        register_post_type(
            'dish', array(
                'show_in_rest' => true,
                'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'page-attributes'),
                'has_archive' => true,
                'public' => true,
                'menu_icon' => 'dashicons-drumstick',
                'rewrite' => array('slug' => 'dishes'),
                'labels' => array(
                    'name' => 'Dishes',
                    'add_new_item' => 'Add Dish',
                    'edit_item' => 'Edit Dish',
                    'singular_name' => 'Dish',
                    'all_items' => 'All Dishes'
                ),
                'taxonomies' => array('category'),
            )
        );

        register_post_type(
            'message', array(
                'show_in_rest' => true,
                'supports' => array('title', 'editor'),
                'public' => true,
                'publicly_queryable' => false,
                'has_archive' => true,
                'menu_icon' => 'dashicons-email-alt',
                'rewrite' => array('slug' => 'messages'),
                'labels' => array(
                    'name' => 'Messages',
                    'add_new_item' => 'Add Message',
                    'edit_item' => 'Edit Message',
                    'singular_name' => 'Message',
                    'all_items' => 'All Messages'
                )
            )
        );

    }

    add_action('init', 'my_post_types');
?>