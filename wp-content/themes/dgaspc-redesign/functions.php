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
        // Ensure this path matches where your style.css file physically lives
        wp_enqueue_style( 'dgaspc-style', get_template_directory_uri() . '/assets/design/style.css' );

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


    //FOR THE GOOGLE MAPS API SCRIPT
    function dgaspc_enqueue_google_maps_scripts() {
        $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

        // 2. Google Maps JS API 
        wp_enqueue_script(
            'google-maps-api',
            'https://maps.googleapis.com/maps/api/js?key=AIzaSyCB5m0WNmTC3ubmZ9ybCvU4uBt_EsadT0k&libraries=marker&callback=initMap&language=' . $current_lang,
            array(),
            null,
            true
        );

        // 3. Custom JS for the map
        wp_enqueue_script(
            'dgaspc-map-script',
            get_template_directory_uri() . '/map.js',
            array('google-maps-api'),
            '1.0.0',
            true
        );

        // 4. data and labels passed to the JS
        wp_localize_script('dgaspc-map-script', 'MapConfig', array(
            'jsonUrl'     => get_template_directory_uri() . '/assets/data/map_locations.json',
            'currentLang' => $current_lang,
            'labels'      => array(
                'phone'       => ($current_lang === 'hu') ? 'Telefon' : 'Telefon',
                'fax'         => ($current_lang === 'hu') ? 'Fax' : 'Fax',
                'contact'     => ($current_lang === 'hu') ? 'Kapcsolattartó' : 'Persoană de contact',
                'beneficiary' => ($current_lang === 'hu') ? 'Kedvezményezettek' : 'Beneficiari',
            )
        ));
    }
    add_action( 'wp_enqueue_scripts', 'dgaspc_enqueue_google_maps_scripts' );

    // Async and Defer filter implementation
    function dgaspc_add_async_defer_to_maps( $tag, $handle, $src ) {
        if ( 'google-maps-api' === $handle ) {
            return '<script src="' . esc_url( $src ) . '" async defer></script>';
        }
        return $tag;
    }
    // This line applies the filter function to WordPress script tags
    add_filter( 'script_loader_tag', 'dgaspc_add_async_defer_to_maps', 10, 3 );