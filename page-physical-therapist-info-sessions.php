<?php
//Names the page template for each section
/*
Template Name: PTA Info Sessions
*/
get_header(); ?>
<div class="row">

<div class="small-12 large-12 columns" role="main">
<?php if  (has_post_thumbnail( $post->ID ) )  { ?>
<?php

echo  the_title('<h1>', '</h1>');

?>
</div>

<div class="small-12 large-12 columns" role="main">
<ul class="breadcrumbs">
<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
<?php
// if there is a parent, display the link to go back to parent page
$parent_title = get_the_title( $post->post_parent );
if ( $parent_title != the_title( ' ', ' ', false ) ) {
echo '<li><a href="' . get_permalink( $post->post_parent ) . '"        title="' . $parent_title . '">' .               $parent_title . '</a></li>';
}
// if the page is a child page display page title
if ( is_page() && $post->post_parent > 0 ) {
echo '<li>';
    the_title();
echo '</li>';
} ?>
</ul>
</div>

<div class="small-12 medium-12 large-12 columns" role="main">
<ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style: none;">

<li class="" role="menuitem"><a href="/physical-therapist-assistant/about-the-program/">About PTA Program</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/accreditation/">Accreditation</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/application-information">Application Information</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/program-requirements/">Program Requirements</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/advising/">Advising</a></li>
</ul>
</div>
</div>
<?php
echo "<div class='subpage-hero' role='banner'>\n";
echo "\t<div id='bg'>\n";
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
echo "\t\t<img src='$image[0]' alt='header image' width='1900' height='300' />\n";
echo "\t</div>\n";
echo "</div>";
//gets custom field for program icons "print_icons" // 
echo "<div class='print-icons' style='position: absolute; right: 0; top: 0;'>";
     echo get_post_meta($post->ID, 'print_icons', true); 
echo "</div>";
echo "</div>";

}  else { ?>

<div class="row without-image" role="banner">
<div class="small-12 large-12 columns'">
<div class="row">
<div class="small-12 large-11 columns" role="main">
<h1><?php echo the_title(); ?></h1>
    <ul class="breadcrumbs">
<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
<?php
// if there is a parent, display the link to go back to parent page
$parent_title = get_the_title( $post->post_parent );
if ( $parent_title != the_title( ' ', ' ', false ) ) {
echo '<li><a href="' . get_permalink( $post->post_parent ) . '"        title="' . $parent_title . '">' .               $parent_title . '</a></li>';
}
// if the page is a child page display page title
if ( is_page() && $post->post_parent > 0 ) {
echo '<li>';
    the_title();
echo '</li>';
} ?>
</ul>
</div>

<div class="small-12 large-1 columns print-icons">

     <?php //gets custom field for program icons "print_icons" // 
     echo get_post_meta($post->ID, 'print_icons', true); ?>

</div>
</div>
</div>
</div>
<div class="row">
<div class="small-12 medium-12 large-12 columns" role="main">
<ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style: none;">

<li class="" role="menuitem"><a href="/physical-therapist-assistant/about-the-program/">About PTA Program</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/accreditation/">Accreditation</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/application-information">Application Information</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/program-requirements/">Program Requirements</a></li>
<li role="menuitem"><a href="/physical-therapist-assistant/advising/">Advising</a></li>

</ul>
</div>
</div>
</div>
</div>
</div>

<?php } ?>

</div>
</div>
</div>


<!--Content loop-->
<div class="row">
<div class="small-12 large-12 columns" role="main">
<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5447;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) {

echo "<div class='alert-box alert'>";
echo "$content";
echo "<a href='#' class='close'><i class='icon-remove-circle'></i></a>";
echo "</div>";				
}

?>
</div>
</div>
<div class="row">

<!--Get Content-->


<!--Page Content-->
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php //start the loop
while ( have_posts() ) : the_post(); ?>

<!--Main Article-->
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >

<?php do_action( 'foundationpress_page_before_entry_content' ); ?>

<div class="entry-content" id="main">

<?php //Gets Page content
the_content(); ?>

<div id="adx120141">Loading Events...</div>
<script type="text/javascript">if (typeof jQuery != 'undefined') {
jQuery(document).ready(function () {
var adx="Events are temporarily unavailable. Please check back later.";
jQuery.ajax({ dataType: 'script', url: 'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=B&number=50&category=32-70&expire=Y&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx120141'
});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx120141').html(adx);}}, 5000);
});}else { document.getElementById('adx120141').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script>



</div>
<!--.content-->

</article>
<!--.article-->



<?php endwhile; //Ends the loop ?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>

<!--.content loop-->



<!--.content-->


<!--Get Page Sidebars-->
<?php get_template_part( 'parts/sidebars/physical-therapist-assistant-sidebar' ); ?>
<!--.sidebars-->
</div>
<?php get_footer(); ?>