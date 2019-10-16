<?php 
function register_services() {
    $labels = array(
        'name' => _x('Services', 'post type general name'),
        'singular_name' => _x('service', 'post type singular name'),
        'add_new' => _x('Add New', 'service'),
        'add_new_item' => __('Add New service'),
        'edit_item' => __('Edit service'),
        'new_item' => __('New service'),
        'all_items' => __('All services'),
        'view_item' => __('View service'),
        'search_items' => __('Search service'),
        'not_found' => __('No service found'),
        'not_found_in_trash' => __('No service found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Services'
    );

    $tags_label = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ), 
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add New Tag' ),
        'new_item_name' => __( 'New Tag Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items' => __( 'Add or remove tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Services Tags' ),
      );  

    $args = array(
        'labels' => $labels,
        'description' => 'Service and services related data will be hold in this',
        'public' => true,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail', 'post-format', 'excerpt'),
        'has_archive' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'taxonomies' => array('services_category', 'services_tag')
    );
    register_taxonomy(
        'services_category', 'services', array(
        'hierarchical' => true,
        'label' => 'Service categories',
        'query_var' => true,
        'rewrite' => true
            )
    );
    register_taxonomy(
        'services_tag', 'services', array(
        'hierarchical' => true,
        'labels' => $tags_label,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag' ),
            )
    );
    register_post_type('services', $args);
}

add_action('init', 'register_services');


