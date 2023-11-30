function prevent_privilege_escalation() {
    // Remove the "activate_plugins" capability from the Editor role
    $editor_role = get_role('editor');
    $editor_role->remove_cap('activate_plugins');

    // Remove other capabilities from the Editor role
    $editor_role->remove_cap('edit_themes');
    $editor_role->remove_cap('install_themes');
    $editor_role->remove_cap('update_core');
    $editor_role->remove_cap('switch_themes');

    // Remove capabilities from the Subscriber role
    $subscriber_role = get_role('subscriber');
    $subscriber_role->remove_cap('activate_plugins');
    $subscriber_role->remove_cap('upload_files');
    $subscriber_role->remove_cap('edit_posts');
    $subscriber_role->remove_cap('delete_posts');
    $subscriber_role->remove_cap('edit_others_posts');
    $subscriber_role->remove_cap('delete_others_posts');
}
add_action('init', 'prevent_privilege_escalation');

