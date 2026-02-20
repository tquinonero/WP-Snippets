<?php
/**
 * Register a custom post type called "Book"
 * Beginner-friendly example with comments
 */
add_action('init', function() {

    // Define labels for the admin interface
    $labels = [
        'name' => 'Books',              // Plural name in admin menu
        'singular_name' => 'Book',      // Singular name for one item
        'menu_name' => 'Books',         // Menu name in admin sidebar
        'add_new' => 'Add New',         // Add New button text
        'add_new_item' => 'Add New Book', 
        'edit_item' => 'Edit Book',
        'new_item' => 'New Book',
        'view_item' => 'View Book',
        'search_items' => 'Search Books',
        'not_found' => 'No books found',
        'not_found_in_trash' => 'No books found in Trash'
    ];

    // Define the post type settings
    $args = [
        'labels' => $labels,
        'public' => true,                   // Make this post type visible on front-end
        'has_archive' => true,              // Enable archive page (example.com/books)
        'show_in_rest' => true,             // Enable Gutenberg block editor
        'menu_icon' => 'dashicons-book',    // Icon in admin menu
        'supports' => [                     // Features enabled for this post type
            'title',        // Add a title field
            'editor',       // Add content editor
            'thumbnail',    // Add featured image support
            'excerpt',      // Optional: add excerpt field
            'comments'      // Optional: allow comments
        ],
        'rewrite' => ['slug' => 'books'],   // URL slug for this post type
        'capability_type' => 'post'         // Use standard post capabilities
    ];

    // Register the custom post type
    register_post_type('book', $args);

});
