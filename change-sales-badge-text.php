<?php

/**
 * Change "sale" badge text in product
*/
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);

function woocommerce_custom_sale_text($text, $post, $_product) {
    return '<span class="onsale">' . __( 'Sale', 'woocommerce' ) . '</span>';
}