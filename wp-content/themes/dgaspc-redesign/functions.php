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


// 1. image support for the theme
function dgaspc_theme_setup() {
    add_theme_support('post-thumbnails'); // "Featured Image" 
}
add_action('after_setup_theme', 'dgaspc_theme_setup');


// CAMPAIGNS & PROJECTS CPT 
function register_campanii_custom_post_type() {
    register_taxonomy('campanie_category', 'campanie', array(
        'labels' => array(
            'name'          => 'Campaign and Project',
            'singular_name' => 'Campaign',
            'add_new_item'  => 'Add New Campaign or Project',
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
    ));

    register_post_type('campanie', array(
        'labels' => array(
            'name'          => 'Campaigns and Projects',
            'singular_name' => 'Campaign',
            'add_new_item'  => 'Add New Campaign',
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-megaphone',
        // 'thumbnail' for the image :
        'supports'      => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'show_in_rest'  => true,
        'taxonomies'    => array('campanie_category'),
    ));
}
add_action('init', 'register_campanii_custom_post_type');

//FOR THE SCRIPTS
function dgaspc_enqueue_scripts() {
    //for the stylesheet 
    wp_enqueue_style( 'dgaspc-style', get_stylesheet_uri() );

    //for the main.js script
    wp_enqueue_script(
        'dgaspc-main-script',
        get_template_directory_uri() . '/main.js',
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'dgaspc_enqueue_scripts' );