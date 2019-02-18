<?php

/**
* Add continue shopping button on cart page
*/

add_action( 'woocommerce_before_cart_table', 'woo_add_continue_shopping_button_to_cart' );

function woo_add_continue_shopping_button_to_cart() {
    $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
    echo '<div class="woocommerce-message">';
    echo ' <a href="'.$shop_page_url.'" class="button">' . __( 'Continue Shopping', 'woocommerce' ) . '</a>'  . __( 'Do not you need anything else?', 'woocommerce' );
    echo '</div>';
}