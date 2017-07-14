<?php
/*
Plugin Name: Fix Paging
Description: Fixes paginator with custom permalinks
Version: 0.3
Author: Eduard "Nap" Kutuev
Author URI: http://www.napych.com
*/

remove_filter( 'template_redirect', 'redirect_canonical' );
add_filter( 'template_redirect', 'redirect_workaround' );

function redirect_workaround( $requested_url = null, $do_redirect = true ) {

	$uri = $requested_url ? $requested_url : $_SERVER['REQUEST_URI'];
	$category = get_option( 'category_base' ) ? get_option( 'category_base' ) . '/' : 'category/';
	$tag = get_option( 'tag_base' ) ? get_option( 'tag_base' ) . '/' : 'tag/';
	if( strpos( $uri, $category ) !== false or strpos( $uri, $tag ) !== false ) {
		$do_redirect = false;
	}
	redirect_canonical( $requested_url, $do_redirect );
}

