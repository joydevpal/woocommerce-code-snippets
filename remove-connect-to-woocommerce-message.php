<?php

/**
 * Remove "connent to" woocommerce message from admin notices
 */

add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );