<?php
//Names the page template for each section
/*
Template Name: SkillupVA
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<div class="container">

        <?php get_template_part( 'parts/content' ); ?>
			<?php get_template_part( 'parts/sidebars/skillupva-sidebar' ); ?>
		</div>
	</div>
	<?php get_footer(); ?>