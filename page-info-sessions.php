<?php
//Names the page template for each section
/*
Template Name: Information Sessions
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->
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
			echo "<a href='#' class='close'><i class='icon-remove-circle'></i></a></div>";
							
			}
			else {
				
				
			}
			?>
		</div>
	</div>
	<div class="row">
		
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



					
<div id="adx080484">Loading Events...</div>
<script type="text/javascript">if (typeof jQuery != 'undefined') {
jQuery(document).ready(function () {
var adx="Events are temporarily unavailable. Please check back later.";
jQuery.ajax({ dataType: 'script', url: 'http://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=5&category=50-0&expire=Y&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx080484'
});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx080484').html(adx);}}, 5000);
});}else { document.getElementById('adx080484').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script>
					
					
					
				</div>
				<!--.content-->
				
			</article>
			<!--.article-->
			
			
			
			<?php endwhile; //Ends the loop ?>
			<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
		
		<!--.content loop-->
		
		
		<!--Get Page Sidebars-->
		<?php get_template_part( 'parts/sidebars/information-sessions-sidebar' ); ?>
		<!--.sidebars-->
	</div>
	<!--Get Extras-->
	<?php get_template_part( 'parts/extras' ); ?>
	<!--.extras-->
	<?php get_footer(); ?>