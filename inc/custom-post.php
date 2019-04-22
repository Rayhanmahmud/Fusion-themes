<?php 



function popular_post(){

    $labels = array(

        'name' => __('popular','crossfit'),
        'singular_name' => __('s_name','crossfit'),
        'menu_name' => __('Popular post','crossfit'),
        'add_new_item' => __('Add new slider','crossfit'),
        'add_new' => __('Add slider','crossfit'),
        'all_items' => __('All slider','crossfit'),
        'view_item' => __('View slider','crossfit'),
        'edit_item' => __('Edit slider','crossfit'),
        'parent_item_colon' => __('Parent slider','crossfit'),
        'update_item' => __('Update slider','crossfit'),
        'search_items' => __('search slider','crossfit'),
        'not_found' => __('No slider Found','crossfit'),
        'not_found_in_trash' => __('Not found slider in trash','crossfit')
    );

    $args=array(
          
         'label' => __('popular','crossfit'),
         'description' => __('this is for slider','crossfit'),
        'public' => true,
        'supports' => array('title','editor','thumbnail'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-images-alt2',
        'show_ui' => true ,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' =>6,
        'can_export' => true,
        'has_archive' => 'slider',
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'taxonomies' => array('category'),
        'rewrite' => array(
            'with_front' => false
        )
    );

    register_post_type('popular',$args);

}
add_action("init","popular_post");










?>