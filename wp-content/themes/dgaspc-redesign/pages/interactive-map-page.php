<?php
/* Template Name: Interactive Map Page */
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="site-main map-page-container">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <h1 class="mb-4" style="font-size: 2rem; font-weight: bold; color: #0f145c;">
            <?php echo $is_hu ? 'Interaktív térkép' : 'Hartă interactivă'; ?><?php echo $is_hu ? ' (Interaktív térkép)' : ' (Hartă interactivă)'; ?>
        </h1>
        <p class="mb-4" style="font-size: 1rem; color: #1f2937;">
            <?php echo $is_hu ? 'Fedezze fel a gyermekek számára nyújtott szolgáltatásokat a térképen!' : 'Descoperiți serviciile pentru copii pe hartă!'; ?>
        </p>
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