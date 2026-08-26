<?php get_header(); ?>

<!-- DYNAMICALLY GENERATED SINGLE POST PAGE FOR EACH DOCUMENT -->
<main class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                
                <?php while ( have_posts() ) : the_post(); 
                    $categories = get_the_category();
                ?>
                    <article class="card border rounded-4 bg-white shadow-sm p-4 p-md-5">
                        
                        <!-- BACK TO THE FRONT PAGE -->
                        <!--IF NEWS GO BACK TO THE NEWS SECTION , ELSE GO TO THE FRONT PAGE -->
                        <a href="<?php echo is_singular('campanie') ? esc_url(home_url('/')) : esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="text-decoration-none text-secondary small fw-semibold d-inline-flex align-items-center gap-1">
                            &larr; <?php echo is_singular('campanie') ? 'Înapoi la pagina principală' : 'Înapoi la toate anunțurile'; ?>
                        </a>
                        <!-- BADGE AND DATE -->
                       <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-primary text-white fw-medium px-3 py-1">
                                Campanie / Proiect
                            </span>
                            <span class="text-muted small">
                                <i class="bi bi-calendar3 me-1"></i><?php echo get_the_date('d M Y'); ?>
                            </span>
                        </div>

                        <!-- POST TITLE -->
                        <h1 class="fw-bold text-dark mb-4"><?php the_title(); ?></h1>

                        <!-- FEATURED IMAGE -->
                       <?php if ( has_post_thumbnail() ) : ?>
                            <div class="text-center mb-4 p-3 bg-light rounded-3">
                                <?php the_post_thumbnail('large', array(
                                    'class' => 'img-fluid rounded-3 shadow-sm',
                                    'style' => 'max-height: 500px; object-fit: contain; width: 100%;'
                                )); ?>
                            </div>
                        <?php endif; ?> 

                        <!-- THE FULL POST CONTENT -->
                        <div class="entry-content text-secondary lh-lg fs-6">
                            <?php the_content(); ?>
                        </div>

                    </article>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

