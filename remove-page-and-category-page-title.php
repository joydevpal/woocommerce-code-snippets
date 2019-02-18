<?php
/**
 * Remove shop page and category page title
 */

add_filter( 'woocommerce_page_title', 'woo_shop_page_title');

function woo_shop_page_title( $page_title ) {
	if( 'Shop' == $page_title) {
	    return "";
	}
}