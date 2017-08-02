<!--Page Sub Banner-->
<div class="row">
<div class="container">
    
    <div class="small-12 large-12 columns">
        <?php // if the page has a featured image
        if  (has_post_thumbnail( $post->ID ) )  { ?>
 <!--no featured image banner-->
            <div class="row without-image">
                <div class="small-12 large-12 columns'">
                    <div class="row">
                        <div class="small-12 large-7 columns" >
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
                                echo '<li><strong>';
                                    the_title();
                                echo '</strong></li>';
                                } ?>
                            </ul>
                        </div>
                     <div class="small-12 medium-3 large-3 columns print-icons">
                        <?php //gets custom field for program icons "print_icons" //
                        echo get_post_meta($post->ID, 'print_icons', true); ?>
                        
                    </div>
                    <div class="small-12 medium-2 large-2 columns" style="margin-top: 50px; padding-left: 20px;">
                        <a href="https://services.smarthinking.com/login/login.php?" target="_blank" title="online tutoring with smarthinking"><img src="https://www.germanna.edu/wp-content/uploads/2017/07/smarthinking-logo.png" height="68" width="255" alt="smarthinking logo" classs="img-responsive"/></a>
                        
                    </div>
                
                    </div>
                </div>
            </div>
            
                    <?php // Gets the alert custom post type id for each sub page needing special announcement
                    $post_id = 5484;
                    $queried_post = get_post($post_id);
                    $content = $queried_post->post_content;
                    $content = apply_filters('the_content', $content);
                    if ($content) {
                    echo "<div data-alert class='alert-box alert'>";
                        echo "$content";
                        echo "<a href='#' class='close'><i class='fa fa-times-circle'></i></a></div>";
                        
                        }
                        else {
                        }
                        ?>
                  

<div class='subpage-hero'>
    <div id='bg'>
        <?php the_post_thumbnail( array() );  ?>  
    </div>
</div>
            <?php }  else {  //.pagesubbanner
            // if page doesn't have a featured image
            ?>
            <!--no featured image banner-->
            <div class="row without-image">
                <div class="small-12 large-12 columns'">
                    <div class="row">
                        <div class="small-12 large-7 columns">
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
                                echo '<li><strong>';
                                    the_title();
                                echo '</strong></li>';
                                } ?>
                            </ul>
                        </div>
                             <div class="small-12 medium-3 large-3 columns print-icons">
                        <?php //gets custom field for program icons "print_icons" //
                        echo get_post_meta($post->ID, 'print_icons', true); ?>
                        
                    </div>
                    <div class="small-12 medium-2 large-2 columns" style="margin-top: 50px; padding-left: 20px;">
                        <a href="https://services.smarthinking.com/login/login.php?" target="_blank" title="online tutoring with smarthinking"><img src="https://www.germanna.edu/wp-content/uploads/2017/07/smarthinking-logo.png" height="68" width="255" alt="smarthinking logo" classs="img-responsive"/></a>
                        
                    </div>
                    </div>
                </div>
            </div>
       
                    <?php // Gets the alert custom post type id for each sub page needing special announcement
                    $post_id = 5484;
                    $queried_post = get_post($post_id);
                    $content = $queried_post->post_content;
                    $content = apply_filters('the_content', $content);
                    if ($content) {
                    echo "<div data-alert class='alert-box alert'>";
                        echo "$content";
                        echo "<a href='#' class='close'><i class='fa fa-times-circle'></i></a></div>";
                        
                        }
                        else {
                        }
                        ?>
                    
                <?php } ?>
        </div>
        </div>

        </div>


        <!--.noimagebanner-->