<?php
//Names the page template for each section
/*
Template Name: Tutoring Services
*/
get_header();
include_once("tutoringanalyticstracking.php");
?>
<?php get_template_part( 'parts/custom-banners/tutoring-banner' ); ?>
<div class="row">
	<div class="container">
		
		<?php get_template_part( 'parts/content' ); ?>
		<?php get_template_part( 'parts/sidebars/tutoring-services-sidebar' ); ?>
	</div>
</div>
<?php get_footer(); ?>