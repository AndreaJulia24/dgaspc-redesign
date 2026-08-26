<?php get_header(); ?>

<!-- this template is for displaying search results -->
 
<main class="py-5 bg-light min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <div class="mb-4">
                    <h1 class="h3 fw-bold text-dark mb-1">
                        Rezultatele căutării pentru: <span class="text-primary">"<?php echo esc_html( get_search_query() ); ?>"</span>
                    </h1>
                    <p class="text-secondary small mb-0">
                        Am găsit <?php global $wp_query; echo $wp_query->found_posts; ?> rezultate relevante.
                    </p>
                </div>
                <!-- SEARCH RESULTS -->
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="card border rounded-4 bg-white shadow-sm mb-4">
                            <h2 class="card-header h5 fw-bold text-primary"><?php the_title(); ?></h2>
                            <div class="card-body">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-3">Citește mai mult</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="text-secondary">Ne pare rău, nu am găsit rezultate pentru
    "<?php echo esc_html( get_search_query() ); ?>". Vă rugăm să încercați alte cuvinte cheie.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>