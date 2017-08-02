<?php
//Names the page template for each section
/*
Template Name: Automotive
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
	<!--Get Content-->
	<?php get_template_part( 'parts/content' ); ?>
	<!--.breadcrumbs-->
	
	
	<!--Get Page Sidebars-->
	<?php get_template_part( 'parts/sidebars/automotive-sidebar' ); ?>
	<!--.sidebars-->
</div>
<!--Get Extras-->
<?php get_template_part( 'parts/extras' ); ?>
<!--.extras-->
<?php get_footer(); ?>