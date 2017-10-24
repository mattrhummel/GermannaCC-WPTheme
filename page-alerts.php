<?php
//Names the page template for each section
/*
Template Name: Alerts
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Content loop-->
<div class="row">
<div class="container">


<?php get_template_part( 'parts/content' ); ?>
<?php get_template_part( 'parts/sidebars/about-sidebar' ); ?>

</div>
</div>
<?php get_footer(); ?>