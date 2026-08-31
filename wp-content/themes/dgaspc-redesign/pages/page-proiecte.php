<?php 
/*
 * Template Name: Proiecte Template
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
                <?php echo $is_hu ? 'Uniós és Nemzeti Projektek' : 'Proiecte Europene și Naționale'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 800px;">
                <?php echo $is_hu 
                    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság kiemelt programjai, fejlesztési projektjei és szakmai hálózatai.' 
                    : 'Programe europene, strategii de incluziune și inițiative derulate de DGASPC Mureș pentru modernizarea serviciilor sociale.'; ?>
            </p>
        </div>

        <!-- 1. SECTION: PROIECTUL VIP-PLUS -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <div class="d-flex align-items-center gap-2 text-white">
                    <i class="bi bi-stars fs-4 text-warning"></i>
                    <div>
                        <h4 class="fw-bold text-white mb-0">PROIECT VIP-PLUS</h4>
                        <p class="small mb-0 text-white-50">
                            <?php echo $is_hu ? 'Voluntariat, Inițiativă, Participare – Integrált szociális szolgáltatások' : 'Voluntariat, Inițiativă, Participare pentru o viață mai bună'; ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="card-body p-4">
                <div class="text-secondary mb-4 lh-lg">
                    <?php if ($is_hu) : ?>
                        <p class="text-dark">A <strong>VIP-PLUS – „Önkéntesség, Kezdeményezés, Részvétel a jobb életért”</strong> projekt a Szociális Szakmák Erőforrás- és Információs Központja Egyesülettel (CRIPS), valamint az Ialomița, Arad, Buzău és Maros megyei DGASPC-vel partnerségben valósul meg.</p>
                        <p>Az általános cél a társadalmi integráció előmozdítása, az iskolai lemorzsolódás megelőzése, valamint a nappali központokba járó, hátrányos helyzetű gyermekek önálló életviteli készségeinek fejlesztése.</p>
                    <?php else : ?>
                        <p class="text-dark">Proiectul <strong>VIP-PLUS – „Voluntariat, Inițiativă, Participare pentru o viață mai bună”</strong> este implementat în parteneriat cu Asociația Centrul de Resurse și Informare pentru Profesiuni Sociale (CRIPS) și DGASPC Ialomița, DGASPC Arad, DGASPC Buzău și DGASPC Mureș.</p>
                        <p>Obiectivul general îl reprezintă creșterea gradului de incluziune socială, prevenirea abandonului școlar și dezvoltarea abilităților de viață independentă pentru copiii aflați în situație de vulnerabilitate din centrele de zi.</p>
                    <?php endif; ?>
                </div>

                <h6 class="fw-bold text-dark border-bottom pb-2 mb-3">
                    <i class="bi bi-folder2-open text-primary me-2"></i>
                    <?php echo $is_hu ? 'Projektanyagok és Hivatalos Dokumentumok' : 'Materiale și Documente Proiect'; ?>
                </h6>
                
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <a href="http://www.crips.ro/doc/proiecte/2021-VIPPLUS/vipplus-prez.pdf" class="btn btn-outline-primary w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-file-earmark-pdf-fill text-danger me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'VIP-PLUS Bemutató (PDF)' : 'Prezentarea Proiectului (PDF)'; ?></span>
                            <i class="bi bi-arrow-right text-primary"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://www.dgaspcmures.ro/2021/crips/proiect-crips.html" class="btn btn-outline-secondary w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-newspaper text-info me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'CRIPS Partnerségi Közlemény' : 'Comunicat parteneriat CRIPS'; ?></span>
                            <i class="bi bi-box-arrow-up-right text-secondary"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://vip-plus.crips.ro/" class="btn btn-outline-dark w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-globe text-success me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'Hivatalos Honlap (CRIPS)' : 'Pagina oficială VIP-PLUS'; ?></span>
                            <i class="bi bi-box-arrow-up-right text-dark"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. SECTION: REȚEAUA APP -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-dark-blue p-4" style="background-color: #0b2545;">
                <div class="d-flex align-items-center gap-2 text-white">
                    <i class="bi bi-diagram-3-fill fs-4 text-info"></i>
                    <div>
                        <h4 class="fw-bold text-white mb-0">REȚEAUA APP</h4>
                        <p class="small mb-0 text-white-50">
                            <?php echo $is_hu ? 'Hivatásos Személyi Segítő Hálózat a Fogyatékkal Élők Számára' : 'Asistență Personală Profesionistă pentru o viață independentă'; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-body p-4">
                <div class="text-secondary mb-4 lh-lg">
                    <?php if ($is_hu) : ?>
                        <p class="text-dark">A <strong>Rețeaua APP (Hivatásos Személyi Segítő Hálózat)</strong> projekt, amelyet a Fogyatékossággal Élő Személyek Jogait Védő Országos Hatósággal (ANPDPD) partnerségben valósítanak meg, az alternatív támogató szolgáltatások bővítését, valamint az intézményi ellátásból a közösségi, önálló életvitelre való áttérést szolgálja.</p>
                    <?php else : ?>
                        <p class="text-dark">Proiectul <strong>Rețeaua APP (Asistență Personală Profesionistă)</strong>, implementat în parteneriat cu Autoritatea Națională pentru Protecția Drepturilor Persoanelor cu Dizabilități (ANPDPD), vizează dezvoltarea serviciilor alternative de sprijin și tranziția de la sistemul rezidențial la viața independentă în comunitate.</p>
                    <?php endif; ?>
                </div>

                <h6 class="fw-bold text-dark border-bottom pb-2 mb-3">
                    <i class="bi bi-file-earmark-arrow-down text-primary me-2"></i>
                    <?php echo $is_hu ? 'Dokumentumok és Hasznos Nyomtatványok' : 'Documente și Formulare Utile'; ?>
                </h6>

                <div class="row row-cols-1 row-cols-md-2 g-3 mb-4">
                    <div class="col">
                        <a href="https://www.dgaspcmures.ro/docs/2026/09.04.2026_Metodologie_de_selectie_a_grupului_tinta_APP_revizuita.pdf" class="btn btn-outline-primary w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-file-earmark-pdf-fill text-danger me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'Célcsoport kiválasztási módszertan (módosított)' : 'Metodologie de selecție grup țintă (revizuită)'; ?></span>
                            <i class="bi bi-download text-primary"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://www.dgaspcmures.ro/docs/2026/09.04.2026_Anexe_la_metodologia_de_selectie_a_grupului_tinta_revizuita.pdf" class="btn btn-outline-primary w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-file-earmark-pdf-fill text-danger me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'Mellékletek a kiválasztási módszertanhoz' : 'Anexe la metodologia de selecție a grupului țintă'; ?></span>
                            <i class="bi bi-download text-primary"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="http://www.crips.ro/doc/proiecte/2021-VIPPLUS/vipplus-prez.pdf" class="btn btn-outline-secondary w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-file-earmark-pdf text-muted me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'VIP-PLUS (CRIPS) Projektbemutató' : 'Prezentare Proiect VIP-PLUS (CRIPS)'; ?></span>
                            <i class="bi bi-download text-secondary"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://anpd.gov.ro/web/proiecte/proiecte-europene/reteaua-app/" class="btn btn-outline-dark w-100 p-3 text-start h-100 d-flex align-items-center justify-content-between" target="_blank" rel="noopener noreferrer">
                            <span class="small fw-semibold"><i class="bi bi-box-arrow-up-right text-primary me-2 fs-5 align-middle"></i> <?php echo $is_hu ? 'További információk a projektről (ANPDPD)' : 'Informații suplimentare despre proiect (ANPDPD)'; ?></span>
                            <i class="bi bi-arrow-right text-dark"></i>
                        </a>
                    </div>
                </div>

                <!-- CERERE DE ÎNSCRIERE -->
                <h6 class="fw-bold text-dark border-bottom pb-2 mb-3">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    <?php echo $is_hu ? 'Mintakérelem: Szándéknyilatkozat (Hivatásos Személyi Segítő)' : 'Model Cerere de Înscriere (Asistent Personal Profesionist)'; ?>
                </h6>

                <div class="card bg-light p-4 border rounded-3 font-monospace small">
                    <?php if ($is_hu) : ?>
                        <p class="mb-2 text-center fw-bold">A SECPAH RÉSZÉRE<br>A MAROS MEGYEI DGASPC VEZETŐSÉGÉNEK</p>
                        <p class="mb-2">Alulírott ...................................................................., személyi szám (CNP) ......................................., lakhely: ...................................................., telefonszám: ............................, e-mail cím: ................................., ezennel kifejezem szándékomat, hogy <strong>hivatásos személyi segítőként (asistent personal profesionist)</strong> tevékenykedjek, és kérem, hogy vegyék fel velem a kapcsolatot további egyeztetés és tájékoztatás céljából.</p>
                        <p class="mb-3">Tudomásul vettem a pozíció betöltéséhez szükséges igazoló dokumentumok listáját és a feltételeket, és vállalom, hogy szükség esetén benyújtom azokat.</p>
                        <div class="d-flex justify-content-between pt-3 border-top">
                            <span>Dátum: .........................</span>
                            <span>Aláírás: .........................</span>
                        </div>
                    <?php else : ?>
                        <p class="mb-2 text-center fw-bold">În atenția SECPAH<br>Către DGASPC MUREȘ</p>
                        <p class="mb-2">Subsemnatul/a ...................................................................., CNP ......................................., domiciliat/ă în ...................................................., nr. de telefon ............................, adresă de e-mail ................................., prin prezenta îmi exprim intenția de a deveni <strong>asistent personal profesionist</strong> și doresc să fiu contactat/ă pentru informații și discuții suplimentare.</p>
                        <p class="mb-3">Am luat la cunoștință de documentele doveditoare îndeplinirii condițiilor pentru a deveni asistent personal profesionist și îmi asum răspunderea să le depun la nevoie.</p>
                        <div class="d-flex justify-content-between pt-3 border-top">
                            <span>Data: .........................</span>
                            <span>Semnătura: .........................</span>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>