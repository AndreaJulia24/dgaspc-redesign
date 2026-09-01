<?php
/*
 * Template Name: Locuri de Munca Template
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
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
                    <ul class="mb-3 small">
                        <li>Jelentkezési lap (letölthető a lap alján);</li>
                        <li>Személyi igazolvány másolata;</li>
                        <li>Tanulmányi oklevelek és szakmai képesítést igazoló okiratok másolata;</li>
                        <li>Munkakönyvi kivonat (Revisal / Vechime în muncă) a szakmai tapasztalat igazolására;</li>
                        <li>Erkölcsi bizonyítvány (Cazier judiciar);</li>
                        <li>Orvosi igazolás a munkakör betöltésére való alkalmasságról (háziorvostól vagy munkaegészségügytől);</li>
                        <li>Önéletrajz (Europass formátum).</li>
                    </ul>
                    <div class="alert alert-info border-0 rounded-3 small mb-0">
                        <i class="bi bi-info-circle me-1"></i> A dossziékat a DGASPC Mureș székhelyén, a Humánerőforrás Osztályon (Resurse Umane) kell benyújtani a megadott határidőig: <strong>Târgu Mureș, str. Trebely nr. 7</strong>.
                    </div>
                <?php else : ?>
                    <p class="text-dark fw-semibold mb-2">Dosarul de înscriere la concurs trebuie să conțină în mod obligatoriu următoarele documente:</p>
                    <ul class="mb-3 small">
                        <li>Formularul de înscriere la concurs (tipizat);</li>
                        <li>Copia actului de identitate sau orice alt document care atestă identitatea;</li>
                        <li>Copiile diplomelor de studii și ale altor acte care atestă efectuarea unor specializări;</li>
                        <li>Copia carnetului de muncă sau adeverință care să ateste vechimea în muncă și în specialitatea studiilor;</li>
                        <li>Cazierul judiciar;</li>
                        <li>Adeverință medicală care să ateste starea de sănătate corespunzătoare;</li>
                        <li>Curriculum vitae, model comun european.</li>
                    </ul>
                    <div class="alert alert-info border-0 rounded-3 small mb-0">
                        <i class="bi bi-info-circle me-1"></i> Dosarele se depun la sediul DGASPC Mureș, Serviciul Resurse Umane: <strong>Târgu Mureș, str. Trebely nr. 7</strong>.
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- 2. AKTUÁLIS VERSENYVIZSGÁK ÉS KIÍRÁSOK -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-3 text-white" style="background-color: #0b2545;">
                <h5 class="mb-0 fw-bold">
                    <i class="bi bi-megaphone me-2"></i>
                    <?php echo $is_hu ? 'Aktuális Versenyvizsga-kiírások' : 'Anunțuri Concursuri și Posturi Vacante'; ?>
                </h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr class="small text-secondary">
                            <th scope="col" style="width: 15%;"><?php echo $is_hu ? 'Dátum' : 'Data Publicării'; ?></th>
                            <th scope="col" style="width: 45%;"><?php echo $is_hu ? 'Megnevezés és Álláshely' : 'Denumire Post / Anunț Concurs'; ?></th>
                            <th scope="col" style="width: 25%;"><?php echo $is_hu ? 'Jelentkezési határidő' : 'Termen Depunere Dosare'; ?></th>
                            <th scope="col" class="text-end" style="width: 15%;"><?php echo $is_hu ? 'Részletek' : 'Detalii'; ?></th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <tr>
                            <td class="text-muted fw-semibold">2026</td>
                            <td>
                                <strong class="text-dark d-block">Concurs de recrutare pentru ocuparea funcției de Asistent Social</strong>
                                <span class="text-secondary small">Serviciul Management de Caz pentru Copii</span>
                            </td>
                            <td><span class="badge bg-warning text-dark">Conform anunțului</span></td>
                            <td class="text-end">
                                <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/docs/Asistenți maternali.pdf' ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                    <i class="bi bi-file-earmark-pdf me-1"></i> PDF
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted fw-semibold">2026</td>
                            <td>
                                <strong class="text-dark d-block">Concurs pentru ocuparea posturilor de Educator și Infirmier</strong>
                                <span class="text-secondary small">Centre Rezidențiale Județul Mureș</span>
                            </td>
                            <td><span class="badge bg-warning text-dark">Conform anunțului</span></td>
                            <td class="text-end">
                                <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/docs/Asistent Personal Profesionist.pdf' ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                    <i class="bi bi-file-earmark-pdf me-1"></i> PDF
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row g-4">
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
                        <div><i class="bi bi-telephone text-primary me-2"></i><strong>Telefon:</strong> 0265-211.211 (int. Resurse Umane)</div>
                        <div><i class="bi bi-envelope text-primary me-2"></i><strong>Email:</strong> <a href="mailto:resurseumane@dgaspcmures.ro" class="text-decoration-none">resurseumane@dgaspcmures.ro</a></div>
                        <div><i class="bi bi-geo-alt text-primary me-2"></i><strong>Adresă:</strong> Târgu Mureș, str. Trebely nr. 7</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>