<?php
/**
 * Change the number of column in shop page
 */

add_filter('loop_shop_columns', 'loop_columns');

if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3;
    }
} 