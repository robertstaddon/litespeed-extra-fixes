<?php
/*
	Plugin Name: LiteSpeed Extra Fixes
	Description: Fix functionality of Extra theme with LiteSpeed Cache
	Version: 1.0
	Author: Abundant Designs LLC
	Author URI: https://www.abundantdesigns.com
	License: GPLv2 or later
	Text Domain: litespeed-divi-fixes
 */
 

/**
 * Register theme nonces with LiteSpeed
 * https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:api#nonce_issues
 */
function litespeed_extra_fixes_optin_nonce() {
	if ( method_exists( 'LiteSpeed_Cache_API', 'nonce_action' ) ) {
		LiteSpeed_Cache_API::nonce_action( 'et_frontend_nonce' );
		LiteSpeed_Cache_API::nonce_action( 'et_ab_log_nonce' );
		LiteSpeed_Cache_API::nonce_action( 'rating_nonce' );
		LiteSpeed_Cache_API::nonce_action( 'timeline_nonce' );
		LiteSpeed_Cache_API::nonce_action( 'blog_feed_nonce' );
	}
}
add_action( 'init', 'litespeed_extra_fixes_optin_nonce' );
