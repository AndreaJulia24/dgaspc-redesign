<?php 
/* Template Name: Interactive Map Page
*/

get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');


$page_title = $is_hu ? 'Interaktív Térkép' : 'Hartă Interactivă';
$page_desc  = $is_hu 
    ? 'Keresse meg az Önhöz legközelebbi intézményünket Maros megyében.' 
    : 'Găsiți cea mai apropiată instituție din județul Mureș.';
?>

<main class="site-main map-page-container">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <h1 style="margin-bottom: 10px;"><?php echo esc_html($page_title); ?></h1>
        <p style="margin-bottom: 20px; color: #666;"><?php echo esc_html($page_desc); ?></p>

        
        <div id="map" style="width: 100%; height: 600px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"></div>

    </div>
</main>

<?php get_footer(); ?>