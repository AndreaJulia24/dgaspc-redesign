<?php 
/*
 * Template Name: Homepage Template
 */
get_header(); ?>
<?php 
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

$title = $is_hu ? 'Szociális Szolgáltatások Térképe' : 'Harta Serviciilor Sociale';
$desc  = $is_hu ? 'Kattintson a képre az interaktív térkép megnyitásához' : 'Faceți clic pe imagine pentru a deschide harta interactivă';
$img   = $is_hu ? 'harta-hu.png' : 'harta-ro.png';
$map_url = $is_hu ? home_url('/hu/interaktiv-terkep/') : home_url('/harta-interactiva/');
?>

<main class="py-5 bg-light">
    <div class="container">
        <section class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">
                <?php echo $is_hu ? 'Szociális Szolgáltatások az Állampolgároknak' : 'Servicii de Asistență Socială pentru Cetățeni'; ?>
            </h2>
            <p class="text-secondary mx-auto" style="max-width: 700px;">
                <?php echo $is_hu 
                    ? 'A DGASPC Maros támogatást, védelmet és szakszerű szolgáltatásokat nyújt gyermekeknek, felnőtteknek, nehéz helyzetben lévő családoknak és fogyatékkal élőknek.' 
                    : 'DGASPC Mureș oferă suport, protecție și servicii specializate pentru copii, adulți, familii aflate în dificultate și persoane cu dizabilități.'; ?>
            </p>
        </section>
        <!-- CARDS GRID FOR THE SERVICES -->
         <!-- COMMON ROW -->
        <div class="row g-4">
            <!-- 1. CARD COLUMN: Protecția Copilului -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-emoji-smile fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">
                                <?php echo $is_hu ? 'Gyermekvédelem' : 'Protecția Copilului'; ?>
                            </h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                            <?php echo $is_hu ? 'Információk az örökbefogadásról, a gyermekek elhelyezéséről és a támogató szolgáltatásokról.' : 'Informații despre adopție, plasament și servicii de sprijin pentru copii.'; ?>
                            </p>
                            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/gyermekvedelem/' : '/protectia-copilului/' ) ); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                <?php echo $is_hu ? 'Tudj meg többet &rarr;' : 'Află mai multe &rarr;'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- 2. CARD COLUMN: Adulți & Dizabilități -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px;  height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-person-wheelchair fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">
                                <?php echo $is_hu ? 'Felnőtt és Fogyatékosok' : 'Adulți & Dizabilități'; ?>
                            </h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                <?php echo $is_hu ? 'Információk a felnőttek és a fogyatékkal élők támogatásáról.' : 'Informații despre servicii de sprijin pentru adulți și persoane cu dizabilități.'; ?>
                            </p>
                            <a href="<?php echo esc_url( home_url( '/adulti-dizabilitati/' ) ); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                <?php echo $is_hu ? 'Tudj meg többet &rarr;' : 'Află mai multe &rarr;'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- 3. CARD COLUMN: RAPORTEAZĂ ABUZUL -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                           <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3 fw-bold" style="width: 48px; height: 48px; background-color: #fee2e2; color: #dc2626;">
                            SOS
                        </div>
                            <h5 class="card-title fw-bold text-dark mb-2">
                                <?php echo $is_hu ? 'Jelentés az elkövetett bántalmazásról' : 'Raportează un abuz'; ?>
                            </h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                <?php echo $is_hu ? 'Ha bármilyen gyanúd van egy gyermek vagy felnőtt bántalmazásáról, jelentsd azonnal.' : 'Dacă suspectezi un caz de abuz sau neglijare a unui copil sau adult, raportează-l imediat.'; ?>
                            </p>
                            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/bantalmazas-bejelentese/' : '/raporteaza-abuz/' ) ); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                <?php echo $is_hu ? 'Tudj meg többet &rarr;' : 'Află mai multe &rarr;'; ?>
                            </a>
                        </div>
                    </div>
                </div>
        <!-- 4. CARD COLUMN: Asistență Maternală -->
        <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-heart-pulse fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">
                                <?php echo $is_hu ? 'Hivatásos Nevelőszülői Hálózat' : 'Asistență Maternală'; ?>
                            </h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                <?php echo $is_hu ? 'Szerezd be a születési támogatásokkal kapcsolatos információkat.' : 'Obține informații despre serviciile de asistență maternă disponibile.'; ?>
                            </p>
                            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/gyermekvedelem/#institutii-tabla' : '/protectia-copilului/#institutii-tabla' ) ); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                <?php echo $is_hu ? 'Tudj meg többet &rarr;' : 'Află mai multe &rarr;'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- INTERACTIVE MAP SECTION -->
         <section class="my-5">
           <div class="card border rounded-5 bg-white shadow-sm p-4 p-lg-5">
              <div class="row align-items-center">
                <!-- LEFT COLUMN: MAP -->
                <div class="col-12 col-lg-6 text-start">
                    <h3 class="fw-bold text-dark mb-3">
                        <?php echo $is_hu ? 'A Szociális Szolgáltatások Térképe a Mureș Megyében' : 'Harta Serviciilor Sociale din Județul Mureș'; ?>
                    </h3>
                    <p class="text-secondary mb-4 lh-base">
                        <?php echo $is_hu 
                            ? 'Fedezze fel a mi csapatunkat, ahol az otthonos szolgáltatások, a napi közösségi szolgáltatások és az ellátási szolgáltatások elérhetők a megye egészén keresztül, hogy biztosítsuk a közeliséget a kedvezményezettek számára.' 
                            : 'Descoperiți rețeaua noastră de centre rezidențiale, centre de zi și servicii de sprijin distribuite la nivelul județului pentru a asigura proximitatea față de beneficiari.'; ?>
                    </p>
                    <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/interaktiv-terkep/' : '/harta-interactiva/' ) ); ?>" class="btn text-white fw-medium px-4 py-2 rounded-pill shadow-sm" style="background-color: #0b2545;">
                        <?php echo $is_hu ? 'Fedezd fel az interaktív térképet' : 'Explorează harta interactivă'; ?>
                    </a>
                </div>
                <!-- RIGHT COLUMN: MAP IMAGE -->
                <div class="col-12 col-lg-6 text-center">
                    <a href="<?php echo esc_url( $map_url ); ?>" title="<?php echo $desc; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $img; ?>" alt="Harta Serviciilor Sociale Mureș" class="img-fluid rounded-3 shadow-sm" style="max-height: 400px; width: 100%; object-fit: contain;">
                    </a>
                </div>
            </div>
        </div>
    </section>

  <!-- ANUNTURI SI NOUTATI SECTION -->
