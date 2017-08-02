<?php
//Names the page template for each section
/*
Template Name: Student Success Day
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<div class="container">
		
	<?php get_template_part( 'parts/content' ); ?>
	<?php get_template_part( 'parts/sidebars/student-success-sidebar' ); ?>


</div>
</div>
<?php get_footer(); ?>