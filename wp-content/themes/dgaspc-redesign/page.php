<?php 
get_header(); ?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

            <!-- Back to Home Button -->
            <div class="mb-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> 
                    <?php 
                        if ( function_exists('pll_current_language') && pll_current_language() === 'hu' ) {
                            echo 'Vissza a kezdőlapra';
                        } else {
                            echo 'Înapoi la pagina principală';
                        }
                    ?>
                </a>
            </div>

            <!-- TARTALMI RÉSZ -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="card border rounded-4 bg-white shadow-sm mb-4 overflow-hidden">
                        <h1 class="card-header h3 fw-bold text-center text-primary py-3 mb-0"><?php the_title(); ?></h1>
                        <div class="card-body p-4">
                            <?php 
                                //Check if the content is empty and display a message if it is
                                $content = get_the_content();
                                
                                if ( ! empty( trim( $content ) ) ) : 
                                    // If the content is not empty, display it
                                    the_content(); 
                                else : 
                                    //If the page is empty, display a message to the user
                            ?>
                                <div class="alert alert-light border rounded-3 p-4 text-center my-3">
                                    <i class="bi bi-info-circle text-primary fs-2 d-block mb-2"></i>
                                    <?php if ( function_exists('pll_current_language') && pll_current_language() === 'hu' ) : ?>
                                        <h5 class="fw-bold mb-1">A tartalom feltöltés alatt áll</h5>
                                        <p class="text-muted mb-0">Ez az oldal magyar nyelven még nem érhető el. Kérjük, váltson a román változatra a fenti menüben.</p>
                                    <?php else : ?>
                                        <h5 class="fw-bold mb-1">Conținut în curs de actualizare</h5>
                                        <p class="text-muted mb-0">Ne pare rău, conținutul pentru această pagină nu este disponibil încă.</p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="alert alert-warning text-center">
                    <?php esc_html_e( 'Ne pare rău, nu am găsit pagina căutată.' ); ?>
                </div>
            <?php endif; ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>