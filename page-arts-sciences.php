<?php
//Names the page template for each section
/*
Template Name: Arts and Sciences
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Content loop-->
<div class="row">
	<!--Get Breadcrumbs-->
	<?php get_template_part( 'parts/breadcrumbs' ); ?>
	<!--.breadcrumbs-->
	<?php // Gets the alert custom post type id for each sub page needing special announcement
	$post_id = 5453;
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
		
		
		<!--Get Content-->
		<?php get_template_part( 'parts/content' ); ?>
		<!--.breadcrumbs-->
		
		<!--Get Page Sidebars-->
		<?php get_template_part( 'parts/sidebars/arts-sciences-sidebar' ); ?>
		<!--.sidebars-->
	</div>
	<?php get_footer(); ?>