<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'newspaper-x' ) ?></span>
		<input class="search-field" placeholder="<?php echo esc_html__( 'Search ...', 'newspaper-x' ) ?>" value="" name="s"
		       type="search">
	</label>
	<button class="search-submit" value="<?php echo esc_html__( 'Search  ', 'newspaper-x' ) ?>" type="submit"><span class="fa fa-search"></span></button>
</form>