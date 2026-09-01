<?php 
/*
* Template Name: Raport Un Abuz Page
*/

get_header();
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!-- VISSZA GOMB -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- TITLE HEADER -->
        <div class="text-center mb-5">
            <span class="badge bg-danger fs-6 px-3 py-2 mb-2">SOS / URGENȚE</span>
            <h1 class="fw-bold text-dark mb-2">
                <?php echo $is_hu ? 'Bántalmazás és Elhanyagolás Bejelentése' : 'Raportează un Caz de Abuz sau Neglijare'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 750px;">
                <?php echo $is_hu 
                    ? 'A CORAI és a Gyermekvédelmi Segélyszolgálat feladata a veszélyeztetett, bántalmazott, elhanyagolt vagy kizsákmányolt gyermekek és felnőttek azonnali védelme.' 
                    : 'Serviciul CORAI și Telefonul Copilului asigură preluarea și intervenția în regim de urgență pentru cazurile de abuz, neglijare, exploatare sau violență domestică.'; ?>
            </p>
        </div>

        <!--TELEFONUL COPILULUI CARD -->
        <div class="row g-4 mb-5">
            <!-- 119 TELEFONUL COPILULUI -->
            <div class="col-12 col-md-4">
                <div class="card border-danger border-2 rounded-4 bg-white shadow-sm p-4 text-center h-100">
                    <div class="d-inline-flex align-items-center justify-content-center bg-danger text-white rounded-circle mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="bi bi-telephone-fill fs-4"></i>
                    </div>
                    <h3 class="fw-bold text-danger">119</h3>
                    <h6 class="fw-bold text-dark mb-1"><?php echo $is_hu ? 'Gyermekvédelmi Segélyhívó' : 'Telefonul Copilului'; ?></h6>
                    <p class="text-muted small mb-3"><?php echo $is_hu ? 'Ingyenesen hívható 24/7' : 'Număr unic național gratuit 24/7'; ?></p>
                    <a href="tel:119" class="btn btn-danger btn-sm rounded-pill fw-semibold w-100 mt-auto">
                        <i class="bi bi-telephone-outbound me-1"></i> <?php echo $is_hu ? 'Hívás (119)' : 'Apelează 119'; ?>
                    </a>
                </div>
            </div>


        <!-- coraien link for reporting abuse -->
         <div class="col-12 col-md-4">
                <div class="card border rounded-4 bg-white shadow-sm p-4 text-center h-100">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="bi bi-shield-shaded fs-4"></i>
                    </div>
                    <h3 class="fw-bold text-primary">0265-211.211</h3>
                    <h6 class="fw-bold text-dark mb-1"><?php echo $is_hu ? 'DGASPC Diszpécserszolgálat' : 'Dispecerat DGASPC Mureș'; ?></h6>
                    <p class="text-muted small mb-3"><?php echo $is_hu ? 'CORAI és Mobil Kríziscsoport' : 'Echipa Mobilă / Intervenții CORAI'; ?></p>
                    <a href="tel:0265211211" class="btn btn-outline-primary btn-sm rounded-pill fw-semibold w-100 mt-auto">
                        <i class="bi bi-telephone-outbound me-1"></i> 0265-211.211
                    </a>
                </div>
            </div>
        <!--email link for reporting abuse -->
        <div class="col-12 col-md-4">
                <div class="card border rounded-4 bg-white shadow-sm p-4 text-center h-100">
                    <div class="d-inline-flex align-items-center justify-content-center bg-dark text-white rounded-circle mx-auto mb-3" style="width: 55px; height: 55px;">
                        <i class="bi bi-envelope-fill fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-2 mb-1">E-mail</h5>
                    <h6 class="text-primary small fw-semibold text-break mb-1">sesizari@dgaspcmures.ro</h6>
                    <p class="text-muted small mb-3"><?php echo $is_hu ? 'Írásbeli és névtelen bejelentések' : 'Sesizări scrise și documente'; ?></p>
                    <a href="mailto:sesizari@dgaspcmures.ro" class="btn btn-outline-dark btn-sm rounded-pill fw-semibold w-100 mt-auto">
                        <i class="bi bi-send me-1"></i> <?php echo $is_hu ? 'E-mail küldése' : 'Trimite Sesizare'; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <!-- CORAI RAPORT FROM STEPS -->
         <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-4">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <h4 class="fw-bold text-white mb-0">
                    <i class="bi bi-info-circle me-2 text-warning"></i>
                    <?php echo $is_hu ? 'Mikor és hogyan tehet bejelentést?' : 'Procedura de Sesizare și Intervenție CORAI'; ?>
                </h4>
            </div>
            <div class="card-body p-4 text-secondary lh-lg">
                <?php if ($is_hu) : ?>
                    <h5 class="fw-bold text-dark mb-3">Milyen esetekben kell azonnal értesíteni a szolgálatot?</h5>
                    <ul class="mb-4">
                        <li>Fizikai, érzelmi vagy szexuális bántalmazás gyanúja gyermekek vagy kiszolgáltatott felnőttek esetén.</li>
                        <li>Súlyos elhanyagolás (alapvető orvosi ellátás, táplálék, higiénia vagy felügyelet hiánya).</li>
                        <li>Gyermekmunka, koldulásra kényszerítés vagy emberkereskedelem veszélye.</li>
                        <li>Családon belüli erőszak, ahol kiskorúak vagy magatehetetlen személyek vannak jelen.</li>
                    </ul>
                    <div class="alert alert-warning border-0 rounded-3 small">
                        <strong>Fontos:</strong> A bejelentéseket szigorúan bizalmasan kezeljük, és a bejelentő személyazonossága kérésre névtelen (anonim) maradhat.
                    </div>
                <?php else : ?>
                    <h5 class="fw-bold text-dark mb-3">Situații care necesită sesizare imediată:</h5>
                    <ul class="mb-4">
                        <li>Suspiciuni sau certitudini privind abuzul fizic, emoțional sau sexual asupra unui minor sau adult vulnerabil.</li>
                        <li>Neglijare gravă (lipsa hranei, îngrijirilor medicale de urgență, a igienei sau a supravegherii).</li>
                        <li>Exploatare prin muncă, cerșetorie forțată sau trafic de persoane.</li>
                        <li>Cazuri de violență domestică în care sunt implicați copii sau persoane cu dizabilități.</li>
                    </ul>
                    <div class="alert alert-warning border-0 rounded-3 small">
                        <strong>Important:</strong> Sesizările pot fi făcute și în mod anonim. Toate informațiile transmise sunt confidențiale conform legislației în vigoare.
                    </div>
                    <a href="https://dgaspcmures.ro/corai/en" class="btn btn-outline-primary">
                        <i class="bi bi-box-arrow-up-right me-1"></i> <?php echo $is_hu ? 'További információk a CORAI-ról' : 'Mai multe informații despre CORAI'; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>