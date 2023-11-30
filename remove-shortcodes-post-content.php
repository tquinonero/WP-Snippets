//Do not run in live site or you fucked up. Removes shortcodes from post-content in post.
function remove_shortcodes_from_all_posts() {
    // Query all posts
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1, // Retrieve all posts
        'post_status'    => 'publish', // Only get published posts
    );

    $all_posts = get_posts($args);

    foreach ($all_posts as $post) {
        // Remove shortcodes
        $post->post_content = preg_replace('/\[[^\]]+\]/', '', $post->post_content);

        // Update the post
        wp_update_post($post);
    }
}

// Run the function
remove_shortcodes_from_all_posts();
