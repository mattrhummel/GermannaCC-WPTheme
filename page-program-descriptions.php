<?php
/*
Template Name: Program Descriptions
*/
get_header(); ?>
<div class="row">
<div class="small-12 large-12 columns" role="main">

<div class="row">
<div class="small-12 large-12 columns" role="main">
<?php if  (has_post_thumbnail( $post->ID ) )  { ?>
<?php
echo "<div class='row'>";
echo "<div class='small-12 large-12 columns'>";
echo "\t\t<h1>\n\t\t";
echo  the_title();
echo "\n\t\t</h1>\n";
echo "</div>";
echo "</div>";
?>
<div class="row">
<div class="small-12 large-12 columns" role="main">
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
<?php
echo "<div class='subpage-hero' role='banner'>\n";
echo "\t<div id='bg'>\n";
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
echo "\t\t<img src='$image[0]' alt='header image' width='1900' height='300' />\n";
echo "\t</div>\n";
echo "</div>";
}  else { ?>
<!--.pagesubbanner-->
<!--no featured image banner-->
<div class="row without-image" role="banner">
<div class="small-12 large-12 columns'">
<div class="row">
<div class="small-12 large-7 columns" role="main">
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

<div class="small-12 large-5 columns print-icons">

<?php //gets custom field for program icons "print_icons" // 
echo get_post_meta($post->ID, 'print_icons', true); ?>

</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>


<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

<div class="entry-content">
<?php the_content(); ?>
</div>



<footer>
<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
<p><?php the_tags(); ?></p>
</footer>
<?php comments_template(); ?>
</article>
<?php endwhile; // End the loop ?>


</div>
</div>
<?php get_footer(); ?>