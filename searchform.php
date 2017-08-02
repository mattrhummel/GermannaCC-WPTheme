<?php do_action( 'foundationpress_before_searchform' ); ?>

<form role="search" method="get" id="searchform" action="http://germanna.edu/search_gcse/">
	<div class="row collapse">
		<?php do_action( 'foundationpress_searchform_top' ); ?>
		<div class="small-10 columns">
	
            
<input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">    			

<input type="hidden" name="ie" value="utf8" title="hidden" />

<input type="hidden" name="oe" value="utf8" title="hidden" />

<input type="text" name="q" id="search" title="search input" class='description_active' />

<input type=hidden name=domains value="http://www.germanna.edu" title="home" />

<input type=hidden name=sitesearch value="http://www.germanna.edu" title="home"  />
	</div>
		<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>
		<div class="small-2 columns text-right">
	
            <button type="submit" id="searchsubmit" class="prefix search-icon">
            	<i class="fa fa-search fa-1x"></i>
            </button>
		</div>
        
        
		<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>
	</div>
</form>



<?php do_action( 'foundationpress_after_searchform' ); ?>
