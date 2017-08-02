<?php
//Names the page template for each section
/*
Template Name: Physical Therapist Assistant
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns">
		<div class="row">
			<div class="small-12 large-12 columns">
				<?php if  (has_post_thumbnail( $post->ID ) )  {
				the_title('<h1>', '</h1>');
				?>
			</div>
			<div class="row">
				<div class="small-12 large-12 columns">
					<ul class="breadcrumbs">
						<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
						<?php
						// if there is a parent, display the link to go back to parent page
						$parent_title = get_the_title( $post->post_parent );
						if ( $parent_title != the_title( ' ', ' ', false ) ) {
						echo '<li><a href="' . get_permalink( $post->post_parent ) . '"        title="' . $parent_title . '">' .               $parent_title . '</a></li>';
						}
						// if the page is a child page display page title
						if ( is_page() && $post->post_parent > 0 ) {
						echo '<li>';
							the_title();
						echo '</li>';
						} ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<ul class="sub-nav" role="menu" title="Filter Menu List">
						<li class="" role="menuitem"><a href="/physical-therapist-assistant/about-the-program/">About PTA Program</a></li>
						<li role="menuitem"><a href="/physical-therapist-assistant/accreditation/">Accreditation</a></li>
						<li role="menuitem"><a href="/physical-therapist-assistant/application-information">Application Information</a></li>
						<li role="menuitem"><a href="/physical-therapist-assistant/program-requirements/">Program Requirements</a></li>
						<li role="menuitem"><a href="/physical-therapist-assistant/advising/">Advising</a></li>
					</ul>
				</div>
			</div>
			<?php
			echo "<div class='subpage-hero' role='banner'>\n";
				echo "\t<div id='bg'>\n";
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					echo "\t\t<img src='$image[0]' alt='header image' width='1900' height='300' />\n";
				echo "\t</div>\n";
			echo "</div>";
			//gets custom field for program icons "print_icons" //
			echo "<div class='print-icons' style='position: absolute; right: 0; top: 0;'>";
				echo get_post_meta($post->ID, 'print_icons', true);
			echo "</div>";
		echo "</div>";
		}  else { ?>
		<!--.pagesubbanner-->
		<!--no featured image banner-->
		<div class="row without-image" role="banner">
			<div class="small-12 large-12 columns'">
				<div class="row">
					<div class="small-12 large-11 columns" role="main">
						<h1><?php echo the_title(); ?></h1>
						<ul class="breadcrumbs">
							<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
							<?php
							// if there is a parent, display the link to go back to parent page
							$parent_title = get_the_title( $post->post_parent );
							if ( $parent_title != the_title( ' ', ' ', false ) ) {
							echo '<li><a href="' . get_permalink( $post->post_parent ) . '"        title="' . $parent_title . '">' .               $parent_title . '</a></li>';
							}
							// if the page is a child page display page title
							if ( is_page() && $post->post_parent > 0 ) {
							echo '<li>';
								the_title();
							echo '</li>';
							} ?>
						</ul>
					</div>
					<div class="small-12 large-1 columns print-icons">
						<?php //gets custom field for program icons "print_icons" //
						echo get_post_meta($post->ID, 'print_icons', true); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
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
</div>
</div>
<?php } ?>
</div>
</div>
</div>
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
echo "<a href='#' class='close'><i class='icon-remove-circle'></i></a>";
				echo "</div>";
}
?>
</div>
</div>
<div class="row">
<?php get_template_part( 'parts/content' ); ?>
<?php get_template_part( 'parts/sidebars/physical-therapist-assistant-sidebar' ); ?>
</div>
<?php get_footer(); ?>