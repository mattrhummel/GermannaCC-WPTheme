<?php
//Names the page template for each section
/*
Template Name: Internships
*/
get_header(); ?>
<?php get_template_part( 'parts/custom-banners/career-transfer-banners' ); ?>
<div class="row">
	<div class="container">
		<?php get_template_part( 'parts/content' ); ?>
		<?php get_template_part( 'parts/sidebars/internships-sidebar' ); ?>
	</div>
</div>
<?php get_footer(); ?>