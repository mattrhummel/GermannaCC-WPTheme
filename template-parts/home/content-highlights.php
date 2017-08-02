<?php
$highlights_heading = get_field('highlights_heading');
?>
<!--Germanna Highlights and Upcoming Events Row-->
<section class="module parallax parallax-1 no-margin">
  <div class="row">
    <div class="container">
      
      <div class="highlights">
        <h2 class="text-center"><?php echo $highlights_heading; ?></h2>
        <!--Get Germanna Highlights Excerpts-->
          <div class="highlights-slider-container">
            <ul class="bxslider3 highlights-content">
              <?php
              global $post;
              $myposts = get_posts('post');
              foreach($myposts as $post) :
              ?>
              <li id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>">
                  <div class="content">
                    <?php the_title('<h3>', '</h3>'); /*Get Excerpt Title*/ ?>
                    <?php the_excerpt(); /*Display the excerpt*/ ?>
                  </div>
                </a>
              </li>
              <?php endforeach; ?>
              <!--End the loop-->
            </ul>
            <div class="outside">
              <span id="slider-prev3"></span>
              <span id="slider-next3"></span>
            </div>
          </div>
      </div>
      <div class="row text-center">
        <a class="button read-more" href="/blog/">More Highlights</a>
      </div>
    </div>
  </div>
</section>