<?php
if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '<p class="updated" datetime="'. get_the_date( 'c' ) .'">'. sprintf(get_the_date() ) .'</p>';
	}
endif;
?>