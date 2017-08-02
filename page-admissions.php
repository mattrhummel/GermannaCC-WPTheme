<?php
//Names the page template for each section
/*
Template Name: Admissions
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<?php // Gets the alert custom post type id for each sub page needing special announcement
		$post_id = 5452;
		$queried_post = get_post($post_id);
		$content = $queried_post->post_content;
		$content = apply_filters('the_content', $content);
		if ($content) {
			
		echo "<div data-alert class='alert-box alert'>";
			echo "$content";
			echo "<a href='#' class='close'><i class='fa fa-times-circle'></i></a></div>";
							
			}
			else {
				
				
			}
			?>
		</div>
	</div>
	<!--Content loop-->
	<div class="row">
		
		<!--Get Content-->
		<?php get_template_part( 'parts/content' ); ?>
		<!--.breadcrumbs-->
		
		<!--Get Page Sidebars-->
		<?php get_template_part( 'parts/sidebars/admissions-sidebar' ); ?>
		<!--.sidebars-->
	</div>
	<!--Get Extras-->
	<?php get_template_part( 'parts/extras' ); ?>
	<!--.extras-->
	<?php get_footer(); ?>