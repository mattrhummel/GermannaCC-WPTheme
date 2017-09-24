<div class="row">
<div class="container">
<div class="small-12 large-12 columns">
<?php // if the page has a featured image
if  (has_post_thumbnail( $post->ID ) )  { ?>
<div class="row without-image">
<div class="small-12 columns'">
<div class="small-12 medium-6 columns" >
<h1><?php echo the_title(); ?></h1>
<ul class="breadcrumbs" role="menu">
  <?php $home_page = get_the_title( get_option('page_on_front')); ?>
  <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
  <?php
  // if there is a parent, display the link to go back to parent page
  $parent_title = get_the_title( $post->post_parent );
  if ( $parent_title != the_title('', '', false) ) { ?>
  <li role="menuitem"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
  <?php } else if ( $parent_title == the_title('', '', false)) { ?>
  <li class="last" role="menuitem"><?php echo $parent_title; ?></li>
  <?php }
  // if the page is a child page display page title
  if
  ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
  <?php the_title('<li class="last">', '</li>'); ?>
  <?php } ?>
</ul>
</div>
<div class="small-12 medium-6 columns show-for-large-up">
<div class="medium-6 columns banner-logo">
  <a href="<?php echo esc_html('https://services.smarthinking.com/login/login.php?'); ?>" title="<?php echo _e('online tutoring with smarthinking') ?>"><img src="<?php echo esc_html('https://www.germanna.edu/wp-content/uploads/2017/07/smarthinking-logo.png '); ?>" height="68" width="255" alt="<?php echo _e('smarthinking logo'); ?>"></a>
</div>
<div class="medium-6 columns">
  <div class="print-icons ">
    <?php //gets custom field for program icons "print_icons" //
    echo get_post_meta($post->ID, 'print_icons', true); ?>
  </div>
</div>
</div>
</div>
</div>
<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5484;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) { ?>
<div data-alert class='alert-box alert'>
<?php echo "$content"; ?>
<a href='<?php echo esc_html('#'); ?>' class='close'><span class='fa fa-times-circle' aria-hidden="true"></span></a></div>
<?php
}
else {
}
?>
<div class='subpage-hero'>
<div id='bg'>
<?php the_post_thumbnail('', array('class' => 'img-responsive'));  ?>
</div>
</div>
<?php }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
<div class="row without-image">
<div class="small-12 columns'">
<div class="small-12 medium-6 columns">
  <h1><?php echo the_title(); ?></h1>
  <ul class="breadcrumbs" role="menu">
    
    <?php $home_page = get_the_title( get_option('page_on_front')); ?>
    <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
    
    <?php
    // if there is a parent, display the link to go back to parent page
    $parent_title = get_the_title( $post->post_parent );
    if ( $parent_title != the_title('', '', false) ) { ?>
    <li role="menuitem"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
    <?php } else if ( $parent_title == the_title('', '', false)) { ?>
    
    <li class="last" role="menuitem"><?php echo $parent_title; ?></li>
    <?php }
    // if the page is a child page display page title
    if
    ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
    <?php the_title('<li class="last">', '</li>'); ?>
    <?php } ?>
  </ul>
</div>
<div class="small-12 medium-6 columns  show-for-large-up">
  <div class="medium-6 columns banner-logo">
    <a href="<?php echo esc_html('https://services.smarthinking.com/login/login.php?'); ?>" title="<?php echo _e('online tutoring with smarthinking') ?>"><img src="<?php echo esc_html('https://www.germanna.edu/wp-content/uploads/2017/07/smarthinking-logo.png '); ?>" height="68" width="255" alt="<?php echo _e('smarthinking logo'); ?>"></a>
  </div>
  <div class="medium-6 columns">
    <div class="print-icons ">
      <?php //gets custom field for program icons "print_icons" //
      echo get_post_meta($post->ID, 'print_icons', true); ?>
    </div>
    
  </div>
</div>
</div>
</div>
<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5484;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) { ?>
<div data-alert class='alert-box alert'>
<?php echo "$content"; ?>
<a href='<?php echo esc_html('#'); ?>' class='close'><span class='fa fa-times-circle' aria-hidden="true"></span></a></div>
<?php
}
else {
}
} ?>
</div>
</div>
</div>