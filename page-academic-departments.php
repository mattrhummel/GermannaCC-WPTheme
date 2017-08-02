<!--Get Page Ban<?php
//Names the page template for each section
/*
Template Name: Academic Departments
*/
get_header(); ?>
ner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Content loop-->
<div class="row">
	
	<!--Get Breadcrumbs-->
	<?php get_template_part( 'parts/breadcrumbs' ); ?>
	<!--.breadcrumbs-->
	<!--Get Breadcrumbs-->
	<?php get_template_part( 'parts/content' ); ?>
	<!--.breadcrumbs-->
	
	<!--Get Page Sidebars-->
	<?php get_template_part( 'parts/sidebars/academic-departments-sidebar' ); ?>
	<!--.sidebars-->
</div>
<!--Get Extras-->
<?php get_template_part( 'parts/extras' ); ?>
<!--.extras-->
<?php get_footer(); ?>