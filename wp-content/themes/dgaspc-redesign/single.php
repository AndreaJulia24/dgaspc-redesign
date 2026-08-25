<?php get_header(); ?>

<main class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                
                <?php while ( have_posts() ) : the_post(); 
                    $categories = get_the_category();
                ?>
                    <article class="card border rounded-4 bg-white shadow-sm p-4 p-md-5">
                        
                        <!-- BACK TO THE FRONT PAGE -->
                        <div class="mb-4">
                            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="text-decoration-none text-secondary small fw-semibold">
                                &larr; Înapoi la toate anunțurile
                            </a>
                        </div>

                        <!-- DATE AND CATEGORIES -->
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

                        <!-- POST TITLE -->
                        <h1 class="fw-bold text-dark mb-4"><?php the_title(); ?></h1>

                        <!-- FEATURED IMAGE -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="mb-4">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded-3 w-100')); ?>
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