<?php get_header(); ?>

<main class="py-5 bg-light">
    <div class="container">
        
        <!-- NEWS HEADER -->
        <div class="mb-5 text-center">
            <h1 class="fw-bold text-dark mb-2">Toate Anunțurile și Noutățile</h1>
            <p class="text-secondary small mb-0">Toate comunicatele, proiectele și informațiile de interes public.</p>
        </div>

        <!-- NEWS LIST -->
        <div class="row g-4">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); 
                    $categories = get_the_category();
                ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 border rounded-3 bg-white shadow-sm">
                            <div class="card-body d-flex flex-column text-start p-4">
                                
                                <!-- Date and category -->
                                <div class="d-flex gap-2 mb-3">
                                    <span class="badge bg-light text-secondary border fw-medium px-2 py-1">
                                        <?php echo get_the_date('d M Y'); ?>
                                    </span>
                                    <?php if ( !empty($categories) ) : ?>
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
                                    Citește mai mult &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!--PAGINATION -->
                <div class="col-12 mt-5 d-flex justify-content-center">
                    <?php 
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '&larr; Înapoi',
                        'next_text' => 'Înainte &rarr;',
                    )); 
                    ?>
                </div>
            <?php else : ?>
                <div class="col-12 text-center">
                    <p class="text-secondary">Nu există anunțuri publicate.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>