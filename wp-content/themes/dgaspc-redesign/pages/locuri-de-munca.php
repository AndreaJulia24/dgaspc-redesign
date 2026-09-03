<?php
/*
 * Template Name: Locuri de Munca Template
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

$json_file_path = get_template_directory() . '/assets/data/dgaspc_mures_locuri_munca.json';
$locuri_de_munca_data = file_exists($json_file_path) ? json_decode(file_get_contents($json_file_path), true) : ['announcements' => []];
$announcements = isset($locuri_de_munca_data['announcements']) ? $locuri_de_munca_data['announcements'] : [];
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container" style="max-width: 1000px;">
        
        <!-- BACK TO FRONT PAGE -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- PAGE TITLE -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2">
                <?php echo $is_hu ? 'Állásajánlatok és Versenyvizsgák' : 'Locuri de Muncă și Concursuri'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 800px;">
                <?php echo $is_hu 
                    ? 'A Maros Megyei Szociális és Gyermekvédelmi Főigazgatóság által meghirdetett betöltendő álláshelyek, versenyvizsga-kiírások és eredmények.' 
                    : 'Anunțuri privind concursurile de recrutare, posturile vacante și rezultatele probelor organizate de DGASPC Mureș.'; ?>
            </p>
        </div>

        <!-- 1. CONDIȚII GENERALE -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <h5 class="fw-bold text-white mb-0">
                    <i class="bi bi-file-earmark-check me-2 text-warning"></i>
                    <?php echo $is_hu ? 'Általános feltételek és a jelentkezési dosszié' : 'Condiții Generale și Dosarul de Înscriere'; ?>
                </h5>
            </div>
            <div class="card-body p-4 text-secondary lh-lg">
                <?php if ($is_hu) : ?>
                    <p class="text-dark fw-semibold mb-2">A jelentkezési dossziénak a következő kötelező dokumentumokat kell tartalmaznia:</p>
                    <p class="small text-muted mb-3">
                        A dossziéban szereplő összes dokumentumot <strong>eredeti formátumban</strong> kell benyújtani.
                    </p>
                    <ul class="mb-3 small">
                        <li>Jelentkezési lap (letölthető a lap alján);</li>
                        <li>Személyi igazolvány másolata;</li>
                        <li>Tanulmányi oklevelek és szakmai képesítést igazoló okiratok másolata;</li>
                        <li>Munkakönyvi kivonat (Revisal / Vechime în muncă);</li>
                        <li>Erkölcsi bizonyítvány (Cazier judiciar);</li>
                        <li>Orvosi igazolás a munkakör betöltésére való alkalmasságról;</li>
                        <li>Önéletrajz (Europass formátum).</li>
                    </ul>
                    <div class="alert alert-info border-0 rounded-3 small mb-0">
                        <i class="bi bi-info-circle me-1"></i> A dossziékat a DGASPC Mureș székhelyén kell benyújtani: <strong>Târgu Mureș, str. Trebely nr. 7</strong>.
                    </div>
                <?php else : ?>
                    <p class="text-dark fw-semibold mb-2">Dosarul de înscriere la concurs trebuie să conțină în mod obligatoriu următoarele documente:</p>
                    <ul class="mb-3 small">
                        <li>Formularul de înscriere la concurs (tipizat);</li>
                        <li>Copia actului de identitate;</li>
                        <li>Copiile diplomelor de studii;</li>
                        <li>Copia carnetului de muncă sau adeverință vechime;</li>
                        <li>Cazierul judiciar;</li>
                        <li>Adeverință medicală;</li>
                        <li>Curriculum vitae, model comun european.</li>
                    </ul>
                    <div class="alert alert-info border-0 rounded-3 small mb-0">
                        <i class="bi bi-info-circle me-1"></i> Dosarele se depun la sediul DGASPC Mureș, Serviciul Resurse Umane: <strong>Târgu Mureș, str. Trebely nr. 7</strong>.
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- 2. ANUNȚURI -->
        <div class="mb-4">
            <h3 class="fw-bold text-dark mb-4">
                <i class="bi bi-megaphone me-2 text-primary"></i>
                <?php echo $is_hu ? 'Aktuális Versenyvizsga-kiírások' : 'Anunțuri Concursuri și Posturi Vacante'; ?>
            </h3>

            <?php if (!empty($announcements)) : ?>
                <div class="d-flex flex-column gap-4">
                    <?php foreach ($announcements as $item) : ?>
                        <div class="card border rounded-4 bg-white shadow-sm p-4">
                            <!-- Header: Date and Title -->
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-3 border-bottom pb-3">
                                <div>
                                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2 rounded-pill fw-semibold">
                                        <i class="bi bi-calendar-event me-1"></i> <?php echo esc_html($item['publication_date']); ?>
                                    </span>
                                    <h4 class="fw-bold text-dark mb-1">
                                        <?php echo esc_html($is_hu && !empty($item['title_hu']) ? $item['title_hu'] : $item['title']); ?>
                                    </h4>
                                </div>
                                <div>
                                    <span class="badge bg-warning bg-opacity-10 text-dark border border-warning px-3 py-2 rounded-pill">
                                        <?php echo $is_hu ? 'Határidő: A kiírás szerint' : 'Termen: Conform anunțului'; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Content: Positions or Summary -->
                            <?php if (!empty($item['positions'])) : ?>
                                <div class="mb-3">
                                    <h6 class="text-uppercase text-muted fs-7 fw-bold mb-2"><?php echo $is_hu ? 'Meghirdetett állások:' : 'Posturi vacante:'; ?></h6>
                                    <ul class="list-unstyled small text-secondary ps-2 mb-0 border-start border-3 border-primary">
                                        <?php foreach ($item['positions'] as $pos) : ?>
                                            <li class="mb-1">
                                                <strong><?php echo esc_html($is_hu && !empty($pos['position_hu']) ? $pos['position_hu'] : $pos['position']); ?></strong> 
                                                <span class="badge bg-light text-dark border ms-1"><?php echo esc_html($pos['posts']); ?> <?php echo $is_hu ? 'hely' : 'post(uri)'; ?></span>
                                                <?php if (!empty($pos['location'])) : ?>
                                                    <br><span class="fw-semibold text-muted"><i class="bi bi-geo-alt me-1"></i><?php echo esc_html($is_hu && !empty($pos['location_hu']) ? $pos['location_hu'] : $pos['location']); ?></span>
                                                <?php endif; ?>
                                                <?php if (!empty($pos['text'])) : ?>
                                                    <br><span class="small text-muted"><?php echo esc_html($is_hu && !empty($pos['text_hu']) ? $pos['text_hu'] : $pos['text']); ?></span>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php elseif (!empty($item['text'])) : ?>
                                <div class="mb-6 text-secondary large fw-semibold">
                                    <?php echo esc_html($is_hu && !empty($item['text_hu']) ? $item['text_hu'] : $item['text']); ?>
                                </div>
                            <?php elseif (!empty($item['summary'])) : ?>
                                <div class="mb-3 text-secondary small">
                                    <?php echo esc_html($is_hu && !empty($item['summary_hu']) ? $item['summary_hu'] : $item['summary']); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Documents buttons -->
                            <div class="mt-3 pt-3 border-top">
                                <h6 class="text-uppercase text-muted fs-7 fw-bold mb-2"><?php echo $is_hu ? 'Csatolt dokumentumok / Részletek:' : 'Documente atașate:'; ?></h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <?php if (!empty($item['documents'])) : ?>
                                        <?php foreach ($item['documents'] as $doc) : 
                                            $is_docx = (isset($doc['type']) && $doc['type'] === 'docx') || str_ends_with(strtolower($doc['name']), '.docx');
                                            $btn_class = $is_docx ? 'btn-outline-primary' : 'btn-outline-danger';
                                            $icon_class = $is_docx ? 'bi-file-earmark-word' : 'bi-file-earmark-pdf';
                                            $clean_name = pathinfo($doc['name'], PATHINFO_FILENAME);
                                        ?>
                                            <a href="<?php echo esc_url($doc['url']); ?>" target="_blank" rel="noopener noreferrer" class="btn <?php echo $btn_class; ?> btn-sm rounded-pill px-3 py-2 text-start d-inline-flex align-items-center">
                                                <i class="bi <?php echo $icon_class; ?> fs-6 me-2"></i> 
                                                <span><?php echo esc_html($clean_name); ?></span>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <div class="card border rounded-4 bg-white shadow-sm p-4 text-center text-muted">
                    <?php echo $is_hu ? 'Nincsenek aktuális hirdetések.' : 'Nu există anunțuri disponibile.'; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- CONTACT -->
        <div class="row g-4 mt-4">
            <div class="col-12 col-md-6">
                <div class="card border rounded-4 bg-white shadow-sm p-4 h-100">
                    <h6 class="fw-bold text-dark mb-3">
                        <i class="bi bi-headset text-primary me-2"></i>
                        <?php echo $is_hu ? 'Humánerőforrás Iroda (Kapcsolat)' : 'Serviciul Resurse Umane'; ?>
                    </h6>
                    <p class="small text-secondary mb-3">
                        <?php echo $is_hu 
                            ? 'A versenyvizsgákkal, eredményekkel és a benyújtandó iratokkal kapcsolatos kérdésekben forduljon a Humánerőforrás Osztályhoz.' 
                            : 'Pentru informații suplimentare privind organizarea concursurilor și depunerea dosarelor:'; ?>
                    </p>
                    <div class="small d-flex flex-column gap-2">
                        <div><i class="bi bi-telephone text-primary me-2"></i><strong>Telefon:</strong> 0265-213.512 / 0265-211.699 (int. 27)</div>
                        <div><i class="bi bi-envelope text-primary me-2"></i><strong>Email:</strong> <a href="mailto:office@dgaspcmures.ro" class="text-decoration-none">office@dgaspcmures.ro</a></div>
                        <div><i class="bi bi-geo-alt text-primary me-2"></i><strong>Adresă:</strong> Târgu Mureș, str. Trebely nr. 7</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>