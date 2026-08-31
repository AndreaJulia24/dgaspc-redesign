<?php 
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
$requested_url = esc_url( (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" );
?>

<main class="py-5 bg-light min-vh-100 d-flex align-items-center">
    <div class="container text-center">
        <div class="card border-0 rounded-4 shadow p-4 p-md-5 mx-auto bg-white" style="max-width: 600px;">
            <div class="text-danger display-1 fw-bold mb-2">404</div>
            <h2 class="fw-bold text-dark mb-3">
                <?php echo $is_hu ? 'Az oldal nem található' : 'Pagina nu a fost găsită'; ?>
            </h2>
            
            <div class="alert alert-secondary text-start small font-monospace mb-4">
                <strong>Error diagnosis:</strong><br>
                • <strong>Requested URL:</strong> <?php echo $requested_url; ?><br>
                • <strong>Status:</strong> HTTP 404 Not Found
            </div>

            <a href="<?php echo esc_url( function_exists('pll_home_url') ? pll_home_url() : home_url('/') ); ?>" class="btn btn-primary fw-semibold px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-arrow-left me-2"></i><?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>

