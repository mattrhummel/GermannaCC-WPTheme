<?php
//Names the page template for each section
/*
Template Name: Students
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<div class="container">
		
		<div class="small-12 large-12 columns">
			<?php // Gets the alert custom post type id for each sub page needing special announcement
			$post_id = 5482;
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
			<?php get_template_part( 'parts/content' ); ?>
			<?php get_template_part( 'parts/sidebars/students-sidebar' ); ?>
		</div>
	</div>
	<?php get_footer(); ?>