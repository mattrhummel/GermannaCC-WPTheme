<?php
//Names the page template for each section
/*
Template Name: Physical Therapist Assistant
*/
get_header(); ?>
<div class="row">
	<div class="container">

		<div class="small-12 large-12 columns">
			<?php if  (has_post_thumbnail( $post->ID ) )  { ?>
			<div class='row'>
				<div class='small-12 large-12 columns'>
					<?php the_title('<h1>', '</h1>') ?>
					
				</div>
			</div>
		</div>
		<div class="small-12 large-12 columns">
			<ul class="breadcrumbs" role="menu">
				<li role="menuitem"><a href="<?php echo get_site_url(); ?>">Home</a></li>
				<?php
				// if there is a parent, display the link to go back to parent page
				$parent_title = get_the_title( $post->post_parent );
				if ( $parent_title != the_title( ' ', ' ', false ) ) { ?>
				<li role="menuitem"><a href="<?php get_permalink( $post->post_parent ); ?>"   title="<?php echo $parent_title; ?>"><?php echo $parent_title ?></a></li>
				<? php }
				// if the page is a child page display page title
				if ( is_page() && $post->post_parent > 0 ) {
				the_title( '<li role="menuitem">', '</li>');
				} ?>
			</ul>
		</div>
		<div class="small-12 medium-12 large-12 columns" role="main">
			<ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style: none;">
				<li class="" role="menuitem"><a href="/physical-therapist-assistant/about-the-program/">About PTA Program</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/accreditation/">Accreditation</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/application-information">Application Information</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/program-requirements/">Program Requirements</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/advising/">Advising</a></li>
			</ul>
		</div>
		<div class='subpage-hero' role='banner'>
			<div id='bg'>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<img src='$image[0]' alt='header image' width='1900' height='400' class="img-responsive" />
			</div>
		</div>
		<div class='print-icons'>
			<?php echo get_post_meta($post->ID, 'print_icons', true); ?>
		</div>
		<?php } ?>
	</div>
</div>
<?php else { ?>

<div class="row without-image">
	<div class="container">
		<div class="small-12 large-11 columns">
			<?php echo the_title('<h1>', '</h1>'); ?>
			<ul class="breadcrumbs" role="menu">
				<li role="menuitem"><a href="<?php echo get_site_url(); ?>">Home</a></li>
				<?php
				// if there is a parent, display the link to go back to parent page
				$parent_title = get_the_title( $post->post_parent );
				if ( $parent_title != the_title( ' ', ' ', false ) ) { ?>
				<li role="menuitem"><a href="<?php get_permalink( $post->post_parent ); ?>" title="<?php echo $parent_title; ?>"><?php echo $parent_title ?></a></li>
				<? php }
				// if the page is a child page display page title
				if ( is_page() && $post->post_parent > 0 ) {
				the_title( '<li role="menuitem">', '</li>');
				} ?>
			</ul>
			<div class="small-12 large-1 columns print-aicons">
				<?php //gets custom field for program icons "print_icons" //
				echo get_post_meta($post->ID, 'print_icons', true); ?>
			</div>
		</div>
		<div class="small-12 medium-12 large-12 columns" role="main">
			<ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style: none;">
				<li class="" role="menuitem"><a href="/physical-therapist-assistant/about-the-program/">About PTA Program</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/accreditation/">Accreditation</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/application-information">Application Information</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/program-requirements/">Program Requirements</a></li>
				<li role="menuitem"><a href="/physical-therapist-assistant/advising/">Advising</a></li>
			</ul>
		</div>
	</div>
</div>
<?php } ?>

<div class="row">
	<div class="container">
		<div class="small-12 large-12 columns">
			<?php // Gets the alert custom post type id for each sub page needing special announcement
			$post_id = 5447;
			$queried_post = get_post($post_id);
									$content = $queried_post->post_content;
									$content = apply_filters('the_content', $content);
			if ($content) { ?>
			<div class='alert-box alert'>
				<?php echo "$content"; ?>
				<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a></div>
				<?php
				}
				else {
				}
				?>
			</div>
			<?php get_template_part( 'parts/content' ); ?>
			<?php get_template_part( 'parts/sidebars/physical-therapist-assistant-sidebar' ); ?>
		</div>
	</div>
	<?php get_footer(); ?>