<?php
/*
 * Remove related products woocommerce carousel
 * 
 * Clear the query arguments for related products so none show.
 */
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10); 

function wc_remove_related_products( $args ) {
	return array();
}
