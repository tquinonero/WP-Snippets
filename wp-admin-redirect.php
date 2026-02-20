<?php
// Redirect non-logged-in users trying to access wp-admin
add_action('admin_init', function() {
    if (!is_user_logged_in()) {
        wp_redirect(home_url());
        exit;
    }
});
