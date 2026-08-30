<?php
/*
 * Template Name: Organigrama Template
 */
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!-- BACK TO HOME -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-decoration-none text-secondary small fw-semibold d-inline-flex align-items-center gap-1">
                &larr; <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2">
                <?php echo $is_hu ? 'Szervezeti Felépítés és Működés' : 'Organigrama și Structura DGASPC Mureș'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 700px;">
                <?php echo $is_hu 
                    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság hivatalos szervezeti struktúrája, funkciójegyzéke és működési szabályzata.' 
                    : 'Structura organizatorică oficială, statul de funcții și regulamentul de organizare și funcționare al DGASPC Mureș.'; ?>
            </p>
        </div>

        <!-- DOCUMENT CARDS GRID -->
        <div class="row g-4 justify-content-center">
            
            <!-- 1. ORGANIGRAMA -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border rounded-3 bg-white shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">
                            <?php echo $is_hu ? 'Aktuális Szervezeti Felépítés' : 'Organigrama Actuală'; ?>
                        </h5>
                        <p class="text-secondary small mb-4">
                            <?php echo $is_hu 
                                ? 'A DGASPC Mureș osztályainak és intézményeinek hierarchikus szervezeti felépítése.' 
                                : 'Structura ierarhică și departamentele din cadrul DGASPC Mureș aprobate oficial.'; ?>
                        </p>
                    </div>
                    <a href="https://www.dgaspcmures.ro/docs/2025/Organigrama.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm w-100">
                        <i class="bi bi-file-earmark-pdf me-2"></i> <?php echo $is_hu ? 'Organigramma megtekintése (PDF)' : 'Descarcă Organigrama (PDF)'; ?> &rarr;
                    </a>
                </div>
            </div>

            <!-- 2. STAT DE FUNCTII -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border rounded-3 bg-white shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">
                            <?php echo $is_hu ? 'Funkciójegyzék és Álláshelyek' : 'Statul de Funcții'; ?>
                        </h5>
                        <p class="text-secondary small mb-4">
                            <?php echo $is_hu 
                                ? 'A jóváhagyott álláshelyek és szakmai beosztások részletes jegyzéke.' 
                                : 'Evidența funcțiilor publice și contractuale aprobate în cadrul instituției.'; ?>
                        </p>
                    </div>
                    <a href="https://www.dgaspcmures.ro/docs/2025/Stat_de_functii.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm w-100">
                        <i class="bi bi-file-earmark-pdf me-2"></i> <?php echo $is_hu ? 'Funkciójegyzék megtekintése (PDF)' : 'Descarcă Statul de Funcții (PDF)'; ?> &rarr;
                    </a>
                </div>
            </div>

            <!-- 3. ROF APARAT PROPRIU -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border rounded-3 bg-white shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">
                            <?php echo $is_hu ? 'Szervezeti és Működési Szabályzat' : 'Regulament de Organizare și Funcționare (ROF)'; ?>
                        </h5>
                        <p class="text-secondary small mb-4">
                            <?php echo $is_hu 
                                ? 'A belső apparátus működési és hatásköri szabályzata (ROF).' 
                                : 'Regulamentul de organizare și funcționare al aparatului de specialitate al DGASPC.'; ?>
                        </p>
                    </div>
                    <a href="https://www.dgaspcmures.ro/docs/2025/ROF_Aparat_propriu.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm w-100">
                        <i class="bi bi-file-earmark-pdf me-2"></i> <?php echo $is_hu ? 'ROF megtekintése (PDF)' : 'Descarcă ROF (PDF)'; ?> &rarr;
                    </a>
                </div>
            </div>

        </div>

        <!-- HCJ FOOTNOTE -->
        <div class="mt-5 text-center">
            <span class="badge bg-light text-secondary border px-3 py-2 fw-normal">
                <i class="bi bi-info-circle me-1"></i>
                <?php echo $is_hu 
                    ? 'Jóváhagyva a Maros Megyei Tanács 6/2025. számú határozata alapján.' 
                    : 'Aprobat prin Hotărârea Consiliului Județean Mureș nr. 6 din 29.01.2025.'; ?>
            </span>
        </div>

    </div>
</main>

<?php get_footer(); ?>