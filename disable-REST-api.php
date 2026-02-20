<?php
// Disable REST API access for non-authenticated users
add_filter('rest_authentication_errors', function($result) {
    if (!empty($result)) {
        return $result; // Already has an error, return it
    }
    if (!is_user_logged_in()) {
        return new WP_Error(
            'rest_forbidden',
            __('REST API restricted to authenticated users.'),
            array('status' => 401)
        );
    }
    return $result; // Authenticated users can access REST API
});
