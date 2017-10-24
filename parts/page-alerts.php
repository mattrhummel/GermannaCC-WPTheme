<?php
function foundationgermanna_alerts($alert) {
	$alert = "<div class='alert-box alert'>
                <?php $content; ?>
                <a href='#' class='close' aria-hidden='true' role='button'><span class='icon-remove-circle'></span></a>
                </div>"
    ;
	
	return $alert;
}
?>