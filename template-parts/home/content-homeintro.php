<?php
$apply_heading = get_field('apply_heading');
$apply_description = get_field('apply_description');
$apply_url = get_field('apply_url');
$register_heading = get_field('register_heading');
$register_description = get_field('register_description');
$register_url = get_field('register_url');
$payment_heading = get_field('payment_heading');
$payment_description = get_field('payment_description');
$payment_url = get_field('payment_url');
$announcement_heading = get_field('announcement_heading');
$announcement_description = get_field('announcement_description');
$announcement_url = get_field('announcement_url');
$extra_box1_heading = get_field('extra_box1_heading');
$extra_box1_description = get_field('extra_box1_description');
$extra_box1_url = get_field('extra_box1_url');
$extra_box2_heading = get_field('extra_box2_heading');
$extra_box2_description = get_field('extra_box2_description');
$extra_box2_url = get_field('extra_box2_url');
$events_button_url = get_field('events_button_url');
$events_button_text = get_field('events_button_text');
?>
<main class="home-intro" id="main">
<div class="row">
<div class="container">
<div class="small-12 columns">
<div class="small-12 medium-8 large-9 columns home-features-intro ">
<div class="small-12 columns">
    <div class="small-12 large-4 columns home-panels">
        <ul class="feature-panels text-center">
            <li class="apply-panel">
                <a href="<?php echo $apply_url; //apply box links to online application?>">
                    <div class="panel-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/board.png" height="35" width="35" alt="white board" />
                    </div>
                    <div class="panel-content">
                        <span class="title"><?php echo $apply_heading; ?></span>
                        <span class="description"><?php echo $apply_description; ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="small-12  large-4  columns home-panels">
        <ul class="feature-panels text-center">
            <li class="register-panel">
                <a href="<?php echo $register_url;  //register box links to class schedule?>">
                    <div class="panel-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pencil.png" height="25" width="25" alt="wooden pencil" />
                    </div>
                    <div class="panel-content">
                        <span class="title register-title"><?php echo $register_heading; ?></span>
                        <span class="description"><?php echo $register_description; ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="small-12 large-4 columns home-panels">
        <ul class="feature-panels text-center">
            <li class="payment-panel">
                <a href="<?php echo $payment_url; //payment box links to paying for college ?>">
                    <div class="panel-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pig.png" height="45" width="45" alt="payment icon" />
                    </div>
                    <div class="panel-content">
                        <span class="title"><?php echo $payment_heading; ?></span>
                        <span class="description"><?php echo $payment_description; ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="small-12 columns panel home-news">
        <a href="<?php echo $announcement_url; //middle special announcment box ?>" class="panel-content">
            <h3 class="title">
                <?php echo $announcement_heading; ?>
            </h3>
            <p class="description">
                <?php echo $announcement_description; ?>
            </p>

        </a>
    </div>
</div>
</div>
<div class="small-12 medium-4 large-3 columns events events-box">
<h3>
    <?php echo _e('Upcoming Events'); ?>
</h3>
<script type="text/javascript" src="<?php echo esc_html('https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&amp;number=5&amp;category=9-0&amp;adpid=8&amp;nem=No+events+are+available+that+match+your+request');?>">
</script>

<a href="<?php echo esc_html('#'); ?>" data-reveal-id="moreEvents" class="button default text-center">
    <?php echo _e('View More Events');?>
</a>

<div id="moreEvents" class="reveal-modal events-popup medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">
        <?php echo _e('Upcoming Events'); ?>
    </h2>

    <script type="text/javascript" src="<?php echo esc_html('https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&amp;number=30&amp;category=9-0&amp;adpid=8&amp;nem=No+events+are+available+that+match+your+request')?>">
    </script>


    <a href="<?php echo $events_button_url; ?>" class="button default text-center">
        <?php echo $events_button_text; ?>
    </a>


    <a class="close-reveal-modal" aria-label="Close">
        <?php echo _e('&#215;');?>
    </a>
</div>

</div>
</div>
</div>
</div>
</main>