<section class="my-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
            <h3 class="fw-bold text-dark mb-1">
                <?php echo $is_hu ? 'Hírek és Frissítések' : 'Anunțuri și Noutăți'; ?>
            </h3>
            <p class="text-secondary small mb-0">Ultimele comunicate și informații de interes public.</p>
        </div>
        <!-- DINAMIKUSAN FOR ALL PAGES POSTS -->
        <a href="<?php echo esc_url( home_url( $is_hu ? '/hirek/' : '/noutati/' ) ); ?>" class="text-decoration-none text-primary fw-semibold small mt-2 mt-md-0">
        <?php echo $is_hu ? 'Nézd meg az összes hírt &rarr;' : 'Vezi toate anunțurile &rarr;'; ?>
        </a>
    </div>

    <!-- DINAMIKUS GENERALT CARDS -->
    <div class="row g-4">
        <?php
        $anunturi_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'lang'           => $current_lang,
        ));

        if ($anunturi_query->have_posts()) :
            while($anunturi_query->have_posts()) : $anunturi_query->the_post(); 
                $categories = get_the_category();
        ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="d-flex gap-2 mb-3">
                                <span class="badge bg-light text-secondary border fw-medium px-2 py-1">
                                    <?php echo get_the_date('d M Y'); ?>
                                </span>
                                <?php if (!empty($categories)) : ?>
                                    <span class="badge bg-primary-subtle text-primary border-0 fw-medium px-2 py-1">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <h5 class="card-title fw-bold text-dark fs-6 mb-2"><?php the_title(); ?></h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                <?php echo $is_hu ? 'Tudj meg többet &rarr;' : 'Află mai multe &rarr;'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="col-12">
                <?php echo $is_hu ? 'Jelenleg nincs elérhető hír.' : 'Nu există anunțuri disponibile în acest moment.'; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- FORMULARE SI DOCUMENTE SECTION -->
 <!-- DINAMICALLY GENERATED DOCUMENTS AND FORMS SECTION -->
