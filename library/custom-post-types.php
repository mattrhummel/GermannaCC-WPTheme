<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_1' );
function create_post_type_1() {
register_post_type('home-slider', array(
'label' => 'Home Slider',
'public' => true,
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
'excerpt',
'trackbacks' => true,
'custom-fields',
'comments',
'revisions',
'thumbnail',
'author',
'page-attributes')
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
?>