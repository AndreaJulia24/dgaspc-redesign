<?php get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!--BACK TO THE FRONT PAGE -->
        <div class="mb-4">
            <a href="<?php echo esc_url( function_exists('pll_home_url') ? pll_home_url() : home_url('/') ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 
                <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-2"><?php echo $is_hu ? 'Minden Kampány és Projekt' : 'Toate Campaniile și Proiectele'; ?></h1>
            <p class="text-secondary mx-auto" style="max-width: 650px;">
                <?php echo $is_hu ? 'Fedezze fel az összes tudatosságot elősegítő kampányt, társadalmi programot és a Mureș megye közösségének ajánlott projekteket.' : 'Descoperiți toate campaniile de conștientizare, programele sociale și proiectele dedicate comunității din județul Mureș.'; ?>
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
            ?>
                    <div class="col-12 col-lg-6">
                        <div class="card h-100 border rounded-3 bg-white shadow-sm overflow-hidden p-3">
                            <div class="row g-0 h-100 align-items-center">
                                
                                <!-- IMAGE (LEFT) -->
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
                                
                                <!-- TEXT (RIGHT) -->
                                <div class="col-8">
                                    <div class="card-body d-flex flex-column justify-content-center text-start py-2 px-3">
                                        <h5 class="card-title fw-bold text-dark mb-2 fs-5"><?php the_title(); ?></h5>
                                        <p class="card-text text-secondary small mb-4 lh-sm">
                                            <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                            <?php echo $is_hu ? 'Részletek &rarr;' : 'Află detaliile &rarr;'; ?><? the_title(); ?>
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