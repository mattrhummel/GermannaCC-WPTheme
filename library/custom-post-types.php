<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_1' );
function create_post_type_1() {
register_post_type('home-slider', array(
'label' => 'Home Slider',
'public' => true,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'capabilities' => array(
        'publish_posts' => 'manage_options',
        'edit_posts' => 'manage_options',
        'edit_others_posts' => 'manage_options',
        'delete_posts' => 'manage_options',
        'delete_others_posts' => 'manage_options',
        'read_private_posts' => 'manage_options',
        'edit_post' => 'manage_options',
        'delete_post' => 'manage_options',
        'read_post' => 'manage_options',
),
'hierarchical',
'rewrite' => array('slug' => 'home-slider'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks' => true,
'custom-fields',
'comments',
'revisions' => true,
'thumbnail',
'author',
'page-attributes')
));
}
?>
<?php
add_action( 'init', 'create_post_type_2' );
function create_post_type_2() {
// Creates Recipes post type
register_post_type ('alert-tickers', array(
'label' => 'Alert Tickers',
'public' => false,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'capabilities' => array(
        'publish_posts' => 'weather_alerts',
        'edit_posts' => 'weather_alerts',
        'edit_others_posts' => 'weather_alerts',
        'delete_posts' => 'weather_alerts',
        'delete_others_posts' => 'weather_alerts',
        'read_private_posts' => 'weather_alerts',
        'edit_post' => 'weather_alerts',
        'delete_post' => 'weather_alerts',
        'read_post' => 'weather_alerts',
 ),
'hierarchical',
'rewrite' => array('slug' => 'alert-tickers'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt' => false,
'trackbacks' => true,
'custom-fields' => false,
'comments' => false,
'revisions' => true,
'thumbnail' =>false,
'author',
'page-attributes' => true,
)
)
);
}
?>
<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_6' );
function create_post_type_6() {
register_post_type('explore-slider', array(
'label' => 'Explore Slider',
'public' => true,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'capabilities' => array(
        'publish_posts' => 'manage_options',
        'edit_posts' => 'manage_options',
        'edit_others_posts' => 'manage_options',
        'delete_posts' => 'manage_options',
        'delete_others_posts' => 'manage_options',
        'read_private_posts' => 'manage_options',
        'edit_post' => 'manage_options',
        'delete_post' => 'manage_options',
        'read_post' => 'manage_options',
    ),
'hierarchical',
'rewrite' => array('slug' => 'explore-slider'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks' => true,
'custom-fields',
'comments',
'revisions' => true,
'thumbnail',
'author',
'page-attributes')
));
}
?>
<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_7' );
function create_post_type_7() {
register_post_type('workforce-slider', array(
'label' => 'Workforce Slider',
'public' => true,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'capabilities' => array(
        'publish_posts' => 'workforce_slider',
        'edit_posts' => 'workforce_slider',
        'edit_others_posts' => 'workforce_slider',
        'delete_posts' => 'workforce_slider',
        'delete_others_posts' => 'workforce_slider',
        'read_private_posts' => 'workforce_slider',
        'edit_post' => 'workforce_slider',
        'delete_post' => 'workforce_slider',
        'read_post' => 'workforce_slider',
    ),
'hierarchical',
'rewrite' => array('slug' => 'workforce-slider'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks' => true,
'custom-fields',
'comments',
'revisions' => true,
'thumbnail',
'author',
'page-attributes')
));
}
?>
<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_5' );
function create_post_type_5() {
register_post_type('workforce-highlights', array(
'label' => 'Workforce Highlights',
'public' => true,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'capabilities' => array(
        'publish_posts' => 'workforce_highlights',
        'edit_posts' => 'workforce_highlights',
        'edit_others_posts' => 'workforce_highlights',
        'delete_posts' => 'workforce_highlights',
        'delete_others_posts' => 'workforce_highlights',
        'read_private_posts' => 'workforce_highlights',
        'edit_post' => 'workforce_highlights',
        'delete_post' => 'workforce_highlights',
        'read_post' => 'workforce_highlights',
    ),
'hierarchical',
'rewrite' => array('slug' => 'wokforce-highlights'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks' => false,
'custom-fields' => false,
'comments' => false,
'revisions' => true,
'thumbnail',
'author' => false,
'page-attributes' => false,
)
));
}
// Request
add_action( 'init', 'cptui_register_my_cpts_request_info_slider' );
function cptui_register_my_cpts_request_info_slider() {
    $labels = array(
        "name" => __( 'RI Featured Students', '' ),
        "singular_name" => __( 'RI Featured Student', '' ),
        "menu_name" => __( 'RI Featured Students', '' ),
        "all_items" => __( 'All RI Featured Students', '' ),
        "add_new" => __( 'Add New RI Featured Student', '' ),
        "add_new_item" => __( 'Add New RI Featured Student', '' ),
        "edit_item" => __( 'Edit RI Featured Student', '' ),
        "new_item" => __( 'New RI Featured Student', '' ),
        "view_item" => __( 'View RI Featured Student', '' ),
        "search_items" => __( 'Search RI Featured Student', '' ),
        "not_found" => __( 'No RI Featured Student Found', '' ),
        "not_found_in_trash" => __( 'No RI Featured Student Found In Trash', '' ),
        );

    $args = array(
        "label" => __( 'RI Featured Students', '' ),
        "labels" => $labels,
        "description" => "This custom post type is used for the featured student slider on the request information page.",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
                "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "request_info_slider", "with_front" => true ),
        "query_var" => true,
        "menu_position" => 31,"menu_icon" => "dashicons-admin-users",                   );
    register_post_type( "request_info_slider", $args );

// End of cptui_register_my_cpts_request_info_slider()
}
?>