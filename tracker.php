<?php
// When user starts viewing a video, store the start time in user meta
function start_video_viewing_time() {
    $post_id = get_the_ID(); // Get post ID of the current post
    $user_id = get_current_user_id(); // Get current user's ID
    $video_id = get_field('video_id', $post_id); // Get video ID from ACF field
    if ($user_id && $video_id) {
        $start_time_key = 'video_'.$video_id.'_start_time';
        $start_time = time();
        update_user_meta($user_id, $start_time_key, $start_time);
    }
}

// Calculate viewing time and save data if exceeds 8 minutes
function check_and_save_viewing_data() {
    $post_id = get_the_ID(); // Get post ID of the current post
    $user_id = get_current_user_id(); // Get current user's ID
    $video_id = get_field('video_id', $post_id); // Get video ID from ACF field
    if ($user_id && $video_id) {
        $start_time_key = 'video_'.$video_id.'_start_time';
        $start_time = get_user_meta($user_id, $start_time_key, true);
        if ($start_time) {
            $viewing_time = time() - $start_time;
            if ($viewing_time >= 480) { // 8 minutes in seconds
                // Check if viewing data has not been saved already
                $video_viewed_key = 'video_'.$video_id.'_viewed';
                $video_viewed = get_user_meta($user_id, $video_viewed_key, true);
                if (!$video_viewed) {
                    // Save viewing data or perform desired action
                    update_user_meta($user_id, $video_viewed_key, true);
                }
            }
        }
    }
}
