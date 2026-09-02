<?php 
/* 
* Template Name: Contact Page
*/

get_header(); ?>

<?php
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

$page_title =$is_hu ? 'Kapcsolat és Ügyfélfogadási Rend' : 'Contact și Program de Lucru';
$page_desc  =$is_hu 
    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság hivatalos elérhetőségei, vezetősége és ügyfélfogadási rendje.' 
    : 'Informații oficiale de contact, conducerea instituției și programul de lucru cu publicul al DGASPC Mureș.';

$json_path = get_template_directory() . '/assets/data/dgaspc_contact_dynamic.json';$contact_data = [];

if (file_exists($json_path)) {
    $json_content = file_get_contents($json_path);
    $contact_data = json_decode($json_content, true);
}

$text_blocks = isset($contact_data['text_blocks']) ? $contact_data['text_blocks'] : [];$emails = isset($contact_data['emails']) ?$contact_data['emails'] : [];
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
            <div class="col-12">
                <h1 class="fw-bold text-dark mb-2"><?php echo esc_html($page_title); ?></h1>
                <p class="text-secondary"><?php echo esc_html($page_desc); ?></p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Main Content: Clean Structured Info Cards -->
            <div class="col-12 col-lg-8">
                <div class="row g-4">
                    
                    <!-- 1. Telverde Card -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-danger text-white">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-telephone-fill fs-1"></i>
                                <div>
                                    <h5 class="fw-bold mb-1">TELVERDE TELEFONUL COPILULUI</h5>
                                    <div class="fs-3 fw-bolder">119</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Institution Main Details -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                            <h4 class="fw-bold text-dark mb-3">
                                <i class="bi bi-building text-primary me-2"></i>
                                <?php echo $is_hu ? 'Hivatalos adatok és székhely' : 'Date Oficiale și Sediu'; ?>
                            </h4>
                            <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 mb-0">
                                <li><strong>Sediu:</strong> Tg. Mureș, jud. Mureș 540 081, Str. Trébely nr. 7</li>
                                <li><strong>Telefon:</strong> 0265/213512, 0265/211699</li>
                                <li><strong>Fax:</strong> 0265/211561</li>
                                <li><strong>E-mail:</strong> office@dgaspcmures.ro</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3. Leadership Cards -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                            <h4 class="fw-bold text-dark mb-4">
                                <i class="bi bi-people-fill text-primary me-2"></i>
                                <?php echo $is_hu ? 'Vezetőség' : 'Conducerea Instituției'; ?>
                            </h4>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <h6 class="fw-bold text-dark mb-1">MIKLEA HAJNAL KATALIN</h6>
                                        <p class="text-primary small fw-semibold mb-2">Director General</p>
                                        <p class="small text-secondary mb-0"><i class="bi bi-envelope me-1"></i> miklea.hajnal@dgaspcmures.ro</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <h6 class="fw-bold text-dark mb-1">DEAK ELIDA MARIA</h6>
                                        <p class="text-primary small fw-semibold mb-2">Director General Adjunct</p>
                                        <p class="small text-secondary mb-0"><i class="bi bi-envelope me-1"></i> deak.elida@dgaspcmures.ro</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <h6 class="fw-bold text-dark mb-1">CĂLIMAN JANINA CRINA</h6>
                                        <p class="text-primary small fw-semibold mb-2">Director General Adjunct</p>
                                        <p class="small text-secondary mb-0"><i class="bi bi-envelope me-1"></i> crina.caliman@dgaspcmures.ro</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <h6 class="fw-bold text-dark mb-1">HÂRȘAN-MAGDUN AURELIA-CARMEN</h6>
                                        <p class="text-primary small fw-semibold mb-2">Director General Adjunct Economic</p>
                                        <p class="small text-secondary mb-0"><i class="bi bi-envelope me-1"></i> harsan.carmen@dgaspcmures.ro</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-light rounded-3 border h-100">
                                        <h6 class="fw-bold text-dark mb-1">Costantin Doru</h6>
                                        <p class="text-primary small fw-semibold mb-2">Purtător de cuvânt</p>
                                        <a href="tel:0720 110857" class="text-decoration-none text-primary d-flex align-items-center gap-2 py-1 border-bottom">
                                            <i class="bi bi-telephone"></i>
                                            <span>0720 110857</span>
                                        </a>
                                        <p class="small text-secondary mb-0"><i class="bi bi-envelope me-1"></i>dgaspcmonitorizare@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar: E-mail Data -->
            <?php if (!empty($emails)) : ?>
                <div class="col-12 col-lg-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                        <h4 class="fw-bold text-dark mb-3"><?php echo $is_hu ? 'E-mail Elérhetőségek' : 'Contacte E-mail'; ?></h4>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                            <?php foreach ($emails as$email) : ?>
                                <li class="small">
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="text-decoration-none text-primary d-flex align-items-center gap-2 py-1 border-bottom">
                                        <i class="bi bi-envelope-fill"></i>
                                        <span class="text-break"><?php echo esc_html($email); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>
 
<?php get_footer(); ?>