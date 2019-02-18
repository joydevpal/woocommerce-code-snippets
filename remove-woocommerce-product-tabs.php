<?php
/**
 * Remove woocommerce product tabs
 */

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );
    unset( $tabs['reviews'] );
    unset( $tabs['additional_information'] );

    return $tabs;
}