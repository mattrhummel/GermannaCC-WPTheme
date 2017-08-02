<!--Page Sub Banner-->
<div class="row">
    <div class="container">

    <div class="small-12 large-12 columns" role="main">
        <?php // if the page has a featured image
        if  (has_post_thumbnail( $post->ID ) )  { ?>
        <?php
        echo "<div class='row'>";
        echo "<div class='small-12 large-12 columns'>";
        echo "<h1 role='heading'>";
        echo the_title();
        echo "</h1>";
        echo "</div>";
        echo "</div>";
        ?>
        <div class="row">
            <div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <?php
                    // if there is a parent, display the link to go back to parent page
                    $parent_title = get_the_title( $post->post_parent );
                    if ( $parent_title != the_title( ' ', ' ', false ) ) {
                    echo '<li><strong><a href="' . get_permalink( $post->post_parent ) . '"     title="' . $parent_title . '">' .               $parent_title . '</a></strong></li>';
                    }
                    // if the page is a child page display page title
                    if ( is_page() && $post->post_parent > 0 ) {
                    echo '<li class="last">';
                        the_title();
                    echo '</li>';
                    } ?>
                </ul>
            </div>
        </div>
        <?php  //Attach featured image to the page
        echo "<div class='subpage-hero'>";
        echo "<div id='bg'>";
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        echo "<img src='$image[0]' alt='header image' width='1900' height='300' />";
        echo "</div>";
        echo "</div>";
        }  else {  //.pagesubbanner
        // if page doesn't have a featured image
        ?>
        <div class="row without-image" role="banner">
            <div class="small-12 large-12 columns'">
                <h1><?php echo the_title(); ?></h1>
                <div class="row">
                    <div class="small-12 large-12 columns" role="main">
                        <ul class="breadcrumbs">
                            <li><a href="<?php echo get_site_url( ); ?>">Home</a></li>
                            <?php
                            // if there is a parent, display the link to go back to parent page
                            $parent_title = get_the_title( $post->post_parent );
                            if ( $parent_title != the_title( ' ', ' ', false ) ) {
                            echo '<li class="last"><a href="' . get_permalink( $post->post_parent ) . '"title="' . $parent_title . '">' .               $parent_title . '</a></li>';
                            }
                            // if the page is a child page display page title
                            if ( is_page() && $post->post_parent > 0 ) {
                            echo '<li class="last">';
                                the_title();
                            echo '</li>';
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</div>
<!--.noimagebanner-->