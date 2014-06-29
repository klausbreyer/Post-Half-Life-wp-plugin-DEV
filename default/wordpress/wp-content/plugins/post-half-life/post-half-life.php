<?php
/**
 * @package Post_Half_Life
 * @version 0.1
 */
/*
Plugin Name: Post-Half-Life (p½)
Plugin URI: http://klaus-breyer.de/projekte/post-half-life
Description: A Plugin for calculating the half life of a blog post. So you can determine which content and what posting time is best. 
Author: Klaus Breyer
Version: 0.1
Author URI: http://klaus-breyer.de
*/
function phl_counter() {
	echo "footer counter hier";
}
add_action( 'wp_footer', 'phl_counter' );

?>
