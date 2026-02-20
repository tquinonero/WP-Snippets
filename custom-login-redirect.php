<?php
// Redirect users after login to homepage
add_filter('login_redirect', function($redirect_to, $request, $user) {
    return home_url();
}, 10, 3);
