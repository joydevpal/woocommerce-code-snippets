<?php

/**
 * Hide featured image from gallery in single product
 */

add_filter('woocommerce_single_product_image_thumbnail_html', 'remove_featured_image', 10, 2);

function remove_featured_image($html, $attachment_id) {
    global $post, $product;

    $featured_image = get_post_thumbnail_id($post->ID);
    if ($attachment_id == $featured_image)
        $html = '';

    return $html;
}