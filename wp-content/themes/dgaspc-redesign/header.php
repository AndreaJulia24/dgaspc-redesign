<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- JavaScript for saving and restoring user preferences -->
    <script>
        (function() {
            if (localStorage.getItem('dgaspc_contrast') === 'enabled') {
                document.documentElement.classList.add('high-contrast');
            }
            var savedFontSize = localStorage.getItem('dgaspc_font_size');
            if (savedFontSize) {
                document.documentElement.style.fontSize = savedFontSize + '%';
            }
        })();
    </script>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (az ikonokhoz: kontraszt, betumeret) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Sajat stílusfajl -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- FONT SIZE INDICATOR -->
<div id="fontSizeIndicator" class="font-size-toast d-none" aria-live="polite">
    <div class="alert alert-primary m-0 p-2 rounded-0 text-center" role="alert">
        <span id="fontSizeValue">100%</span>
    </div>
</div>

<?php 
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');

?>

<!-- 1.TOP BAR -->
<div class="top-bar bg-light border-bottom py-1 text-muted small">
    <div class="container d-flex justify-content-end align-items-center gap-3">
        
        <!-- Betumeret noveles / csokkentes /visszaallitas-->
        <div class="accessibility-font">
            <span role="button" id="fontIncrease" class="me-1 fw-bold">A+</span> 
            <span class="text-secondary">|</span>
            <span role="button" id="fontDecrease" class="ms-1 fw-bold">A-</span>
            <span role="button" id="fontReset" class="ms-1 text-muted small" style="cursor: pointer;" title="Reset">
            <i class="bi bi-arrow-counterclockwise"></i>
            </span>
        </div>

        <!-- Elvalaszto vonal -->
        <span class="text-secondary">|</span>

        <!-- DARK mod -->
        <div class="accessibility-contrast"  id="toggleContrast" role="button" style="cursor: pointer;">
            <i class="bi bi-circle-half me-1"></i>
            <span><?php echo $is_hu ? 'Sötét Mód' : 'Mod Întunecat'; ?></span>
        </div>

        <!-- Elvalaszto vonal -->
        <span class="text-secondary"> | </span>

        <!-- Nyelv valaszto dinamikusan Polylangbol -->
        <div class="language-switcher fw-bold user-select-none">
            <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
                <?php 
                    $languages = pll_the_languages( array(
                        'raw'          => 1,
                        'hide_current' => 0,
                    ) );

                    $output = array();
                    if ( ! empty( $languages ) ) {
                        foreach ( $languages as $lang ) {
                            $is_current      = $lang['current_lang'];
                            $has_translation = ! $lang['no_translation'];

                            if ( $is_current ) {
                                $class = 'text-dark fw-bold active-lang';
                                $url   = esc_url( $lang['url'] );
                                $title = esc_attr( $lang['name'] );
                            } elseif ( $has_translation ) {
                                $class = 'text-muted text-decoration-none';
                                $url   = esc_url( $lang['url'] );
                                $title = esc_attr( $lang['name'] );
                            } else {
                                $class = 'text-muted opacity-50 pe-none';
                                $url   = 'javascript:void(0);';
                                $title = esc_attr( $lang['name'] );
                            }

                            $output[] = '<a href="' . $url . '" class="' . esc_attr( $class ) . '" title="' . $title . '">' . esc_html( strtoupper( $lang['slug'] ) ) . '</a>';
                        }
                        echo implode( ' <span class="text-secondary">/</span> ', $output );
                    }
                ?>
            <?php else : ?>
                <a href="#" class="text-decoration-none text-dark active me-1">RO</a>
                <span class="text-secondary">/</span>
                <a href="#" class="text-decoration-none text-muted ms-1">HU</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- 2.  NAVIGATION BAR -->

<nav class="navbar navbar-expand-xl bg-white shadow-sm py-2">
    <div class="container d-flex align-items-center justify-content-between">
        
        <!-- with gap-3 all distances is equal -->
