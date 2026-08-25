<?php 

function register_documente_custom_post_type() {
    
    // 1. Category for the documents --taxonomy
    register_taxonomy('document_category', 'document', array(
        'labels' => array(
            'name'          => 'Document Categories',
            'singular_name' => 'Document Category',
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_rest'      => true, // Gutenberg editor support
    ));

    // 2. Custom Post Type for the documents
    register_post_type('document', array(
        'labels' => array(
            'name'          => 'Forms and Documents',
            'singular_name' => 'Document',
            'add_new_item'  => 'Add New Document',
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-media-document',
        'supports'      => array('title', 'editor', 'excerpt', 'custom-fields'),
        'show_in_rest'  => true,
        'taxonomies'    => array('document_category'),
    ));
}
add_action('init', 'register_documente_custom_post_type');