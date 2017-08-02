<?php
//Names the page template for each section
/*
Template Name: Internships
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->
<!--.banner-->
<div class="row">
	
	<!--Get Content-->
	<?php get_template_part( 'parts/content' ); ?>
	<!--.content-->
	
	
	<!--Get Page Sidebars-->
	<?php get_template_part( 'parts/sidebars/internships-sidebar' ); ?>
	<!--.sidebars-->
</div>
<!--Get Extras-->
<?php get_template_part( 'parts/extras' ); ?>
<!--.extras-->
<?php get_footer(); ?>