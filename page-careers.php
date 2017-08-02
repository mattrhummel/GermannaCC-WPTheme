<?php
//Names the page template for each section
/*
Template Name: Employment Opportunities
*/
get_header(); ?>
<!--Get Page Banner-->
<div class="row">
	<div class="container">
		
		<div class="small-12 large-12 columns">
			<?php // if the page has a featured image
			if  (has_post_thumbnail( $post->ID ) )  { ?>
			
			<div class='row'>
				<div class='small-12 large-12 columns'>
					<?php the_title('<h1 role="heading">', '</h1>'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
					<ul class="breadcrumbs">
						
						<?php $home_page = get_the_title( get_option('page_on_front')); ?>
						<li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
						
						<?php
						// if there is a parent, display the link to go back to parent page
						$parent_title = get_the_title( $post->post_parent );
						if ( $parent_title != the_title('', '', false) ) { ?>
						<li><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
						<?php } else if ( $parent_title == the_title('', '', false)) { ?>
						
						<li class="last"><?php echo $parent_title; ?></li>
						<?php }
						// if the page is a child page display page title
						if
						( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
						<li class="last"> <?php the_title(); ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>

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

				<div class='subpage-hero'>
					<div id='bg'>
						<?php the_post_thumbnail( array() );  ?>
					</div>
				</div>
				
				<?php  }  else {  //.pagesubbanner
				// if page doesn't have a featured image
				?>
				<div class="row without-image" role="banner">
					<div class="small-12 large-12 columns'">
						<?php the_title('<h1 role="heading">', '</h1>'); ?>
						<div class="row">
							<div class="small-12 large-12 columns" role="main">
								<ul class="breadcrumbs">
									
									<?php $home_page = get_the_title( get_option('page_on_front')); ?>
									<li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
									
									<?php
									// if there is a parent, display the link to go back to parent page
									$parent_title = get_the_title( $post->post_parent );
									if ( $parent_title != the_title('', '', false) ) { ?>
									<li><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
									<?php } else if ( $parent_title == the_title('', '', false)) { ?>
									
									<li class="last"><?php echo $parent_title; ?></li>
									<?php }
									// if the page is a child page display page title
									if
									( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
									<li class="last"> <?php the_title(); ?></li>
									<?php } ?>
								</ul>
							</div>
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
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="small-12 large-8 columns">
					<?php do_action( 'foundationpress_before_content' ); ?>
					<?php //start the loop
					while ( have_posts() ) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
						<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
						<main class="entry-content" id="#main" role="main">
							
							<?php //Gets Page content
							the_content(); ?>
							
							
							
						</main>
						<?php // get the categories for the custom post taxonomy
						$terms = get_terms( 'careers_cat', array(
						'orderby'    => 'id',
						'hide_empty' => 1 // hide categories with no posts
						)
						);
						?>
						<?php // now run a query for each category
						foreach( $terms as $term ) {
						// Define the query
						$args = array(
						'post_type' => 'careers', // replace with name of your custom post type
						'careers_cat'  => $term->administrative-professional// replace with name of your custom taxonomy
						);
						$query = new WP_Query( $args );
						// output the category in a heading
						echo'<h2>' . $term->name . '</h2>';
						// Start the post loop
						while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php /* display the post as you see fit */ ?>
						<div id="post-<?php the_ID(); ?>">
							<?php the_title(' <p><strong>', '</strong></p>'); ?>
							<?php the_content(); ?>
						</div>
						<?php endwhile;
						echo '<hr/>';
						// use reset postdata to restore the original query
						wp_reset_postdata();
						} ?>
						<?php get_template_part( 'parts/sidebars/careers-sidebar' ); ?>
						<!--.content-->
					</article>
				</div>
				<?php endwhile; //Ends the loop ?>
				<?php do_action( 'foundationpress_after_content' ); ?>
			</div>
		</div>
		<?php get_footer(); ?>