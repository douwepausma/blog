<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf('&hellip;');
});

/**
 * Filter the except length to 20 words.
 *
 * @return int (Maybe) modified excerpt length.
 */
add_filter( 'excerpt_length', function () {
    return 20;
});