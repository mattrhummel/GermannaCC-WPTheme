<?php
//Names the page template for each section
/*
Template Name: Career and Transfer
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
						<li role="menuitem"><a href="/career-and-transfer/">Career &amp; Transfer Center</a></li>
						<?php // if the page is a child page display page title
						if
						( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
						<?php the_title('<li class="last">', '</li>'); ?>
						<?php } ?>
					</ul>
				</div>
				<div class="small-12 columns">
					<?php // Gets the alert custom post type id for each sub page needing special announcement
					$post_id = 5457;
					$queried_post = get_post($post_id);
					$content = $queried_post->post_content;
					$content = apply_filters('the_content', $content);
					if ($content) { ?>
					<div class='alert-box alert'>
						<?php echo "$content"; ?>
						<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a></div>
						<?php
						}
						
						?>
					</div>
					
				</div>
				
				<div class='subpage-hero'>
					<div id='bg'>
						<?php the_post_thumbnail( array() );  ?>
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
								ul class="breadcrumbs" role="menu">
								<?php $home_page = get_the_title( get_option('page_on_front')); ?>
								<li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
								<li role="menuitem"><a href="/career-and-transfer/">Career &amp; Transfer Center</a></li>
								<?php // if the page is a child page display page title
								if
								( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
								<?php the_title('<li class="last">', '</li>'); ?>
								<?php } ?>
							</ul>
						</div>
						
					</div>
				</div>
				<div class="small-12 columns">
					<?php // Gets the alert custom post type id for each sub page needing special announcement
					$post_id2 = 5457;
					$queried_post2 = get_post($post_id2);
					$content2 = $queried_post2->post_content;
					$content2 = apply_filters('the_content', $content2);
					if ($content2) { ?>
					<div class='alert-box alert'>
						<?php echo "$content2"; ?>
						<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a></div>
						<?php
						}
						?>
					</div>
				</div>
				<?php } ?>
			</div>
			
			<?php get_template_part( 'parts/content' ); ?>
			<?php get_template_part( 'parts/sidebars/career-transfer-sidebar' ); ?>
		</div>
	</div>
	<?php get_footer(); ?>