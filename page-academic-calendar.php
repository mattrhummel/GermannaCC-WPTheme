<?php
//Names the page template for each section
/*
Template Name: Academic Calendar
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Content loop-->
<div class="row">
	<?php
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
		<!--Get Breadcrumbs-->
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
		<!--.breadcrumbs-->
		<!--Get Breadcrumbs-->
		<?php get_template_part( 'parts/content' ); ?>
		<!--.breadcrumbs-->
		
		<!--Get Page Sidebars-->
		<?php get_template_part( 'parts/sidebars/academic-calendar-sidebar' ); ?>
		<!--.sidebars-->
	</div>
	<!--Get Extras-->
	<?php get_template_part( 'parts/extras' ); ?>
	<!--.extras-->
	<?php get_footer(); ?>