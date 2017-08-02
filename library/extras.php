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
<?php
// Add custom validation for CF7 form fields
function is_company_email($email){ // Check against list of common public email providers & return true if the email provided *doesn't* match one of them
if(
preg_match('/@gmail.com/i', $email) ||
preg_match('/@hotmail.com/i', $email) ||
preg_match('/@live.com/i', $email) ||
preg_match('/@msn.com/i', $email) ||
preg_match('/@aol.com/i', $email) ||
preg_match('/@yahoo.com/i', $email) ||
preg_match('/@inbox.com/i', $email) ||
preg_match('/@gmx.com/i', $email) ||
preg_match('/@me.com/i', $email)
){
return false; // It's a publicly available email address
}else{
return true; // It's probably a company email address
}
}
function your_validation_filter_func($result,$tag){
$type = $tag['type'];
$name = $tag['name'];
if('yourid' == $type){ // Only apply to fields with the form field name of "company-email"
$the_value = $_POST[$name];
if(!is_company_email($the_value)){ // Isn't a company email address (it matched the list of free email providers)
$result['valid'] = false;
$result['reason'][$name] = 'You need to provide an email address that isn\'t hosted by a free provider.<br />Please contact us directly if this isn\'t possible.';
}
}
return $result;
}
add_filter( 'wpcf7_validate_text', 'your_validation_filter_func', 10, 2 ); // Email field or contact number field
add_filter( 'wpcf7_validate_text*', 'your_validation_filter_func', 10, 2 ); // Req. Email field or contact number
?>