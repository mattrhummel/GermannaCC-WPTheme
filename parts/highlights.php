<?php 
$highlights_heading = get_field('highlights_heading'); 
?>
<!--Germanna Highlights and Upcoming Events Row-->
<div class="module parallax parallax-1 no-margin">
  <div class="highlights">
  <div class="container">
  
    <h2 class="text-center"><?php echo $highlights_heading; ?></h2>
    <!--Get Germanna Highlights Excerpts-->
    <article role="article">
      <div class="highlights-slider-container">
        <ul class="bxslider3 highlights-content">
          <?php
          global $post;
          $myposts = get_posts('post');
          foreach($myposts as $post) :
          ?>
          <li>
            <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>">
              <div class="content">
                <h3><?php the_title(); /*Get Excerpt Title*/ ?></h3>
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
    </article>
  </div>

    <div class="row text-center">
    <a class="button read-more" href="/blog/">More Highlights</a>
  </div>
  </div>
</div>