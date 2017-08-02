    <!--Page Sub Banner-->
<div class="row">
    <div class="container">

    <div class="small-12 large-12 columns" role="main">
        <?php // if the page has a featured image
        if  (has_post_thumbnail( $post->ID ) )  { ?>
        <div class='row'>
        <div class='small-12 large-12 columns'>
        <h1 role='heading'>
        Germanna Highlights
        </h1>
        </div>
        </div>
        <div class="row">
            <div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li><a href="/blog/">Blog</a></li>
                    <li>Highlights</li>
                </ul>
            </div>
        </div>
        <?php  //Attach featured image to the page
        
        }  else {  //.pagesubbanner
        // if page doesn't have a featured image
        ?>
        <div class="row without-image" role="banner">
            <div class="small-12 large-12 columns'">
                <h1>Germanna Highlights</h1>
                <div class="row">
                    <div class="small-12 large-12 columns" role="main">
                        <ul class="breadcrumbs">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li><a href="/blog/">Blog</a></li>
                    <li>Highlights</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</div>