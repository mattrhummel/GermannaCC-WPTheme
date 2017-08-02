<?php
require_once('library/enqueue-scripts.php');
require_once('library/cleanup.php');
// Required for Foundation to work properly
require_once('library/foundation.php');
// Register all navigation menus
require_once('library/navigation.php');
// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');
// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');
// Return entry meta information for posts
require_once('library/entry-meta.php');
// Add theme support
require_once('library/theme-support.php');
// Add Header image
require_once('library/custom-header.php');
?>
<?php
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
function remove_auto_p_in_shortcode_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}
	return $new_content;
}
add_filter('the_content', 'remove_auto_p_in_shortcode_formatter', 99);
?>
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
add_action( 'init', 'create_post_type_3' );
function create_post_type_3() {
register_post_type('homepage-calltos', array(
'label' => 'Home Page CallTos',
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
'rewrite' => array('slug' => 'homepage-calltos'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks',
'custom-fields',
'comments',
'revisions',
'thumbnail',
'author',
'page-attributes')
));
}
?>
<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_4' );
function create_post_type_4() {
register_post_type('germanna-highlights', array(
'label' => 'Featured Highlights',
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
'rewrite' => array('slug' => 'germanna-highlights'),
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
add_action( 'init', 'create_post_type_8' );
function create_post_type_8() {
register_post_type('explore-workforce', array(
'label' => 'Explore Workforce',
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
'rewrite' => array('slug' => 'explore-workforce'),
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
<?php $new_general_setting = new new_general_setting();
$new_general_setting = new new_general_setting();
class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'contact_text', 'esc_attr' );
        add_settings_field('con_text', '<label for="contact_text">'.__('Contact Text?' , 'contact_text' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'contact_text', '' );
        echo '<input type="text" id="contact_text" name="contact_text" value="' . $value . '" />';
    }
}
?>
<?php add_filter( 'wp_default_editor', create_function('', 'return "tinymce";') );
add_action( 'admin_head', 'disable_html_editor_wps' );
function disable_html_editor_wps() {
        global $current_user;
        get_currentuserinfo();
        if ($current_user->user_level != 10) {
                echo '<style type="text/css">#editor-toolbar #edButtonHTML, #quicktags {display: none;}</style>';
        }
}
?>
<?php
function new_excerpt_length($length) {
	global $post;
	if ($post->post_type == 'post')
		return 13 ;
	else if ($post->post_type == 'germanna-highlights')
		return 20;
	else if ($post->post_type == 'workforce-highlights')
		return 15;
	else
		return 55;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>
<?php function new_excerpt_more( $more ) {

    if (is_page('workforce-highlights', 'highlights')) {
    return '...<span style="float: left; width: 100%; margin: 20px 0 0 0;"><a class="button default" href="'. get_permalink() . '">' . __('Learn More', 'your-text-domain') . '</a></span>';
}
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>
<?php function myformatTinyMCE($in) {
  $in['block_formats'] = "Paragraph=p;Header 2=h2;Header 3=h3";
  return $in;
}
add_filter('tiny_mce_before_init', 'myformatTinyMCE' );
?>