<?php
//Names the page template for each section
/*
Template Name: Academic Service Excellence Exam
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
<div class="container">
	
	<div class="small-12 large-12 columns">
		<?php // Gets the alert custom post type id for each sub page needing special announcement
		$post_id = 5468;
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
		
		<?php get_template_part( 'parts/content' ); ?>
		<?php get_template_part( 'parts/sidebars/academic-service-exam-sidebar' ); ?>
	</div>
	</div>
	
	<?php get_footer(); ?>