<a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none text-dark m-0 p-0" href="<?php echo esc_url(home_url('/')); ?>">
    <!-- 1.  LEFT SIDE -DGASPC LOGO BEAR -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dgaspc_mures_bear.png" alt="DGASPC Mures Logo" style="height: 60px; width: auto;">
    
    <!-- 2. DGASPC MURES TITLE -->
    <div class="brand-text d-flex flex-column lh-sm">
        <span class="fw-bold fs-5 text-primary">DGASPC Mureș</span>
        <span class="fw-medium text-dark" style="font-size: 0.62rem; max-width: 350px; line-height: 1.15; letter-spacing: -0.2px;">
            <?php echo $is_hu 
                ? 'MAROS MEGYEI SZOCIÁLIS ÉS GYERMEKVÉDELMI IGAZGATÓSÁG' 
                : 'DIRECȚIA GENERALĂ DE ASISTENȚĂ SOCIALĂ ȘI PROTECȚIA COPILULUI MUREȘ'; ?>
        </span>
    </div>

    <!-- 3. RIGHT SIDE - MURES COUNTY LOGO -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mures_county.png" alt="Stema Județului Mureș" class="d-none d-md-block" style="height: 54px; width: auto;">
</a>

        <!-- MENUPOINTS AND SEARCH ICONS BUTTON -->

        <!-- Hamburger button (for the mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENUPOINTS + SEARCH DESKTOP -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <div class="d-flex align-items-center gap-3 ms-auto">
            <!-- MENUPOINTS -->
               <!-- DINAMICALLY NAVBAR -->
               <ul class="navbar-nav mb-0 gap-3 align-items-center flex-nowrap">
                    <!-- HOME -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold text-nowrap" href="<?php echo esc_url( home_url( $is_hu ? '/hu/' : '/' ) ); ?>">
                            <?php echo $is_hu ? 'Kezdőlap' : 'Acasă'; ?>
                        </a>
                    </li>

                    <!-- ORGANIGRAMA -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold text-nowrap" href="<?php echo esc_url( home_url( $is_hu ? '/hu/szervezeti-felepites/' : '/organigrama/' ) ); ?>">
                            <?php echo $is_hu ? 'Szervezeti Felépítés' : 'Organigramă'; ?>
                        </a>
                    </li>

                    <!-- PROTECȚIA COPILULUI -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold text-nowrap" href="<?php echo esc_url( home_url( $is_hu ? '/hu/gyermekvedelem/' : '/protectia-copilului/' ) ); ?>">
                            <?php echo $is_hu ? 'Gyermekvédelem' : 'Protecția Copilului'; ?>
                        </a>
                    </li>

                    <!-- ADULȚI ȘI DIZABILITĂȚI -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold text-nowrap" href="<?php echo esc_url( home_url( $is_hu ? '/hu/felnottek-es-fogyatekkal-elok/' : '/adulti-dizabilitati/' ) ); ?>">
                            <?php echo $is_hu ? 'Felnőttek & Fogyatékkal Élők' : 'Adulți & Dizabilități'; ?>
                        </a>
                    </li>

                    <!-- TRANSPARENȚĂ -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold text-nowrap" href="<?php echo esc_url( home_url( $is_hu ? '/hu/atlathatosag/' : '/transparenta/' ) ); ?>">
                            <?php echo $is_hu ? 'Átláthatóság' : 'Transparență'; ?>
                        </a>
                    </li>

                    <!-- PROIECTE -->
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold text-nowrap" href="<?php echo esc_url( home_url( $is_hu ? '/hu/projektek/' : '/proiecte/' ) ); ?>">
                            <?php echo $is_hu ? 'Projektek' : 'Proiecte'; ?>
                        </a>
                    </li>
                </ul>

        <!-- SEARCH TRIGGER BUTTON --> 
         <div class="d-flex align-items-center">
            <button class="btn btn-light rounded-circle text-muted p-2 shadow-sm"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#headerSearchCollapse"
            aria-expanded="false"
            aria-controls="headerSearchCollapse"
            aria-label="Caută în site">
                <i class="bi bi-search"></i>
            </button>
        </div>

        </div>
    </div>
</nav>
 <!-- SEARCH COLLAPSE -->
                <div class="collapse bg-white border-bottom shadow-sm" id="headerSearchCollapse">
                <div class="container py-3">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6">
                            <?php get_search_form(); ?> <!-- this will call the searchform.php template -->
                        </div>
                    </div>
                </div>
            </div>