<?php global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;?>

<form role="search" action="<?php bloginfo("home");?>" method="get" id="searchform">
	<input type="search" name="s" id="s" placeholder="Search and you will find" title="type keywords and press <enter>" size="30"
		results="0"
		<?php if(is_search()):?> value="<?php the_search_query();?>" <?php endif;?>
		<?php if($is_gecko || $is_IE):?> value="Search and you will find" onclick="this.select();"<?php endif; ?>
	 />
</form>