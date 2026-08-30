<?php
/*
 * Template Name: Protectia Copilului Template
 */
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!-- BACK TO HOME -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 
                <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2">
                <?php echo $is_hu ? 'Gyermekvédelmi Szolgáltatások és Intézmények' : 'Servicii Sociale și Instituții pentru Copii'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 800px;">
                <?php echo $is_hu 
                    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság védelmi rendszere, intézményhálózata és szolgáltatásai.' 
                    : 'Rețeaua oficială de centre rezidențiale, servicii de asistență medico-socială, recuperare și primire în regim de urgență din județul Mureș.'; ?>
            </p>
        </div>

        <!-- 119 EMERGENCY ALERT BOX (CORAI LINK) -->
        <div class="alert alert-danger border-0 rounded-4 shadow-sm p-4 mb-5 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 56px; height: 56px;">
                    <i class="bi bi-telephone-fill fs-3"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-1 text-danger-emphasis">
                        <?php echo $is_hu ? 'Telefonul Copilului – Sürgősségi Segélyvonal (119)' : 'Telefonul Copilului – Urgențe 24/7 (119)'; ?>
                    </h5>
                    <p class="mb-0 text-secondary small">
                        <?php echo $is_hu 
                            ? 'Bántalmazás, elhanyagolás vagy vészhelyzet esetén hívja a nap 24 órájában ingyenesen elérhető segélyvonalat.' 
                            : 'Linie telefonică dedicată semnalării oricărei forme de abuz, neglijare sau exploatare asupra minorilor.'; ?>
                    </p>
                </div>
            </div>
            <a href="https://dgaspcmures.ro/corai/en" target="_blank" rel="noopener noreferrer" class="btn btn-danger fw-bold px-4 py-2 rounded-pill flex-shrink-0 shadow-sm">
                <i class="bi bi-box-arrow-up-right me-2"></i><?php echo $is_hu ? 'Telefonul Copilului (CORAI)' : 'Telefonul Copilului (CORAI)'; ?>
            </a>
        </div>

        <!-- ABOUT OUR FAMILY (DESPRE FAMILIA NOASTRA) -->
        <div class="card border rounded-4 bg-white shadow-sm p-4 p-lg-5 mb-5">
            <h3 class="fw-bold text-dark mb-3">
                <i class="bi bi-people-fill text-primary me-2"></i>
                <?php echo $is_hu ? 'Családunkról és Családi Típusú Szolgáltatásainkról' : 'Despre Familia Noastră – Servicii de Tip Familial'; ?>
            </h3>
            <p class="text-secondary lh-base mb-4">
                <?php echo $is_hu 
                    ? 'A gyermekvédelmi rendszer célja, hogy minden gyermek számára biztosítsa a családi környezetben történő nevelkedés jogát. Amikor a vér szerinti családban való nevelkedés átmenetileg vagy véglegesen nem lehetséges, intézményünk alternatív családi típusú elhelyezést (hivatásos nevelőszülői hálózat, családi típusú házak) és integrált rehabilitációs szolgáltatásokat nyújt.' 
                    : 'Misiunea sistemului de protecție a copilului este de a asigura fiecărui copil un mediu familial stabil și securizant. În situațiile în care menținerea în familia biologică nu este posibilă, DGASPC Mureș asigură servicii alternative prin asistenți maternali profesioniști, case de tip familial și centre de recuperare specializate.'; ?>
            </p>
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <div class="p-3 bg-light rounded-3 h-100 border">
                        <h6 class="fw-bold text-dark"><i class="bi bi-shield-check text-success me-2"></i><?php echo $is_hu ? 'Biztonság és Védelem' : 'Protecție și Siguranță'; ?></h6>
                        <small class="text-secondary"><?php echo $is_hu ? 'Átmeneti és tartós befogadás biztonságos otthonokban.' : 'Găzduire și îngrijire completă în medii conforme standardelor europene.'; ?></small>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-3 bg-light rounded-3 h-100 border">
                        <h6 class="fw-bold text-dark"><i class="bi bi-heart-pulse text-danger me-2"></i><?php echo $is_hu ? 'Orvosi és Pszichológiai Ellátás' : 'Asistență Medicală și Psihologică'; ?></h6>
                        <small class="text-secondary"><?php echo $is_hu ? 'Személyre szabott terápia, fejlesztés és orvosi felügyelet.' : 'Evaluare continuă, consiliere psihologică și terapie de recuperare.'; ?></small>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-3 bg-light rounded-3 h-100 border">
                        <h6 class="fw-bold text-dark"><i class="bi bi-mortarboard text-primary me-2"></i><?php echo $is_hu ? 'Oktatás és Integráció' : 'Educație și Reintegrare'; ?></h6>
                        <small class="text-secondary"><?php echo $is_hu ? 'Iskolai felzárkóztatás és önálló életre való felkészítés.' : 'Sprijin educațional și dezvoltarea deprinderilor de viață independentă.'; ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- INSTITUTIONS TABLE (FROM IP_COPILULUI.HTML) -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-white border-bottom p-4">
                <h4 class="fw-bold text-dark mb-1">
                    <?php echo $is_hu ? 'Gyermekvédelmi Központok és Szolgáltató Egységek (Maros Megye)' : 'Servicii Sociale pentru Copii – DGASPC Mureș'; ?>
                </h4>
                <p class="text-secondary small mb-0">
                    <?php echo $is_hu ? 'Hivatalos intézményi nyilvántartás, címek, telefonszámok és kapcsolattartók.' : 'Evidența completă a centrelor, adrese, date de contact și persoane responsabile.'; ?>
                </p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-uppercase fs-xs">
                        <tr>
                            <th class="ps-4">Nr.</th>
                            <th><?php echo $is_hu ? 'Intézmény Megnevezése' : 'Denumirea Unității'; ?></th>
                            <th><?php echo $is_hu ? 'Cím' : 'Adresa'; ?></th>
                            <th><?php echo $is_hu ? 'Elérhetőség' : 'Contact'; ?></th>
                            <th><?php echo $is_hu ? 'Kedvezményezettek' : 'Tip Beneficiari'; ?></th>
                            <th class="pe-4"><?php echo $is_hu ? 'Felelős Vezető' : 'Persoana de Contact'; ?></th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <tr>
                            <td class="ps-4 fw-bold">1</td>
                            <td class="fw-semibold">Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș</td>
                            <td>Tg. Mureș, str. Trebely nr. 3</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-217.212</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-primary-subtle text-primary fw-normal">Copii cu deficiențe</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">2</td>
                            <td class="fw-semibold">Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș</td>
                            <td>Tg. Mureș, str. Branului nr. 3</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-235.979</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-primary-subtle text-primary fw-normal">Copii cu deficiențe</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">3</td>
                            <td class="fw-semibold">Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș</td>
                            <td>Tg. Mureș, str. Turnu Roșu 1/B</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-269.242</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-primary-subtle text-primary fw-normal">Copii cu deficiențe</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">4</td>
                            <td class="fw-semibold">Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș</td>
                            <td>Tg. Mureș, str. Sinaia nr. 13</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-255.888</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-primary-subtle text-primary fw-normal">Copii cu deficiențe</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">5</td>
                            <td class="fw-semibold">Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș</td>
                            <td>Ogra/Ceuașu de Câmpie nr. 417</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-324.390</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-primary-subtle text-primary fw-normal">Copii cu deficiențe</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">6</td>
                            <td class="fw-semibold">Serviciul rezidențial de îngrijire și asistență medico-socială „Speranța”</td>
                            <td>Tg. Mureș, str. Gh. Marinescu nr. 38</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-213.512</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-info-subtle text-info-emphasis fw-normal">Copii cu deficiențe 0-3 ani</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">7</td>
                            <td class="fw-semibold">Echipa mobilă de recuperare pentru copilul cu dizabilități</td>
                            <td>Tg. Mureș, str. Branului nr. 3</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-235.979</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>crcdn@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-warning-subtle text-warning-emphasis fw-normal">Copii cu dizabilități</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Daradics Ildiko Leila</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">8</td>
                            <td class="fw-semibold">Serviciul de recuperare de zi pentru copilul cu dizabilități din comunitate</td>
                            <td>Sighișoara, str. Aleea Margaritarelor nr. 16</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-771.908</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>serviciulrecuperarezz@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-warning-subtle text-warning-emphasis fw-normal">Copii cu dizabilități</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Drăgan Luminița Alina</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">9</td>
                            <td class="fw-semibold">Centrul Maternal „Materna”</td>
                            <td>Tg. Mureș, str. Salcâmilor nr. 22</td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i>0265-265.098</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>materna@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-success-subtle text-success fw-normal">Gravide / Cuplu mamă-copil</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Podar Georgeta</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">10</td>
                            <td class="fw-semibold">Centrul de primire în regim de urgență „Telefonul Copilului”</td>
                            <td>Tg. Mureș</td>
                            <td>
                                <div><i class="bi bi-telephone text-danger me-1"></i>119 / 0265-211.561</div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i>sirup@dgaspcmures.ro</div>
                            </td>
                            <td><span class="badge bg-danger-subtle text-danger fw-normal">Copii abuzați / neglijați / exploatați</span></td>
                            <td class="pe-4 fw-semibold text-secondary">Todor Valeria Stela</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>