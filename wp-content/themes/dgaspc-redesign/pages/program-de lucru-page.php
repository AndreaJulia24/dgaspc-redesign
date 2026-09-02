<?php 
/* 
* Template Name: Program de Lucru Page
*/

get_header(); ?>

<?php
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

$page_title = $is_hu ? 'Ügyfélfogadási és Fogadóórai Rend' : 'Program de Lucru și Audiențe';
$page_desc  = $is_hu 
    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság hivatalos ügyfélfogadási és vezetőségi fogadóórai rendje.' 
    : 'Programul oficial de lucru cu publicul și programul de audiențe al conducerii DGASPC Mureș.';
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">

        <!-- Back to Home Button -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
                <i class="bi bi-arrow-left"></i>
                <?php echo $is_hu ? 'Vissza a főoldalra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="fw-bold text-dark mb-2"><?php echo esc_html($page_title); ?></h1>
                <p class="text-secondary mx-auto" style="max-width: 700px;"><?php echo esc_html($page_desc); ?></p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- 1. PROGRAM DE LUCRU CU PUBLICUL -->
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                    <div class="card-header bg-dark-blue p-4 text-white" style="background-color: #0b2545;">
                        <h4 class="fw-bold mb-0 text-white">
                            <i class="bi bi-clock-history text-warning me-2"></i>
                            <?php echo $is_hu ? 'Ügyfélfogadási Rend' : 'Program de Lucru cu Publicul'; ?>
                        </h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                            <li class="d-flex justify-content-between align-items-center p-3 bg-light rounded-3 border">
                                <span class="fw-semibold text-dark"><i class="bi bi-calendar-range text-primary me-2"></i><?php echo $is_hu ? ' Hétfő - Csütörtök ' : ' Luni - Joi '; ?></span>
                                <span class="badge bg-primary fs-6 px-3 py-2"> 8.00 - 14.00 </span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center p-3 bg-light rounded-3 border">
                                <span class="fw-semibold text-dark"><i class="bi bi-calendar-event text-primary me-2"></i><?php echo $is_hu ? ' Péntek ' : 'Vineri '; ?></span>
                                <span class="badge bg-success fs-6 px-3 py-2"> 8.00 - 12.00 </span> 
                            </li>
                        </ul>
                        <div class="alert alert-warning border-0 rounded-3 small mb-0 p-3">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <?php echo $is_hu 
                                ? 'Péntekenként nincs ügyfélfogadás a Nyilvántartási, Kifizetési és Szociális Támogatási Osztályon.' 
                                : 'În zilele de Vineri nu este program de lucru cu publicul la Serviciul de Evidență, Plăți și Beneficii de Asistență Socială.'; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. PROGRAM DE AUDIENȚĂ -->
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                    <div class="card-header bg-dark-blue p-4 text-white" style="background-color: #0b2545;">
                        <h4 class="fw-bold mb-0 text-white">
                            <i class="bi bi-journal-check text-warning me-2"></i>
                            <?php echo $is_hu ? 'Fogadóórai Rend' : 'Program de Audiențe'; ?>
                        </h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex flex-column gap-3">
                            
                            <div class="p-3 bg-light rounded-3 border">
                                <div class="small text-primary fw-bold text-uppercase mb-1">Director General</div>
                                <div class="fw-bold text-dark fs-6 mb-2">MIKLEA HAJNAL KATALIN</div>
                                <div class="d-flex align-items-center text-secondary small">
                                    <i class="bi bi-clock me-1 text-muted"></i> <strong> Luni: </strong> 10.00 - 12.00
                                </div>
                            </div>

                            <div class="p-3 bg-light rounded-3 border">
                                <div class="small text-primary fw-bold text-uppercase mb-1">Director General Adjunct</div>
                                <div class="fw-bold text-dark fs-6 mb-2">Deak Elida Maria</div>
                                <div class="d-flex align-items-center text-secondary small">
                                    <i class="bi bi-clock me-1 text-muted"></i> <strong> Marti: </strong> 9.00 - 12.00
                                </div>
                            </div>

                            <div class="p-3 bg-light rounded-3 border">
                                <div class="small text-primary fw-bold text-uppercase mb-1">Director General Adjunct</div>
                                <div class="fw-bold text-dark fs-6 mb-2"> Căliman Janina Crina </div>
                                <div class="d-flex align-items-center text-secondary small">
                                    <i class="bi bi-clock me-1 text-muted"></i> <strong> Marti: </strong> 10.00 - 12.00
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
