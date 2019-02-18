<?php
/**
 * Remove SKU from product page
 */

add_filter( 'wc_product_sku_enabled', 'tgt_remove_product_page_skus' );

function tgt_remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }
    return $enabled;
}