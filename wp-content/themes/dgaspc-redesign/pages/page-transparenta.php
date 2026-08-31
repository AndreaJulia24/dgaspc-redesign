<?php
/*
 * Template Name: Transparenta Template
 */
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!-- BACK TO HOME -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 
                <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2">
                <?php echo $is_hu ? 'Átláthatóság és Hivatalos Jelentések' : 'Transparență Decizională și Rapoarte Oficiale'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 800px;">
                <?php echo $is_hu 
                    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság éves tevékenységi beszámolói, korrupcióellenes intézkedései és közérdekű adatai.' 
                    : 'Rapoarte anuale de activitate, Strategia Națională Anticorupție (SNA 2021-2025), transparență decizională (Legea 52/2003) și informații de interes public (Legea 544/2001).'; ?>
            </p>
        </div>

        <!-- 1. SECTION: STRATEGIA NATIONALA ANTICORUPTIE 2021-2025 -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <div class="d-flex align-items-center gap-2 text-white">
                    <i class="bi bi-shield-check fs-4 text-info"></i>
                    <div>
                        <h4 class="fw-bold text-white mb-0">
                            <?php echo $is_hu ? 'Nemzeti Korrupcióellenes Stratégia (SNA 2021–2025)' : 'Strategia Națională Anticorupție (SNA 2021–2025)'; ?>
                        </h4>
                        <p class="small mb-0 text-white-50">
                            <?php echo $is_hu ? 'A DGASPC Maros hivatalos nyilatkozata és elköteleződése.' : 'Declarația oficială de aderare a DGASPC Mureș la SNA 2021–2025.'; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <a href="https://www.dgaspcmures.ro/docs/2022/DecDGASPCMS_anti-coruptie%202021-2025.pdf" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                    <div class="p-3 bg-light rounded-3 border d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-3 flex-shrink-0"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1 small">
                                    <?php echo $is_hu ? 'A DGASPC Maros Csatlakozási Nyilatkozata a Nemzeti Korrupcióellenes Stratégiához (SNA 2021–2025)' : 'Declarația de aderare a DGASPC Mureș la Strategia Națională Anticorupție (SNA 2021–2025)'; ?>
                                </h6>
                                <span class="badge bg-primary-subtle text-primary fw-normal"><?php echo $is_hu ? 'PDF Dokumentum' : 'Document PDF'; ?></span>
                            </div>
                        </div>
                        <span class="badge bg-danger-subtle text-danger fw-semibold px-3 py-2 rounded-pill">
                            <i class="bi bi-download me-1"></i> <?php echo $is_hu ? 'Letöltés' : 'Descarcă'; ?>
                        </span>
                    </div>
                </a>
            </div>
        </div>

        <!-- 2. SECTION: RAPOARTE ANUALE ȘI DE MONITORIZARE -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <div class="d-flex align-items-center gap-2 text-white">
                    <i class="bi bi-journal-text fs-4 text-warning"></i>
                    <div>
                        <h4 class="fw-bold text-white mb-0">
                            <?php echo $is_hu ? 'Hivatalos Jelentések és Beszámolók' : 'Rapoarte Anuale și de Monitorizare'; ?>
                        </h4>
                        <p class="small mb-0 text-white-50">
                            <?php echo $is_hu ? 'Monitoring jelentések, éves beszámolók és cselekvési tervek.' : 'Evidența completă a rapoartelor de monitorizare și a sintezelor anuale.'; ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- GÖRGETHETŐ KONTÉNER (9 elem magasságú) -->
            <div class="card-body p-4 overflow-auto" style="max-height: 460px;">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                    <?php
                    // JSON FÁJL BEOLVASÁSA
                    $json_path = get_template_directory() . '/assets/data/rapoarte.json';
                    
                    if (file_exists($json_path)) {
                        $json_data = json_decode(file_get_contents($json_path), true);
                        $docs = $json_data['documents'] ?? array();

                        foreach ($docs as $doc) :
                            $title = $doc['title'];
                            $url   = $doc['url'];
                            if ($doc['year']) {
                                $year = $is_hu ? $doc['year'] . '. év' : 'Anul ' . $doc['year'];
                            } else {
                                $year = $is_hu ? 'Hivatalos' : 'Oficial';
                            }
                            $type  = strtoupper($doc['type']);
                    ?>
                    <div class="col">
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                            <div class="p-3 bg-light rounded-3 border h-100 d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 flex-shrink-0"></i>
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1 small lh-sm"><?php echo esc_html($title); ?></h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top">
                                    <span class="badge bg-secondary-subtle text-secondary small fw-normal"><?php echo esc_html($year); ?></span>
                                    <span class="badge bg-primary-subtle text-primary small fw-semibold"><?php echo esc_html($type); ?> <i class="bi bi-download ms-1"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach;
                    } 
                    ?>
                </div>
            </div>
        </div>
        <!-- 3. SECTION: DECLARAȚII DE AVERE ȘI INTERESE -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <div class="d-flex align-items-center gap-2 text-white">
                    <i class="bi bi-file-earmark-person-fill fs-4 text-info"></i>
                    <div>
                        <h4 class="fw-bold text-white mb-0">
                            <?php echo $is_hu ? 'Vagyonnyilatkozatok' : 'Declarații de Avere și Interese'; ?>
                        </h4>
                        <p class="small mb-0 text-white-50">
                            <?php echo $is_hu ? 'A DGASPC Maros alkalmazottainak hivatalos vagyon- és érdeknyilatkozatai.' : 'Evidența declarațiilor de avere ale personalului DGASPC Mureș.'; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-body p-4">
                
                <!-- SEARCH AND FILTER BAR -->
                <div class="row g-2 mb-4 align-items-center">
                    <div class="col-12 col-md-8">
                        <div class="input-group">
                            <span class="input-group-text bg-dark border-end-0"><i class="bi bi-search text-muted"></i></span>
                            <input type="text" id="searchDeclaratii" class="form-control border-start-0" placeholder="<?php echo $is_hu ? 'Keresés név szerint...' : 'Caută după nume...'; ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-md-end gap-1">
                        <button type="button" class="btn btn-outline-primary btn-sm filter-year active" data-year="all"><?php echo $is_hu ? 'Mind' : 'Toate'; ?></button>
                        <button type="button" class="btn btn-outline-primary btn-sm filter-year" data-year="2025">2025</button>
                        <button type="button" class="btn btn-outline-primary btn-sm filter-year" data-year="2024">2024</button>
                    </div>
                </div>
 
                <div class="card-body p-4 overflow-auto" style="max-height: 480px;" id="declaratiiContainer">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3" id="declaratiiList">
                        <?php
                        $dec_path = get_template_directory() . '/assets/data/declaratii_avere.json';
                        
                        if (file_exists($dec_path)) {
                            $dec_data = json_decode(file_get_contents($dec_path), true);
                            $declarations = $dec_data['documents'] ?? array();

                            foreach ($declarations as $item) :
                                $name = $item['name'];
                                $year = $item['year'];
                                $url  = $item['url'];
                        ?>
                        <div class="col dec-item" data-name="<?php echo esc_attr(strtolower($name)); ?>" data-year="<?php echo esc_attr($year); ?>">
                            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                                <div class="p-2 px-3 bg-light rounded-2 border h-100 d-flex justify-content-between align-items-center hover-card">
                                    <div class="d-flex align-items-center gap-2 text-truncate me-2">
                                        <i class="bi bi-file-earmark-pdf text-danger fs-5 flex-shrink-0"></i>
                                        <span class="text-dark small fw-semibold text-truncate"><?php echo esc_html($name); ?></span>
                                    </div>
                                    <span class="badge bg-secondary-subtle text-secondary small fw-normal flex-shrink-0"><?php echo esc_html($year); ?></span>
                                </div>
                            </a>
                        </div>
                        <?php 
                            endforeach;
                        } 
                        ?>
                    </div>
                    <div id="noResults" class="text-center py-4 text-muted d-none small">
                        <?php echo $is_hu ? 'Nem található ilyen nevű személy a listában.' : 'Nu a fost găsit niciun rezultat conform căutării.'; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>