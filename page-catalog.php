<?php
//Names the page template for each section
/*
Template Name: Catalog and Student Handbook
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
		
		<!--Get Content-->
		<?php get_template_part( 'parts/content' ); ?>
		<!--.content-->
		
		
		<!--Get Page Sidebars-->
		<?php get_template_part( 'parts/sidebars/catalog-sidebar' ); ?>
		<!--.sidebars-->
	</div>
	<!--Get Extras-->
	<?php get_template_part( 'parts/extras' ); ?>
	<!--.extras-->
	<?php get_footer(); ?>