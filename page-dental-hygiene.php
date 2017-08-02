<?php
//Names the page template for each section
/*
Template Name: Dental Hygiene
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
	<div class="small-12 large-12 columns" role="main">
		<?php // Gets the alert custom post type id for each sub page needing special announcement
		$post_id = 5447;
		$queried_post = get_post($post_id);
		$content = $queried_post->post_content;
		$content = apply_filters('the_content', $content);
		if ($content) {
			
		echo "<div class='alert-box alert'>";
			echo "$content";
			echo "<a href='#' class='close'><i class='icon-remove-circle'></i></a></div>";
							
			}
			else {
				
				
			}
			?>
			
		</div>
	</div>
	
	<!--Page Subnav-->
	<div class="row">
		<div class="small-12 medium-12 large-12 columns" role="main">
			<ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style:none;">
				
				
				<li class="" role="menuitem"><a href="/academic-advising/">Advising</a></li>
				<li role="menuitem"><a href="/dental/dental-hygiene/clinic-information/">Clinic Information</a></li>
				<li class="" role="menuitem"><a href="/dental/dental-hygiene/essential-functions/">Essential Functions</a></li>
				<li class="" role="menuitem"><a href="/dental/dental-hygiene/expenses-and-aid/">Expenses and Aid</a></li>
				
				
			</ul>
		</div>
	</div>
	<!--.subnav-->
	
	
	<div class="row">
		
		<!--Get Content-->
		<?php get_template_part( 'parts/content' ); ?>
		<!--.content-->
		
		
		<!--Get Page Sidebars-->
		<?php get_template_part( 'parts/sidebars/dental-hygiene-sidebar' ); ?>
		<!--.sidebars-->
	</div>
	<!--Get Extras-->
	<?php get_template_part( 'parts/extras' ); ?>
	<!--.extras-->
	<?php get_footer(); ?>