<?php
/**
 * Set a custom excerpt length for WordPress posts.
 * 
 * This controls how many words appear in the_excerpt().
 * Default is 55 words; you can change it to any number.
 * Works with both classic and FSE themes.
 */

add_filter('excerpt_length', function($length) {
    return 20; // Change 20 to the number of words you want
}, 999);

/**
 * Optional: customize the "read more" text at the end of excerpts
 */
add_filter('excerpt_more', function($more) {
    return '...'; // You can also use ' [Read More]' or any custom text
});
