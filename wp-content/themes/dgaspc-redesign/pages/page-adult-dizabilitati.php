<?php
/*
 * Template Name: Adulti si Dizabilitati Template
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
                <?php echo $is_hu ? 'Felnőtt- és Fogyatékosügyi Szolgáltatások' : 'Servicii Sociale pentru Adulți și Persoane cu Dizabilități'; ?>
            </h1>
            <p class="text-secondary mx-auto" style="max-width: 800px;">
                <?php echo $is_hu 
                    ? 'A Maros Megyei Szociális és Gyermekvédelmi Igazgatóság felnőtt intézményhálózata, rehabilitációs központjai és közösségi projektjei.' 
                    : 'Rețeaua oficială a centrelor de îngrijire, asistență, recuperare și reabilitare neuropsihiatrică pentru persoane adulte din județul Mureș.'; ?>
            </p>
        </div>

        <!-- FEATURED PROJECTS (RETEAUA APP & VIP-PLUS) -->
        <div class="row g-4 mb-5">
            
            <!-- 1. RETEAUA APP -->
            <div class="col-12 col-lg-6">
                <div class="card h-100 border rounded-4 bg-white shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-primary-subtle text-primary fw-semibold px-3 py-2 rounded-pill">
                                <i class="bi bi-person-badge me-1"></i> Proiect POCU
                            </span>
                            <span class="small text-muted font-monospace">Rețeaua APP</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">
                            <?php echo $is_hu ? 'Rețeaua APP – Személyi Segítő Hálózat' : 'Proiectul „Rețeaua APP” – Asistent Personal Profesionist'; ?>
                        </h4>
                        <p class="text-secondary small mb-3 lh-base">
                            <?php echo $is_hu 
                                ? 'A projekt célja az intézményi ellátásból az önálló közösségi életvitelre való áttérés támogatása hivatásos személyi asszisztensek képzésével és foglalkoztatásával.' 
                                : 'Suport pentru o viață independentă în comunitate pentru persoanele cu dizabilități prin dezvoltarea rețelei de asistenți personali profesioniști la nivelul județului Mureș.'; ?>
                        </p>

                        <!-- DOWNLOADABLE DOCUMENTS LIST -->
                        <div class="bg-light rounded-3 p-3 mb-3 border">
                            <h6 class="fw-bold text-dark small mb-2">
                                <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> 
                                <?php echo $is_hu ? 'Letölthető dokumentumok & Űrlapok:' : 'Documente și Formulare de Selecție:'; ?>
                            </h6>
                            <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                                <li>
                                    <a href="https://www.dgaspcmures.ro/docs/2026/09.04.2026_Metodologie_de_selectie_a_grupului_tinta_APP_revizuita.pdf" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-primary">
                                        <i class="bi bi-file-earmark-pdf text-danger me-1"></i> Metodologie de selecție grup țintă (PDF) &rarr;
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.dgaspcmures.ro/reteaua_app.html" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-primary">
                                        <i class="bi bi-file-earmark-text text-primary me-1"></i> Cerere de înscriere și anexe &rarr;
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="https://www.dgaspcmures.ro/reteaua_app.html" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm w-100">
                        <i class="bi bi-box-arrow-up-right me-2"></i> <?php echo $is_hu ? 'Teljes pályázati tájékoztató' : 'Vezi toate detaliile Rețeaua APP'; ?>
                    </a>
                </div>
            </div>

            <!-- 2. PROIECT VIP PLUS CRIPS -->
            <div class="col-12 col-lg-6">
                <div class="card h-100 border rounded-4 bg-white shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-success-subtle text-success fw-semibold px-3 py-2 rounded-pill">
                                <i class="bi bi-heart-pulse-fill me-1"></i> Parteneriat CRIPS
                            </span>
                            <span class="small text-muted font-monospace">VIP-PLUS</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">
                            <?php echo $is_hu ? 'VIP PLUS – Inklúzió és Támogatás' : 'Proiectul „VIP PLUS” – Voluntariat și Incluziune'; ?>
                        </h4>
                        <p class="text-secondary small mb-3 lh-base">
                            <?php echo $is_hu 
                                ? 'A CRIPS Egyesület és a DGASPC Maros közös programja: felnőtt fogyatékkal élők és szociálisan hátrányos helyzetűek készségfejlesztése, IT és elektronikai eszközök kihelyezése a nappali központokba.' 
                                : 'Parteneriat strategic între DGASPC Mureș și Asociația CRIPS pentru sprijinirea incluziunii sociale, dotarea centrelor de zi și formarea specialiștilor în asistență socială.'; ?>
                        </p>

                        <!-- HIGHLIGHT INFO -->
                        <div class="bg-light rounded-3 p-3 mb-3 border">
                            <h6 class="fw-bold text-dark small mb-2">
                                <i class="bi bi-info-circle-fill text-success me-1"></i> 
                                <?php echo $is_hu ? 'Főbb tevékenységek & Eredmények:' : 'Direcții principale ale proiectului:'; ?>
                            </h6>
                            <ul class="list-unstyled small mb-0 d-flex flex-column gap-1 text-muted">
                                <li>&bull; <?php echo $is_hu ? 'IT eszközök átadása a nappali központoknak' : 'Dotări IT pentru centrele de zi și parteneri'; ?></li>
                                <li>&bull; <?php echo $is_hu ? 'Szakmai tréningek szociális szakembereknek' : 'Sesiuni de instruire pentru personalul de specialitate'; ?></li>
                                <li>&bull; <?php echo $is_hu ? 'Közösségi integráció és életvezetési segítség' : 'Programe de voluntariat și incluziune comunitară'; ?></li>
                            </ul>
                        </div>
                    </div>

                    <a href="http://www.crips.ro/doc/proiecte/2021-VIPPLUS/vipplus-prez.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success btn-sm w-100">
                        <i class="bi bi-box-arrow-up-right me-2"></i> <?php echo $is_hu ? 'VIP PLUS Részletek & Archívum' : 'Detalii Proiect VIP PLUS (CRIPS)'; ?>
                    </a>
                </div>
            </div>

        </div>

        <!-- COMPLETE INSTITUTIONS TABLE (ALL 14 ENTRIES FROM IP_ADULTULUI.HTML) -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5">
            <div class="card-header bg-white border-bottom p-4">
                <h4 class="fw-bold text-dark mb-1">
                    <?php echo $is_hu ? 'Felnőtt Fogyatékosügyi és Gondozási Intézmények Jegyzéke' : 'Evidența Centrelor Rezidențiale pentru Adulți'; ?>
                </h4>
                <p class="text-secondary small mb-0">
                    <?php echo $is_hu ? 'A DGASPC Maros mind a 14 felnőttellátó intézménye, címe, elérhetősége és vezetője.' : 'Toate cele 14 centre de îngrijire, asistență, locuințe protejate și recuperare neuropsihiatrică din județul Mureș.'; ?>
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
                            <th><?php echo $is_hu ? 'Szolgáltatás Típusa' : 'Tip Serviciu'; ?></th>
                            <th class="pe-4"><?php echo $is_hu ? 'Felelős Vezető' : 'Persoana de Contact'; ?></th>
                        </tr>
                    </thead>
                    <tbody class="small">
                        <?php
                        $institutii_adulti = array(
                            array('1', 'Centrul de Îngrijire și Asistență Reghin (CÎA Reghin)', 'Reghin, B-dul Unirii nr. 53, jud. Mureș', '0265-511.002', 'ciareghin@yahoo.com', 'MS1', 'Şef: Cotoi Ana'),
                            array('2', 'Centrul de Îngrijire și Asistență Sfânta Maria Căpușu de Câmpie (CÎA Sfânta Maria Căpușu de Câmpie)', 'Iclănzel, 233, sat Căpușu de Câmpie, jud. Mureș', '0265-716.591', 'unitate_partila@yahoo.com', 'MS1', 'Şef: Şand Viorica'),
                            array('2.1', 'Centrul de Îngrijire și Asistență Sfântu Andrei Căpușu de Câmpie (CÎA Căpușu de Câmpie)', 'Iclănzel, 233, sat Căpușu de Câmpie, jud. Mureș', '0265-716.591', 'unitate_partila@yahoo.com', 'MS1', 'Şef: Şand Viorica'),
                            array('2.2', 'Locuință Maxim Protejată Căpușu de Câmpie (LMP Căpușu de Câmpie)', 'Iclănzel, 233, sat Căpușu de Câmpie, jud. Mureș', '0265-716.591', 'unitate_partila@yahoo.com', 'MS1', 'Şef: Şand Viorica'),
                            array('3', 'Centrul de Îngrijire și Asistență Sighișoara (CÎA Sighișoara)', 'Sighișoara, str. Justiției nr. 8, jud. Mureș', '0265-771.601', 'cia_sighisoara@yahoo.com', 'MS1', 'Şef: Avram Florin'),
                            array('4', 'Centrul de Îngrijire și Asistență Lunca Mureșului (CÎA Lunca Mureșului)', 'Aluniș, sat Lunca Mureșului nr. 52, jud. Mureș', '0265-553.725', 'cia_luncamur@yahoo.com', 'MS1', 'Şef: Pop Liviu'),
                            array('5', 'Centrul de Îngrijire și Asistență Glodeni (CÎA Glodeni)', 'Glodeni, str. Principală, nr. 369, jud. Mureș', '0265-328.257', 'komari_b@yahoo.com', 'FPMS1', 'Şef: Berekméri Mária'),
                            array('6', 'Centrul de Abilitare și Reabilitare Reghin (CABR Reghin)', 'Reghin, str. Gării nr. 12, jud. Mureș', '0265-512.656', 'crrn_reghin@yahoo.com', 'MS1', 'Şef: Lazar Ana'),
                            array('7', 'Centrul de Recuperare și Reabilitare Neuropsihiatrică Brâncovenești (CRRN Brâncovenești)', 'Brâncovenești, str. Castelului 215, jud. Mureș', '0265-550.011', 'crrnbrancov@yahoo.com', 'FPMS1', 'Şef: Dr. Pokorny Vasile'),
                            array('8', 'Centrul de Recuperare și Reabilitare Neuropsihiatrică Luduș (CRRN Luduș)', 'Luduș, str. Crinului, nr. 30A, jud. Mureș', '0265-411.027', 'crrnludus@yahoo.com', 'MS1', 'Şef: Baghiu Ovidiu'),
                            array('9', 'Centrul de Recuperare și Reabilitare Neuropsihiatrică Călugăreni (CRRN Călugăreni)', 'Călugăreni, str. Bisericii, nr. 54, jud. Mureș', '0265-896.116', 'crrn.calugareni@yahoo.ro', 'RÂŞNOV', 'Şef: Briciuş Szilard Vencel'),
                            array('10', 'Centrul de Abilitare și Reabilitare Ceuașu de Câmpie Nr. 43 (CABR Ceuașu de Câmpie Nr. 43)', 'Ceuașu de Câmpie, Nr. 43, jud. Mureș', '0729-020.916', 'crrn.ceuasu@yahoo.com', 'RÂŞNOV', 'Şef: Aszalos Gabriela'),
                            array('11', 'Centrul de Abilitare și Reabilitare Ceuașu de Câmpie Nr. 195 (CABR Ceuașu de Câmpie Nr. 195)', 'Ceuașu de Câmpie, Nr. 195, jud. Mureș', '0729-020.916', 'crrn.ceuasu@yahoo.com', 'FPMS1', 'Şef: Aszalos Gabriela'),
                            array('12', 'Centrul de Abilitare și Reabilitare Ceuașu de Câmpie Nr. 215 (CABR Ceuașu de Câmpie Nr. 215)', 'Ceuașu de Câmpie, Nr. 215, jud. Mureș', '0729-020.916', 'crrn.ceuasu@yahoo.com', 'RÂŞNOV', 'Şef: Aszalos Gabriela'),
                            array('13', 'Centrul de Abilitare și Reabilitare Sighișoara (CABR Sighișoara)', 'Sighișoara, str. Aleea Margaritarelor, Nr. 18, jud. Mureș', '0265-520.120', 'cabr_sighisoara@yahoo.com', 'MS1', 'Şef: Anghel Marinela'),
                            array('14', 'Cămin pentru Persoane Vârstnice Ideciu de Jos (CPV Ideciu de Jos)', 'Ideciu de Jos, Nr. 158, jud. Mureș', '0265-716.275', 'cpvideciu@yahoo.com', 'MS1', 'Şef: Herman Marinela'),
                        );

                        foreach ($institutii_adulti as $inst) :
                            list($nr, $denumire, $adresa, $telefon, $email, $tip, $contact) = $inst;
                        ?>
                        <tr>
                            <td class="ps-4 fw-bold"><?php echo esc_html($nr); ?></td>
                            <td class="fw-semibold"><?php echo esc_html($denumire); ?></td>
                            <td><?php echo esc_html($adresa); ?></td>
                            <td>
                                <div><i class="bi bi-telephone text-primary me-1"></i><?php echo esc_html($telefon); ?></div>
                                <div class="text-muted"><i class="bi bi-envelope text-primary me-1"></i><a href="mailto:<?php echo esc_attr($email); ?>" class="text-muted text-decoration-none"><?php echo esc_html($email); ?></a></div>
                            </td>
                            <td><span class="badge bg-primary-subtle text-primary fw-normal"><?php echo esc_html($tip); ?></span></td>
                            <td class="pe-4 fw-semibold text-secondary"><?php echo esc_html($contact); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>