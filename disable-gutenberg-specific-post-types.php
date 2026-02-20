<?php
// Disable block editor for pages
add_filter('use_block_editor_for_post_type', function($use_block_editor, $post_type) {
    if ($post_type === 'page') return false;
    return $use_block_editor;
}, 10, 2);
