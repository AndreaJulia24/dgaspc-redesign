<?php
/* Template Name: Interactive Map Page */
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="site-main map-page-container">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 
                <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>
        <div id="map" style="width: 100%; height: 600px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"></div>
    </div>
</main>

<?php get_footer(); ?>