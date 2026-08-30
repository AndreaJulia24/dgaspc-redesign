<?php 
/*
 * Template Name: Anunturi Template
 */
get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        
        <!-- BACK BUTTON -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> 
                <?php echo $is_hu ? 'Vissza a kezdőlapra' : 'Înapoi la pagina principală'; ?>
            </a>
        </div>

        <!-- NEWS HEADER -->
        <div class="mb-5 text-center">
            <h1 class="fw-bold text-dark mb-2">
                <?php echo $is_hu ? 'Hírek és Közlemények' : 'Toate Anunțurile și Noutățile'; ?>
            </h1>
            <p class="text-secondary small mb-0">
                <?php echo $is_hu ? 'A DGASPC Maros hivatalos közleményei és tájékoztatói.' : 'Toate comunicatele, proiectele și informațiile de interes public.'; ?>
            </p>
        </div>

        <!-- NEWS LIST -->
        <?php 
        $news_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 12,
            'lang'           => $current_lang,
            'paged'          => $paged,
        ));

        if ( $news_query->have_posts() ) : ?>
            <div class="row g-4 justify-content-start">
                <?php while ( $news_query->have_posts() ) : $news_query->the_post(); 
                    $categories = get_the_category();
                ?>
                    <div class="col-12 col-md-6 d-flex align-items-stretch">
                        <div class="card w-100 border rounded-4 bg-white shadow-sm overflow-hidden">
                            <div class="card-body d-flex flex-column p-4">
                                
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

                                <h5 class="card-title fw-bold text-dark fs-6 mb-3">
                                    <?php the_title(); ?>
                                </h5>
                                
                                <div class="card-text text-secondary small mb-3 flex-grow-1 clearfix">
                                    <?php echo force_balance_tags( apply_filters('the_content', get_the_content()) ); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- PAGINATION -->
            <div class="col-12 mt-5 d-flex justify-content-center">
                <?php 
                echo paginate_links(array(
                    'total'     => $news_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&larr; Înapoi',
                    'next_text' => 'Înainte &rarr;',
                )); 
                ?>
            </div>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-secondary"><?php echo $is_hu ? 'Nincsenek elérhető hírek.' : 'Nu există anunțuri publicate.'; ?></p>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>