<section class="my-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-dark mb-1">
                    <?php echo $is_hu ? 'Hasznos űrlapok és dokumentumok' : 'Formulare și Documente Utile'; ?>
                </h3>
            </div>
            
            <div class="card border rounded-3 bg-white shadow-sm p-4">
                <?php 
                $document_terms = get_terms(array(
                    'taxonomy'   => 'document_category',
                    'hide_empty' => false, 
                    'lang'       => $current_lang,
                ));
                
                if (!empty($document_terms) && !is_wp_error($document_terms)) : ?>
                
                    <!-- CATEGORY TABS -->
                    <div class="card-header bg-white border-bottom pt-3 px-4">
                        <ul class="nav nav-tabs card-header-tabs border-0 gap-3" id="documentsTab" role="tablist">
                            <?php foreach ($document_terms as $index => $term) : ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link custom-tab <?php echo $index === 0 ? 'active' : ''; ?> fw-semibold pb-3 bg-transparent border-0"
                                        id="tab-btn-<?php echo esc_attr($term->term_id); ?>"
                                        data-bs-toggle="tab"
                                        data-bs-target="#tab-pane-<?php echo esc_attr($term->term_id); ?>"
                                        type="button"
                                        role="tab"
                                        aria-controls="tab-pane-<?php echo esc_attr($term->term_id); ?>"
                                        aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- CATEGORY CONTENT -->
                    <div class="card-body p-4">
                        <div class="tab-content" id="documentsTabContent">
                            <?php foreach ($document_terms as $index => $term) : ?>
                                <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" 
                                     id="tab-pane-<?php echo esc_attr($term->term_id); ?>" 
                                     role="tabpanel" 
                                     aria-labelledby="tab-btn-<?php echo esc_attr($term->term_id); ?>">
                                    
                                    <h4 class="fw-bold text-dark mb-1"><?php echo esc_html($term->name); ?></h4>
                                    <p class="text-secondary small mb-4">
                                        <?php echo !empty($term->description) ? esc_html($term->description) : 'Documentele necesare pentru această secțiune.'; ?>
                                    </p>
                                    <?php
                                    $docs_query = new WP_Query(array(
                                        'post_type'      => 'document',
                                        'posts_per_page' => -1,
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'document_category',
                                                'field'    => 'term_id',
                                                'terms'    => $term->term_id,
                                            ),
                                        ),
                                    ));

                                    if ($docs_query->have_posts()) :
                                        while ($docs_query->have_posts()) : $docs_query->the_post(); 
                                        ?>
                                            <!-- One Document Row -->
                                            <div class="d-flex align-items-center justify-content-between py-3 border-bottom border-light">
                                                
                                                <!-- LEFT: TEXT  -->
                                                <div class="d-flex align-items-start gap-3 flex-grow-1 pe-3">
                                                    <div class="text-danger fs-4 mt-1 flex-shrink-0">
                                                        <i class="bi bi-file-earmark-pdf"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-bold text-dark mb-1"><?php the_title(); ?></h6>
                                                        <p class="text-secondary small mb-1">
                                                            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                                        </p>
                                                        <small class="text-muted d-block">Actualizat: <?php echo get_the_date('Y'); ?></small>
                                                    </div>
                                                </div>
                                                
                                                <!-- HIDDEN BLOCK WITH FULL CONTENT FOR PDF GENERATION -->
                                                <div id="pdf-content-<?php the_ID(); ?>" class="d-none">
                                                    <h6 class="pdf-title"><?php the_title(); ?></h6>
                                                    <div class="pdf-body">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                                
                                                <?php
                                                $post_content = get_the_content();
                                                preg_match('/href=["\']([^"\']+)["\']/', $post_content, $matches);
                                                $direct_download_url = !empty($matches[1]) ? esc_url($matches[1]) : get_permalink();
                                                ?>

                                                <!-- RIGHT: DOWNLOAD BUTTON  -->
                                                <a href="<?php echo $direct_download_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-link text-primary fs-5 p-2 flex-shrink-0" title="<?php echo $is_hu ? 'Dokumentum letöltése' : 'Descarcă documentul'; ?>">
                                                    <i class="bi bi-download"></i>
                                                </a>
                                            </div>

                                        <?php endwhile;
                                        wp_reset_postdata();
                                    else : ?>
                                        <p class="text-secondary small mb-0"> <?php echo $is_hu ? 'Nincs elérhető dokumentum ebben a kategóriában.' : 'Nu există documente disponibile în această categorie.'; ?></p>
                                    <?php endif; ?>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
