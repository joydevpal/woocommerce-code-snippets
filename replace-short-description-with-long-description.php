<?php

// Remove short description if product tabs are not displayed
function dot_reorder_product_page() {
    if ( get_option('woocommerce_product_tabs') == false ) {
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    }
}
add_action( 'woocommerce_before_main_content', 'dot_reorder_product_page' );

// Display product long description in place of short description
function replace_product_short_description() {

    global $woocommerce, $post;

    if ( $post->post_content ) : ?>
        <div itemprop="description" class="item-description">
            <?php the_content(); ?>
        </div>
    <?php endif;
}
add_action( 'woocommerce_single_product_summary', 'replace_product_short_description', 20 );