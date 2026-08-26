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

<!-- 1.TOP BAR -->
<div class="top-bar bg-light border-bottom py-1 text-muted small">
    <div class="container d-flex justify-content-end align-items-center gap-3">
        
        <!-- Betumeret noveles / csokkentes -->
        <div class="accessibility-font">
            <span role="button" class="me-1 fw-bold">A+</span> / 
            <span role="button" class="ms-1 fw-bold">A-</span>
        </div>

        <!-- Elvalaszto vonal -->
        <span class="text-secondary">|</span>

        <!-- Magas kontraszt mod -->
        <div class="accessibility-contrast" role="button">
            <i class="bi bi-circle-half me-1"></i>
            <span>Contrast Ridicat</span>
        </div>

        <!-- Elvalaszto vonal -->
        <span class="text-secondary">|</span>

        <!-- Nyelv valaszto -->
        <div class="language-switcher fw-bold">
            <a href="#" class="text-decoration-none text-dark active me-1">RO</a>
            <span class="text-secondary">/</span>
            <a href="#" class="text-decoration-none text-muted ms-1">HU</a>
        </div>

    </div>
</div>

<!-- 2.) NAVIGATION BAR -->

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
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(home_url('/organigrama')); ?>">Organigramă</a>
                </li>
                <!-- PROTECȚIA COPILULUI -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(home_url('/protecatia-copilului')); ?>">Protecția Copilului</a>
                </li>
                <!-- ADULȚI ȘI DIZABILITĂȚI -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(home_url('/adulti-dizabilitati')); ?>">Adulți & Dizabilități</a>
                </li>
                <!-- TRANSPARENȚĂ -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(home_url('/transparenca')); ?>">Transparență</a>
                </li>
                <!-- PROIECTE -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?php echo esc_url(home_url('/proiecte')); ?>">Proiecte</a>
                </li>
            </ul>

        <!-- SEARCH ICON BUTTON --> 
         <div class="d-flex align-items-center gap-5">
                <button class="btn btn-light rounded-circle text-muted p-2" type="button" aria-label="Search">
                    <i class="bi bi-search fs-6"></i>
                </button>
            </div>
        </div>

    </div>
</nav>

