<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    
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

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
    

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

        <!-- Magas kontraszt mod -->
        <div class="accessibility-contrast"  id="toggleContrast" role="button" style="cursor: pointer;">
            <i class="bi bi-circle-half me-1"></i>
            <span>Contrast Ridicat</span>
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
                                $title = 'Traducerea nu este disponibilă încă (În curând)';
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

<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container d-flex justify-content-between align-items-center">
        
        <!-- Brand Logo & Name Section -->
        <a class="navbar-brand d-flex align-items-center text-decoration-none text-dark" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="DGASPC Mures Logo" class="me-2" style="height: 45px; width: auto;">
            <div class="brand-text d-flex flex-column lh-1">
                <span class="fw-bold fs-5 text-primary">DGASPC</span>
                <span class="fw-bold fs-6 text-dark">Mureș</span>
            </div>
        </a>

        <!-- MENUPOINTS AND SEARCH ICONS BUTTON -->

        <!-- Hamburger button (for the mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENUPOINTS + SEARCH DESKTOP -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <div class="d-flex align-items-center gap-4">
            <!-- MENUPOINTS -->
            <ul class="navbar-nav mb-0 gap-4 align-items-center">
               <!-- DINAMICALLY NAVBAR -->
                <!-- HOME -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(home_url('/')); ?>">Acasă</a>
                </li>
                <!-- ORGANIGRAMA -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(get_permalink(get_page_by_path('organigrama'))); ?>">Organigramă</a>
                </li>
                <!-- PROTECȚIA COPILULUI -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( $is_hu ? '/gyermekvedelem/' : '/protectia-copilului/' ) ); ?>">
                        <?php echo $is_hu ? 'Gyermekvédelem' : 'Protecția Copilului'; ?>
                    </a>
                <!-- ADULȚI ȘI DIZABILITĂȚI -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(get_permalink(get_page_by_path('adulti-dizabilitati'))); ?>">Adulți & Dizabilități</a>
                </li>
                <!-- TRANSPARENȚĂ -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(get_permalink(get_page_by_path('transparenta'))); ?>">Transparență</a>
                </li>
                <!-- PROIECTE -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(get_permalink(get_page_by_path('proiecte'))); ?>">Proiecte</a>
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