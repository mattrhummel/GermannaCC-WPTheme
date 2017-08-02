    <!--Page Sub Banner-->
<div class="row">
    <div class="container">

    <div class="small-12 large-12 columns" role="main">
        <?php // if the page has a featured image
        if  (has_post_thumbnail( $post->ID ) )  { ?>
        <div class='row'>
        <div class='small-12 large-12 columns'>
        <h1 role='heading'>
        Workforce Highlights
        </h1>
        </div>
        </div>
        <div class="row">
            <div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li><a href="/workforce/">Workforce Services</a></li>
                               <li><a href="/blog/workforce-highlights/">Workforce Highlights</a></li>
                    <?php
                    // if there is a parent, display the link to go back to parent page
                    $parent_title = get_the_title( $post->post_parent );
                    if ( $parent_title != the_title( ' ', ' ', false ) ) {
                    echo '<li class="last">';
                    echo the_title();
                    echo '</li>';
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
        
        }  else {  //.pagesubbanner
        // if page doesn't have a featured image
        ?>
        <div class="row without-image" role="banner">
            <div class="small-12 large-12 columns'">
                <h1>Workforce Highlights</h1>
                <div class="row">
                    <div class="small-12 large-12 columns" role="main">
                        <ul class="breadcrumbs">
                          <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li><a href="/workforce/">Workforce Services</a></li>
                               <li><a href="/blog/workforce-highlights/">Workforce Highlights</a></li>
                            <?php
                            // if there is a parent, display the link to go back to parent page
                            $parent_title = get_the_title( $post->post_parent );
                            if ( $parent_title != the_title( ' ', ' ', false ) ) {
                    echo '<li>';
                    echo the_title();
                    echo '</li>';
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