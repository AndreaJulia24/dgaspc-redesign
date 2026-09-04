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

/*
  function dgaspc_enqueue_google_maps_scripts() {
        $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

            $api_key = '';

            $env_file = ABSPATH . '.env'; // Path to the .env file in the root directory of the WordPress installation

            if ( ! file_exists( $env_file ) ) {
                $env_file = get_template_directory() . '/.env';
            }

            if ( file_exists( $env_file ) && is_readable( $env_file ) ) {
                $lines = file( $env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
                if ( false !== $lines ) {
                    foreach ( $lines as $line ) {
                        $line = trim( $line );
                        if ( '' === $line || str_starts_with( $line, '#' ) ) {
                            continue;
                        }
                        if ( str_contains( $line, '=' ) ) {
                            list( $key, $value ) = explode( '=', $line, 2 );
                            if ( 'GOOGLE_MAPS_API_KEY' === trim( $key ) ) {
                                $api_key = trim( $value, " \t\n\r\0\x0B\"'" );
                                break;
                            }
                        }
                    }
                }
            }
            if ( empty( $api_key ) ) {
                $api_key = getenv('GOOGLE_MAPS_API_KEY');
            }

            if ( empty( $api_key ) && defined('GOOGLE_MAPS_API_KEY') ) {
                $api_key = GOOGLE_MAPS_API_KEY;
            }

            if ( empty( $api_key ) ) {
                wp_add_inline_script(
                    'dgaspc-main-script',
                    'console.error("DGASPC map error: A GOOGLE_MAPS_API_KEY not found in the .env file!");'
                );
                return;
            }

            // Google Maps JS API  
            wp_enqueue_script(
                'google-maps-api',
                'https://maps.googleapis.com/maps/api/js?key=' . esc_attr( $api_key ) . '&libraries=marker&callback=initMap&language=' . $current_lang,
                array(),
                null,
                true
            );

        // 2. Custom JS for the map 
        wp_enqueue_script(
            'dgaspc-map-script',
            get_template_directory_uri() . '/map.js',
            array('google-maps-api', 'jquery'),
            '1.0.2',
            true
        );

        // 3. Localize the script to pass data from PHP to JS
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

    // Async / Defer 
    function dgaspc_add_async_defer_to_maps( $tag, $handle, $src ) {
        if ( 'google-maps-api' === $handle ) {
            return '<script src="' . esc_url( $src ) . '" async defer></script>';
        }
        return $tag;
    }
    add_filter( 'script_loader_tag', 'dgaspc_add_async_defer_to_maps', 10, 3 );
*/
// LEAFLET MAP

function dgaspc_theme_map_scripts() {
    if (is_page_template('interactive-map-page.php') || is_page('harta-interactiva')) {
        wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4');
        wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', array(), '1.0');

        wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), '1.9.4', true);
        wp_enqueue_script('leaflet-js', get_template_directory_uri() . '/leaflet.js', array('leaflet-js'), '1.0', true);

        $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
        wp_localize_script('leaflet-js', 'MapConfig', array(
            'jsonUrl' => get_template_directory_uri() . '/assets/data/map_locations.json',
            'currentLang' => $current_lang,
            'labels' => array(
                'phone' => $current_lang === 'hu' ? 'Telefon' : 'Telefon',
                'contact' => $current_lang === 'hu' ? 'Kapcsolattartó' : 'Persoană de contact',
                'beneficiary' => $current_lang === 'hu' ? 'Kedvezményezettek' : 'Beneficiari'
            )
        ));
    }
}
add_action('wp_enqueue_scripts', 'dgaspc_theme_map_scripts');