<!-- CAMPANII SI PROIECTE SECTION -->
 <!-- DYNAMICALLY GENERATED CAMPAIGNS AND PROJECTS SECTION -->
<section class="my-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
    <div class="mb-4">
        <h3 class="fw-bold text-dark mb-1">
            <?php echo $is_hu ? 'Kampányok és Projektek' : 'Campanii și Proiecte'; ?>
        </h3>
        <p class="text-secondary small mb-0">Inițiativele noastre pentru sprijinirea comunității și promovarea incluziunii sociale.
            <?php echo $is_hu ? 'Közösségünk támogatására és a társadalmi befogadás előmozdítására irányuló kezdeményezéseink.' : ''; ?>
        </p>
    </div>
    <div class="mb-4">
         <a href="<?php echo esc_url( get_post_type_archive_link('campanie') ); ?>" class="text-decoration-none text-primary fw-semibold small mt-2 mt-md-0">
            <?php echo $is_hu ? 'Minden kampány megtekintése &rarr;' : 'Vezi toate campaniile &rarr;'; ?>
        </a>
    </div>
    </div>
    <div class="row g-4">
        <?php
        $campanii_query = new WP_Query(array(
            'post_type'      => 'campanie',
            'posts_per_page' => 2,
        ));
        if ($campanii_query->have_posts()) :
            while ($campanii_query->have_posts()) : $campanii_query->the_post(); 
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                if (!$thumbnail_url) {
                    //If no featured image is set, use a default placeholder image
                    $thumbnail_url = get_template_directory_uri() . '/assets/images/campanie1.png';
                }
        ?>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm  overflow-hidden">
                        <div class="row g-0 h-100 align-items-center">
                            
                            <!-- LEFT SIDE: IMAGE / PLACEHOLDER (col-4) -->
                            <div class="col-4 text-center d-flex align-items-center justify-content-center bg-light rounded-start h-100" style="min-height: 180px;">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium', [
                                        'class' => 'img-fluid rounded-2 shadow-sm',
                                        'style' => 'max-height: 200px; width: 100%; object-fit: contain;'
                                    ]); ?>
                                <?php else : ?>
                                    <!-- IF THERE IS NO IMAGE -->
                                    <div class="text-secondary opacity-50 d-flex flex-column align-items-center justify-content-center p-3">
                                        <i class="bi bi-image fs-1 mb-1"></i>
                                        <span class="badge bg-secondary-subtle text-secondary small fw-normal"><?php echo $is_hu ? 'Nincs kép' : 'Fără imagine'; ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- RIGHT SIDE: TEXT AND BUTTON (col-8) -->
                            <div class="col-8">
                                <div class="card-body d-flex flex-column justify-content-center text-start py-2 px-3">
                                    <h5 class="card-title fw-bold text-dark mb-2 fs-5"><?php the_title(); ?></h5>
                                    <p class="card-text text-secondary small mb-4 lh-sm">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                        <?php echo $is_hu ? 'Részletek &rarr;' : 'Află detaliile &rarr;'; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="col-12">
                <p class="text-secondary small">
                    <?php echo $is_hu ? 'Nincs elérhető kampány vagy projekt.' : 'Nu există campanii sau proiecte disponibile în acest moment.'; ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>
    </div>
</main>
<?php get_footer(); ?>