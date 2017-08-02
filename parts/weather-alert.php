<?php
if (is_page()) {
$post_id = 4963;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) { // if there is a special announcement or a weather alert ?>
<div data-alert class='alert-box weather show-for-medium-up'>
  <div class='row '>
    <div class='container'>
      <div class='small-12 medium-11 columns'>
        <?php echo $content; //content for the desktop special announcements ?>
      </div>
    </div>
  </div>
  <a href='#' class='close' aria-hidden="true"><span class='fa fa-times-circle'></span></a>
</div>
<div class='show-for-small-only text-center' tabindex="0">
  <div class='row'>
    
    <a href="#" data-reveal-id="announcement" class="button default expand tiny no-margin-bottom" aria-label="weather alert">Special Announcement&hellip;</a>
    <div id="announcement" class="reveal-modal" data-reveal aria-labelledby="announcement" aria-hidden="true" role="dialog">
      <?php  echo "$content";  //content for the mobile special announcements  ?>
      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    
  </div>
</div>
<?php }  // if there is not a special announcement or weather alert do nothing.
else {
}
}
?>