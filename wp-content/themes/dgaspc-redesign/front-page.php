<?php 
/*
 * Template Name: Homepage Template
 */
get_header(); ?>

<main class="py-5 bg-light">
    <div class="container">
        <section class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Servicii de Asistență Socială pentru Cetățeni</h2>
            <p class="text-secondary mx-auto" style="max-width: 700px;">DGASPC Mureș oferă suport, protecție și servicii specializate pentru copii, adulți, familii aflate în dificultate și persoane cu dizabilități.</p>
        </section>
        <!-- CARDS GRID FOR THE SERVICES -->
         <!-- COMMON ROW -->
        <div class="row row g-4">
            <!-- 1. CARD COLUMN: Protecția Copilului -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-emoji-smile fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">Protecția Copilului</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Informații despre adopție, plasament și servicii de sprijin pentru copii.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
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
                            <h5 class="card-title fw-bold text-dark mb-2">Adulți & Dizabilități</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Informații despre servicii de sprijin pentru adulți și persoane cu dizabilități.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
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
                            <h5 class="card-title fw-bold text-dark mb-2">Raportează un abuz</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Dacă suspectezi un caz de abuz sau neglijare a unui copil sau adult, raportează-l imediat.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
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
                            <h5 class="card-title fw-bold text-dark mb-2">Asistență Maternală</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Obține informații despre serviciile de asistență maternă disponibile.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
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
                    <h3 class="fw-bold text-dark mb-3">Harta Serviciilor Sociale din Județul Mureș</h3>
                    <p class="text-secondary mb-4 lh-base">Descoperiți rețeaua noastră de centre rezidențiale, centre de zi și servicii de sprijin distribuite la nivelul județului pentru a asigura proximitatea față de beneficiari.</p>
                    <a href="#" class="btn text-white fw-medium px-4 py-2 rounded-pill shadow-sm" style="background-color: #0b2545;">
                    Explorează Harta Interactivă
                </a>
                </div>
                <!-- RIGHT COLUMN: MAP IMAGE -->
                <div class="col-12 col-lg-6 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interactiveMap.png" alt="Harta Serviciilor Sociale Mureș" class="img-fluid rounded-3 shadow-sm" style="max-height: 400px; width: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </section>

  <!-- ANUNTURI SI NOUTATI SECTION -->
<section class="my-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
            <h3 class="fw-bold text-dark mb-1">Anunțuri și Noutăți</h3>
            <p class="text-secondary small mb-0">Ultimele comunicate și informații de interes public.</p>
        </div>
        <!-- Dinamikusan az összes hír oldalára mutató link -->
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="text-decoration-none text-primary fw-semibold small mt-2 mt-md-0">
            Vezi toate anunțurile &rarr;
        </a>
    </div>

    <!-- Dinamikusan legenerált 3 legfrissebb kártya -->
    <div class="row g-4">
        <?php
        $anunturi_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
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
                                Află mai multe &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="col-12">
                <p class="text-secondary small">Nu există anunțuri disponibile în acest moment.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- FORMULARE SI DOCUMENTE SECTION -->
 <!-- DINAMICALLY GENERATED DOCUMENTS AND FORMS SECTION -->
<section class="my-5">
    <div class="text-center mb-4">
        <h3 class="fw-bold text-dark mb-1">Formulare și Documente Utile</h3>
    </div>
    
    <div class="card border rounded-3 bg-white shadow-sm p-4">
        
        <?php 
        $document_terms = get_terms(array(
            'taxonomy'   => 'document_category',
            'hide_empty' => false, 
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
                                data-bs-target="#<?php echo esc_attr($term->slug); ?>-pane"
                                type="button"
                                role="tab"
                                aria-controls="<?php echo esc_attr($term->slug); ?>-pane"
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
                             id="<?php echo esc_attr($term->slug); ?>-pane" 
                             role="tabpanel" 
                             aria-labelledby="<?php echo esc_attr($term->slug); ?>-tab">
                            
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
                                        'field'    => 'slug',
                                        'terms'    => $term->slug,
                                    ),
                                ),
                            ));

                            if ($docs_query->have_posts()) :
                                while ($docs_query->have_posts()) : $docs_query->the_post(); 
                                    // Get the file URL from the custom field
                                    $file_url = get_post_meta(get_the_ID(), 'document_file', true);
                                    if (empty($file_url)) {
                                        $file_url = '#'; // Fallback if no file is provided
                                    }
                                ?>
                                    
                                    <!-- DOCUMENT ITEM DOWNLOAD -->
                                    <div class="d-flex align-items-center justify-content-between py-3 border-bottom border-light">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="text-danger fs-4">
                                                <i class="bi bi-file-earmark-pdf"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-dark mb-0"><?php the_title(); ?></h6>
                                                <small class="text-secondary">PDF &bull; Actualizat <?php echo get_the_date('Y'); ?></small>
                                            </div>
                                        </div>
                                        
                                        <!-- DOWNLOAD BUTTON -->
                                        <a href="<?php echo esc_url($file_url); ?>" download class="text-dark fs-5 p-2" title="Descarcă document">
                                            <i class="bi bi-download"></i>
                                        </a>
                                    </div>

                                <?php endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <p class="text-secondary small mb-0">Nu există documente disponibile în această categorie.</p>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        <?php endif; ?>
        
    </div>
</section>
<!-- CAMPANII SI PROIECTE SECTION -->
<section class="my-5">
    <div class="mb-4">
        <h3 class="fw-bold text-dark mb-1">Campanii și Proiecte</h3>
        <p class="text-secondary small mb-0">Inițiativele noastre pentru sprijinirea comunității și promovarea incluziunii sociale.</p>
    </div>
    <div class="row g-4">
        <!-- 1 CAMPAIGN CARD -->
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card h-100 border rounded-3 bg-white shadow-sm">
                <div class="row align-items-center">
                    <div class="col-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/campanie1.png" alt="Campania 1" class="img-fluid rounded-start-3" style="height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-8 text-center">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <h5 class="card-title fw-bold text-dark mb-2">Campania "Vocea Copiilor"</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                O inițiativă dedicată sprijinirii copiilor aflați în dificultate și promovării drepturilor lor.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află detaliile &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2 CAMPAIGN CARD -->
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card h-100 border rounded-3 bg-white shadow-sm">
                <div class="row align-items-center">
                    <div class="col-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/campanie2.png" alt="Campania 2" class="img-fluid rounded-start-3" style="height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-8 text-center">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <h5 class="card-title fw-bold text-dark mb-2">Proiectul "VENUS"</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Impreuna pentru o viata in siguranta!Suport si gazduire pentru victimele violenței domestice și a traficului de persoane.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află detaliile &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
</body>
</html>
