<?php
//Names the page template for each section
/*
Template Name: Arts
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
	<!--Get Content-->
	<?php get_template_part( 'parts/content' ); ?>
	<!--.breadcrumbs-->
	
	
	<!--Get Page Sidebars-->
	<?php get_template_part( 'parts/sidebars/arts-sidebar' ); ?>
	<!--.sidebars-->
</div>
<?php get_footer(); ?>