<?php 
get_header(); ?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

            <!-- BACK TO THE STARTING PAGE -->
            <div class="mb-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Înapoi la pagina principală
                </a>
            </div>

            <!-- PAGE CONTENT : TITLE + CONTENT -->
            <?php
             if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="card border rounded-4 bg-white shadow-sm mb-4">
                        <h1 class="card-header h3 fw-bold text-center text-primary"><?php the_title(); ?></h1>
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Ne pare rău, nu am găsit conținut pentru această pagină.' ); ?></p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

