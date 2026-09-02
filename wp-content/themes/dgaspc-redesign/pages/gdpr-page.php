<?php 
/* 
* Template Name: GDPR Page Template
*/

get_header(); 

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

$page_title = $is_hu ? 'Adatvédelem és GDPR' : 'Protecția Datelor și GDPR';
$back_text  = $is_hu ? 'Vissza a főoldalra' : 'Înapoi la pagina principală';
?>

<main class="py-5 bg-light min-vh-100">
    <div class="container">
        <!-- Back Button -->
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>" class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
                <i class="bi bi-arrow-left"></i>
                <?php echo esc_html($back_text); ?>
            </a>
        </div>

        <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 bg-white">
            <h1 class="fw-bold text-dark mb-4"><?php echo esc_html($page_title); ?></h1>
            
            <div class="content text-secondary lh-lg">
                <?php if ($is_hu) : ?>
                    <p>Személyes adatok kezelésére vonatkozó GDPR hozzájárulási nyilatkozat a 2016/679/EU rendelet alapján.</p>
                    <p>
                        <a href="https://www.dgaspcmures.ro/docs/2021/decalara%C8%9Bie_GDPR.pdf" class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener noreferrer">
                            GDPR nyilatkozat letöltése (PDF) &rarr;
                        </a>
                    </p>
                <?php else : ?>
                    <p>Declarație de consimțământ privind prelucrarea datelor cu caracter personal conform Regulamentului (UE) 2016/679 (GDPR).</p>
                    <p>
                        <a href="https://www.dgaspcmures.ro/docs/2021/decalara%C8%9Bie_GDPR.pdf" class="btn btn-outline-primary btn-sm" target="_blank" rel="noopener noreferrer">
                            Descarcă declarația GDPR (PDF) &rarr;
                        </a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>