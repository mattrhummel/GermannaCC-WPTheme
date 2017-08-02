<?php
//Names the page template for each section
/*
Template Name: Nursing Health Technologies Home
*/
get_header(); ?>
<div class="row">
	<div class="container">
		
		<div class="small-12 columns">
			<?php // if the page has a featured image
			if  (has_post_thumbnail( $post->ID ) )  { ?>
			
			<div class='row'>
				<div class='small-12 columns'>
					<?php the_title('<h1 role="heading">', '</h1>'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="small-12 columns" itemprop="breadcrumb">
					<ul class="breadcrumbs" role="menu">
						
						<?php $home_page = get_the_title( get_option('page_on_front')); ?>
						<li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
						<li role="menuitem"><strong><?php the_title(); ?></strong></li>
						<?php
						// if there is a parent, display the link to go back to parent page
						$parent_title = get_the_title( $post->post_parent );
						if ( $parent_title != the_title('', '', false) ) { ?>
						<li role="menuitem"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
						<?php } else if ( $parent_title == the_title('<li class="last" role="menuitem">', '</li>', false)) { ?>
						
						<?php echo $parent_title; ?>
						<?php }
						// if the page is a child page display page title
						if
						( is_page() && $post->post_parent != the_title('<li class="last" role="menuitem">', '</li>', false) ) { ?>
						<?php the_title(); ?>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class='subpage-hero'>
				<div id='bg'>
					<?php the_post_thumbnail();  ?>
				</div>
			</div>
			
			<?php  }  else {  //.pagesubbanner
			// if page doesn't have a featured image
			?>
			<div class="row without-image">
				<div class="small-12 columns'">
					<?php the_title('<h1 role="heading">', '</h1>'); ?>
					<div class="row">
						<div class="small-12 columns">
							<ul class="breadcrumbs" role="menu">
								
								<?php $home_page = get_the_title( get_option('page_on_front')); ?>
								<li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
								
								<?php
								// if there is a parent, display the link to go back to parent page
								$parent_title = get_the_title( $post->post_parent );
								if ( $parent_title != the_title('', '', false) ) { ?>
								<li role="menuitem"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
								<?php } else if ( $parent_title == the_title('<li class="last" role="menuitem">', '</li>', false)) { ?>
								
								<?php echo $parent_title; ?>
								<?php }
								// if the page is a child page display page title
								if
								( is_page() && $post->post_parent != the_title('<li class="last" role="menuitem">', '</li>', false) ) { ?>
								<?php the_title(); ?>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		
		<div class="small-12 columns">
			<main class="small-12 medium-8 columns" id="main" role="main">
				<?php do_action( 'foundationpress_before_content' ); ?>
				<?php //start the loop that holds the main content
				while ( have_posts() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content">
						<?php //Gets Page content
						the_content(); ?>
					</div>
				</article>
				<?php endwhile; //Ends the loop that holds the content?>
				<?php do_action( 'foundationpress_after_content' ); ?>
			</main>
			<?php get_template_part( 'parts/sidebars/nursing-health-sidebar-home' ); ?>
		</div>
	</div>
</div>
<div class="row nursing-panels">
	<div class="container">
		
		<div class="small-12 columns">
			<?php //custom department widgets
			dynamic_sidebar( 'nursing-explore-widgets' ); ?>
		</div>
		<hr>
		<div class="small-12 columns">
			<?php //custom department widgets
			dynamic_sidebar( 'nursing-programs-widgets' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>