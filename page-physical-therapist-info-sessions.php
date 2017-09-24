<?php
//Names the page template for each section
/*
Template Name: PTA Info Sessions
*/
get_header(); ?>
<div class="row">
<div class="container">

<div class="small-12 large-12 columns">
<?php // if the page has a featured image
if  (has_post_thumbnail( $post->ID ) )  { ?>

<div class='row'>
<div class='small-12 large-12 columns'>
	<?php the_title('<h1>', '</h1>'); ?>
</div>
</div>

<div class="row">
<div class="small-12 large-12 columns" itemprop="breadcrumb">
	<ul class="breadcrumbs" role="menu">
		
		<?php $home_page = get_the_title( get_option('page_on_front')); ?>
		<li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
		
		<?php
		// if there is a parent, display the link to go back to parent page
		$parent_title = get_the_title( $post->post_parent );
		if ( $parent_title != the_title('', '', false) ) { ?>
		<li role="menuitem"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
		<?php } else if ( $parent_title == the_title('', '', false)) { ?>
		
		<li class="last" role="menuitem"><?php echo $parent_title; ?></li>
		<?php }
		// if the page is a child page display page title
		if
		( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
		<?php the_title('<li class="last">', '</li>'); ?>
		<?php } ?>
	</ul>
</div>

</div>
<div class='subpage-hero'>
<div id='bg'>
	<?php the_post_thumbnail('', array('class' => 'img-responsive'));  ?>
</div>
</div>

<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
<div class="row without-image">
<div class="small-12 large-12 columns'">
	<?php the_title('<h1>', '</h1>'); ?>
	<div class="row">
		<div class="small-12 large-12 columns">
			<ul class="breadcrumbs" role="menu">
				
				<?php $home_page = get_the_title( get_option('page_on_front')); ?>
				<li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
				
				<?php
				// if there is a parent, display the link to go back to parent page
				$parent_title = get_the_title( $post->post_parent );
				if ( $parent_title != the_title('', '', false) ) { ?>
				<li role="menuitem"> <a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
				<?php } else if ( $parent_title == the_title('',  '', false)) { ?>
				
				<li class="last" role="menuitem"><?php echo $parent_title; ?></li>
				<?php }
				// if the page is a child page display page title
				if
				( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
				<?php the_title('<li class="last" role="menuitem">', '</li>'); ?>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="row">
<div class="container">

<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main" id="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php //start the loop
while ( have_posts() ) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
<div class="entry-content">
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

</article>
<?php endwhile; //Ends the loop
do_action( 'foundationpress_after_content' ); ?>
</main>
<?php get_template_part( 'parts/sidebars/physical-therapist-assistant-sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>