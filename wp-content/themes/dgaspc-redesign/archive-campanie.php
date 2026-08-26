<?php get_header(); ?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!--BACK TO THE FRONT PAGE -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-decoration-none text-secondary small fw-semibold d-inline-flex align-items-center gap-1">
                &larr; Înapoi la pagina principală
            </a>
        </div>

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2">Toate Campaniile și Proiectele</h1>
            <p class="text-secondary mx-auto" style="max-width: 650px;">
                Descoperiți toate campaniile de conștientizare, programele sociale și proiectele dedicate comunității din județul Mureș.
            </p>
        </div>

        <!-- CAMPAIGNS LIST -->
        <div class="row g-4">
            <?php
            $campanii_archive_query = new WP_Query(array(
                'post_type'      => 'campanie',
                'posts_per_page' => -1, // ALL CAMPAIGNS
                'order'          => 'DESC',
            ));

            if ($campanii_archive_query->have_posts()) :
                while ($campanii_archive_query->have_posts()) : $campanii_archive_query->the_post(); 
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$thumbnail_url) {
                        $thumbnail_url = get_template_directory_uri() . '/assets/images/campanie1.png';
                    }
            ?>
                    <div class="col-12 col-lg-6">
                        <div class="card h-100 border rounded-3 bg-white shadow-sm overflow-hidden p-3">
                            <div class="row g-0 h-100 align-items-center">
                                
                                <!-- IMAGE (LEFT) -->
                                <div class="col-4 text-center">
                                    <img src="<?php echo esc_url($thumbnail_url); ?>" 
                                         alt="<?php echo esc_attr(get_the_title()); ?>" 
                                         class="img-fluid rounded-2 shadow-sm" 
                                         style="max-height: 220px; width: 100%; object-fit: contain;">
                                </div>
                                
                                <!-- TEXT (RIGHT) -->
                                <div class="col-8">
                                    <div class="card-body d-flex flex-column justify-content-center text-start py-2 px-3">
                                        <h5 class="card-title fw-bold text-dark mb-2 fs-5"><?php the_title(); ?></h5>
                                        <p class="card-text text-secondary small mb-4 lh-sm">
                                            <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                            Află detaliile &rarr;
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="col-12 text-center py-5">
                    <p class="text-secondary">Nu există campanii disponibile în acest moment.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>