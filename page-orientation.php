<?php
//Names the page template for each section
/*
Template Name: Orientation
*/
$schedule_heading = get_field('schedule_heading');
$fac_heading = get_field('fac_heading');
$fac_schedule_information = get_field('fac_schedule_information');
$dtc_heading = get_field('dtc_heading');
$dtc_schedule_information = get_field('dtc_schedule_information');
$lgc_heading = get_field('lgc_heading');
$lgc_schedule_information = get_field('lgc_schedule_information');
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<div class="row">
	<div class="container">
		

			<?php // Gets the alert custom post type id for each sub page needing special announcement
			$post_id = 5447;
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
		
			
			<!--Get Content-->
			<!--Page Content-->
			<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4"  id="main" role="main">
				<?php do_action( 'foundationpress_before_content' ); ?>
				<?php //start the loop
				while ( have_posts() ) : the_post(); ?>
				
				<!--Main Article-->
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
					
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					
					<div class="entry-content">
						<?php //Gets Page content
						the_content(); ?>
						<?php if (is_page('in-person-orientation'))  { ?>
						<h2><?php echo $schedule_heading; ?></h2>
						<hr>
						<h3><?php echo $fac_heading; ?></h3>
						<?php echo $fac_schedule_information; ?>
						<!--FAC: -->
						<div id="adx050555">Loading Events...</div>
						<script type="text/javascript">if (typeof jQuery != 'undefined') {
						jQuery(document).ready(function () {
						var adx="Events are temporarily unavailable. Please check back later.";
						jQuery.ajax({ dataType: 'script', url: 'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=30&category=53-83&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx050555'
						});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx050555').html(adx);}}, 5000);
						});}else { document.getElementById('adx050555').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script>
						<a href="https://www.germanna.edu/about-germanna/locations/fredericksburg-campus/" class="button button-default" role="button" aria-label="Fredericksburg">Location Information</a>
						<hr >
						<h3><?php echo $dtc_heading ;?></h3>
						<?php echo $dtc_schedule_information ?>
						<div id="adx050542">Loading Events...</div>
						<script type="text/javascript">if (typeof jQuery != 'undefined') {
						jQuery(document).ready(function () {
						var adx="Events are temporarily unavailable. Please check back later.";
						jQuery.ajax({ dataType: 'script', url: 'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=30&category=53-85&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx050542'
						});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx050542').html(adx);}}, 5000);
						});}else { document.getElementById('adx050542').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script>
						
						<a href="https://www.germanna.edu/about-germanna/locations/daniel-technology-center/" class="button button-default" role="button" aria-label="Daniel Technology Center">Location Information</a>
						<hr >
						<h3><?php echo $lgc_heading; ?></h3>
						<?php echo $lgc_schedule_information; ?>
						<div id="adx050550">Loading Events...</div>
						<script type="text/javascript">if (typeof jQuery != 'undefined') {
						jQuery(document).ready(function () {
						var adx="Events are temporarily unavailable. Please check back later.";
						jQuery.ajax({ dataType: 'script', url: 'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=30&category=53-84&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx050550'
						});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx050550').html(adx);}}, 5000);
						});}else { document.getElementById('adx050550').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script>
						<a href="httpss://www.germanna.edu/about-germanna/locations/locust-grove-campus/" class="button button-default" role="button" aria-label="Locust Grove Heading">Location Information</a>
						<?php } ?>
						
					</div>
				</article>
				
				<?php endwhile; //Ends the loop ?>
				<?php do_action( 'foundationpress_after_content' ); ?>
			</main>
			<?php get_template_part( 'parts/sidebars/orientation-sidebar' ); ?>
		</div>
	</div>
	<?php get_footer(); ?>