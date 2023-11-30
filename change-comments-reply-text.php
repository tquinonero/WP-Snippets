function custom_comment_form_defaults($defaults) {
    $defaults['title_reply'] = 'Leave a Comment and Stay in Touch with Vikki!';
    return $defaults;
}
add_filter('comment_form_defaults', 'custom_comment_form_defaults');
