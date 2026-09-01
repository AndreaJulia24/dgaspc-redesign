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
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary">
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

        <!-- REVISTA FAMILIA NOASTRA - MAGAZINE ARCHIVE (real content from despre_familia_noastra.html) -->
        <div class="card border rounded-4 bg-white shadow-sm p-4 p-lg-5 mb-5">
            <h3 class="fw-bold text-dark mb-3">
                <i class="bi bi-journal-richtext text-primary me-2"></i>
                <?php echo $is_hu ? 'Revista „Familia Noastră” – Kiadványaink' : 'Revista „Familia Noastră” – Arhiva Publicațiilor'; ?>
            </h3>
            <p class="text-secondary lh-base mb-4">
                <?php echo $is_hu 
                    ? 'Intézményünk saját kiadású magazinja, amely rendszeresen beszámol a szolgáltatásainkról, projektjeinkről és a gondozott gyermekek és fiatalok életéből vett történetekről.' 
                    : 'Publicația periodică a instituției, cu informații despre serviciile, proiectele și activitățile derulate în beneficiul copiilor și tinerilor din sistemul de protecție.'; ?>
            </p>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
                <?php
                $reviste = array(
                    array('nr' => 30, 'url' => 'http://www.dgaspcmures.ro/docs/2026/DGASPC%2030_mic.pdf'),
                    array('nr' => 29, 'url' => 'http://www.dgaspcmures.ro/docs/2025/DGASPC%2029_mic.pdf'),
                    array('nr' => 28, 'url' => 'http://www.dgaspcmures.ro/docs/2025/DGASPC%2028_mic.pdf'),
                    array('nr' => 27, 'url' => 'http://www.dgaspcmures.ro/docs/2025/DGASPC%2027_mic.pdf'),
                    array('nr' => 26, 'url' => 'http://www.dgaspcmures.ro/docs/2025/DGASPC%2026_mic.pdf'),
                    array('nr' => 25, 'url' => 'http://www.dgaspcmures.ro/docs/2023/DGASPC%2025_mic.pdf'),
                    array('nr' => 24, 'url' => 'http://www.dgaspcmures.ro/docs/2022/DGASPC%2024_mic.pdf'),
                    array('nr' => 23, 'url' => 'http://www.dgaspcmures.ro/docs/2022/DGASPC%2023_mic.pdf'),
                    array('nr' => 22, 'url' => 'http://www.dgaspcmures.ro/docs/2019/DGASPC%2022_mic.pdf'),
                    array('nr' => 21, 'url' => 'http://www.dgaspcmures.ro/docs/2018/DGASPC%2021_mic.pdf'),
                );
                foreach ($reviste as $r) :
                ?>
                    <div class="col">
                        <a href="<?php echo esc_url($r['url']); ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                            <div class="p-3 bg-light rounded-3 border text-center h-100 d-flex flex-column align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-pdf-fill text-danger fs-2 mb-2"></i>
                                <span class="small fw-semibold text-dark"><?php echo $is_hu ? 'Szám' : 'Nr.'; ?> <?php echo esc_html($r['nr']); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="text-secondary small mt-3 mb-0">
                <?php echo $is_hu 
                    ? 'A régebbi számok (1-20) a régi honlap archívumában érhetők el.' 
                    : 'Numerele mai vechi (1-20) sunt disponibile în arhiva vechiului site.'; ?>
            </p>
        </div>

        <!-- INSTITUTIONS TABLE - REAL, COMPLETE DATA (41 entries from ip_copilului.html) -->
        <div class="card border rounded-4 bg-white shadow-sm overflow-hidden mb-5" id="instutii-tabel">
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
                        <?php
                        $institutii = array(
                            array(1,'Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș','Tg. Mureș, str. Trebely nr. 3','0265-217.212','crcdn@dgaspcmures.ro','Copii cu deficiențe','Daradics Ildiko Leila'),
                            array(2,'Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș','Tg. Mureș, str. Branului nr. 3','0265-235.979','crcdn@dgaspcmures.ro','Copii cu deficiențe','Daradics Ildiko Leila'),
                            array(3,'Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș','Tg. Mureș, str. Turnu Roșu 1/B','0265-269.242','crcdn@dgaspcmures.ro','Copii cu deficiențe','Daradics Ildiko Leila'),
                            array(4,'Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș','Tg. Mureș, str. Slatina nr. 13','0265-265.668','crcdn@dgaspcmures.ro','Copii cu deficiențe','Daradics Ildiko Leila'),
                            array(5,'Centrul rezidențial pentru copii cu deficiențe neuropsihiatrice Tg. Mureș','Ceuașu de Câmpie nr. 417','0265-324.390','crcdn@dgaspcmures.ro','Copii cu deficiențe','Daradics Ildiko Leila'),
                            array(6,'Serviciul rezidențial de îngrijire și asistență medico-socială „Speranța”','Tg. Mureș, str. Gheorghe Marinescu nr. 38','—','crcdn@dgaspcmures.ro','Copii cu deficiențe 0-3 ani','Daradics Ildiko Leila'),
                            array(7,'Echipa mobilă de recuperare pentru copilul cu dizabilități','Tg. Mureș, str. Branului nr. 3','0265-235.979','crcdn@dgaspcmures.ro','Copii cu dizabilități','Daradics Ildiko Leila'),
                            array(8,'Serviciul de recuperare de zi pentru copilul cu dizabilități din comunitate','Sighișoara, str. Aleea Margaretelor nr. 16','0265-771.908','serviciulrecuperarezi@dgaspcmures.ro','Copii cu dizabilități','Drăgan Luminița Alina'),
                            array(9,'Centrul Maternal „Materna”','Tg. Mureș, str. Salcâmilor nr. 22','0265-265.098','materna@dgaspcmures.ro','Gravide / Cuplu mamă-copil','Podar Georgeta'),
                            array(10,'Centrul de primire în regim de urgență','Tg. Mureș','—','siru@dgaspcmures.ro','Copii abuzați / neglijați / exploatați','Fodor Valerica Stela'),
                            array(11,'Telefonul Copilului și Echipa Mobilă','Tg. Mureș, str. Strâmbă nr. 30','119','siru@dgaspcmures.ro','Copii abuzați / neglijați / exploatați','Fodor Valerica Stela'),
                            array(12,'Casa de tip familial Sâncraiu de Mureș nr.1','Sâncraiu de Mureș, str. Răsăritului, nr. 88','0265-316.410','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(13,'Casa de tip familial Sâncraiu de Mureș nr.2','Sâncraiu de Mureș, str. Răsăritului, nr. 89','0265-316.150','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(14,'Casa de tip familial Sâncraiu de Mureș nr.3','Sâncraiu de Mureș, str. Răsăritului, nr. 90','0265-316.068','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(15,'Casa de tip familial Sâncraiu de Mureș nr.4','Sâncraiu de Mureș, str. Răsăritului, nr. 91','0265-316.108','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(16,'Casa de tip familial Sâncraiu de Mureș nr.6','Sâncraiu de Mureș, str. Răsăritului, nr. 93','0265-316.325','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(17,'Casa de tip familial Sâncraiu de Mureș nr.8','Sâncraiu de Mureș, str. Răsăritului, nr. 95','0265-316.391','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(18,'Casa de tip familial Sâncraiu de Mureș nr.9','Sâncraiu de Mureș, str. Răsăritului, nr. 96','0265-316.459','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(19,'Casa de tip familial Sâncraiu de Mureș nr.11','Sâncraiu de Mureș, str. Răsăritului, nr. 98','0265-316.461','ctfsancrai@dgaspcmures.ro','Copii/tineri','Șerban Diana Lucia'),
                            array(20,'Casa de tip familial Reghin nr.4/12','Reghin, str. Făgărașului nr.4, scara I, etaj III, ap.12','0265-525.422','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(21,'Casa de tip familial Reghin nr.4/60','Reghin, str. Făgărașului nr.4 scara V, parter ap.60','0265-525.421','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(22,'Casa de tip familial Reghin nr.2/18','Reghin, str. Gării nr.2, bloc 2, scara II, etaj II, ap.18','0265-525.434','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(23,'Casa de tip familial Reghin nr.2/15','Reghin, str. Gării nr.2, bloc 2, scara II, etaj I, ap.15','0265-525.431','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(24,'Casa de tip familial Reghin Iernuțeni','Reghin, str. Iernuțeni nr.2-8, ap.9','0265-511.737','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(25,'Casa de tip familial Reghin nr.10/1','Reghin, str. Rodnei nr.10, scara I, parter, ap.1','0265-525.322','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(26,'Casa de tip familial Reghin nr.16/12','Reghin, str. Rodnei nr.16, etaj III, ap.12','0265-525.430','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(27,'Casa de tip familial Reghin nr.26','Reghin, str. Subcetate, nr.26','0265-512.469','ctfreghin@dgaspcmures.ro','Copii/tineri','Hărăpescu Claudia Ramona'),
                            array(28,'Casa de tip familial Râciu','Râciu, str. Gheorghe Șincai, nr.24','0265-426.339','ctfjudet@dgaspcmures.ro','Copii/tineri','Oltean Georgiana'),
                            array(29,'Casa de tip familial Sărmașu','Sărmașu, str. Dezrobirii, nr.58','0265-420.892','ctfjudet@dgaspcmures.ro','Copii/tineri','Oltean Georgiana'),
                            array(30,'Casa de tip familial Sărmașu','Sărmașu, str. Republicii nr.128','0265-420.893','ctfjudet@dgaspcmures.ro','Copii/tineri','Oltean Georgiana'),
                            array(31,'Casa de tip familial Zau de Câmpie','Zau de Câmpie, str. Câmpului, nr.6','0265-486.375','ctfjudet@dgaspcmures.ro','Copii/tineri','Oltean Georgiana'),
                            array(32,'Casa de tip familial Târnăveni','Târnăveni, str. George Coșbuc, nr.110','0265-448.883','ctftarnaveni@dgaspcmures.ro','Copii/tineri','Gherasim Pavel Gheorghe'),
                            array(33,'Casa de tip familial Târnăveni','Târnăveni, str. Lebedei nr.6','0265-440.302','ctftarnaveni@dgaspcmures.ro','Copii/tineri','Gherasim Pavel Gheorghe'),
                            array(34,'Casa de tip familial Târnăveni','Târnăveni, str. Plevnei nr.3','0265-445.091','ctftarnaveni@dgaspcmures.ro','Copii/tineri','Gherasim Pavel Gheorghe'),
                            array(35,'Casa de tip familial Miercurea Nirajului','Miercurea Nirajului, str. Sîntandrei nr.38','0265-576.468','ctfvaleanirajului@dgaspcmures.ro','Copii/tineri','Pascui Andreea'),
                            array(36,'Casa de tip familial Miercurea Nirajului','Miercurea Nirajului, str. Sîntandrei nr.60','0265-576.930','ctfvaleanirajului@dgaspcmures.ro','Copii/tineri','Pascui Andreea'),
                            array(37,'Casa de tip familial Miercurea Nirajului','Miercurea Nirajului, str. Semănătorilor, nr.1','0265-576.930','ctfvaleanirajului@dgaspcmures.ro','Copii/tineri','Pascui Andreea'),
                            array(38,'Casa de tip familial Bălăușeri','Bălăușeri, str. Principală, nr.259','0265-763.929','ctfvaleanirajului@dgaspcmures.ro','Copii/tineri','Pascui Andreea'),
                            array(39,'Casa de tip familial Sângeorgiu de Pădure','Sângeorgiu de Pădure, str. Gării, nr.22/A','0265-578.681','ctfvaleanirajului@dgaspcmures.ro','Copii/tineri','Pascui Andreea'),
                            array(40,'Serviciul de Asistență Maternală Profesionistă','Tîrgu Mureș, str. Trebely, nr.7','0265-213.512 / 0265-211.699 int.50','amp@dgaspcmures.ro','Copii','Todoran Livia Adela'),
                            array(41,'Serviciul Îngrijire de tip familial','Tîrgu Mureș, str. Trebely, nr.7','0265-213.512 / 0265-211.699 int.47','familial@dgaspcmures.ro','Copii','Târnăvean Claudia Marcela'),
                        );

                        foreach ($institutii as $inst) :
                            list($nr, $denumire, $adresa, $telefon, $email, $tip, $contact) = $inst;
                        ?>
                        <tr>
                            <td class="ps-4 fw-bold"><?php echo esc_html($nr); ?></td>
                            <td class="fw-semibold"><?php echo esc_html($denumire); ?></td>
                            <td><?php echo esc_html($adresa); ?></td>
                            <td>
                                <?php if ($telefon !== '—') : ?>
                                    <div><i class="bi bi-telephone text-primary me-1"></i><?php echo esc_html($telefon); ?></div>
                                <?php endif; ?>
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