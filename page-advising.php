<?php
//Names the page template for each section
/*
Template Name: Advising
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>

<div class="row">
<div class="container">
	
<div class="small-12 columns">
<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5452;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) { ?>
<div class='alert-box alert'>
<?php echo "$content"; ?>
<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a></div>
<?php
}
else {
}
?>
</div>


<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php //start the loop
while ( have_posts() ) : the_post(); ?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">

<?php do_action( 'foundationpress_page_before_entry_content' ); ?>

<main class="entry-content" id="main" role="main">

<?php //Gets Page content
the_content(); ?>

<?php 

if (is_page('advising-events'))  {  ?>

<div id="adx120243">Loading Events...</div>
<script type="text/javascript">if (typeof jQuery != 'undefined') {
jQuery(document).ready(function () {
var adx="Events are temporarily unavailable. Please check back later.";
jQuery.ajax({ dataType: 'script', url:
'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=50&category=32-90&expire=Y&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx120243'
});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx120243').html(adx);}}, 5000);
});}else { document.getElementById('adx120243').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.';
}</script>


<?php

}   

?>

</main>

</article>	

<?php endwhile; //Ends the loop ?>
<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_template_part( 'parts/sidebars/advising-sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>