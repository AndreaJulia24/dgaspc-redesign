<?php get_header(); ?>

<main class="py-5 bg-light">
    <div class="container">
        <section class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Servicii de Asistență Socială pentru Cetățeni</h2>
            <p class="text-secondary mx-auto" style="max-width: 700px;">DGASPC Mureș oferă suport, protecție și servicii specializate pentru copii, adulți, familii aflate în dificultate și persoane cu dizabilități.</p>
        </section>
        <!-- CARDS GRID FOR THE SERVICES -->
         <!-- COMMON ROW -->
        <div class="row row g-4">
            <!-- 1. CARD COLUMN: Protecția Copilului -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-emoji-smile fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">Protecția Copilului</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Informații despre adopție, plasament și servicii de sprijin pentru copii.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <!-- 2. CARD COLUMN: Adulți & Dizabilități -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px;  height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-person-wheelchair fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">Adulți & Dizabilități</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Informații despre servicii de sprijin pentru adulți și persoane cu dizabilități.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <!-- 3. CARD COLUMN: RAPORTEAZĂ ABUZUL -->
            <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                           <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3 fw-bold" style="width: 48px; height: 48px; background-color: #fee2e2; color: #dc2626;">
                            SOS
                        </div>
                            <h5 class="card-title fw-bold text-dark mb-2">Raportează un abuz</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Dacă suspectezi un caz de abuz sau neglijare a unui copil sau adult, raportează-l imediat.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
                            </a>
                        </div>
                    </div>
                </div>
        <!-- 4. CARD COLUMN: Asistență Maternală -->
        <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-3 bg-white shadow-sm">
                        <div class="card-body d-flex flex-column text-start p-4">
                            <div class="icon-box d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #a5f3fc; color: #0891b2;">
                                <i class="bi bi-heart-pulse fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-2">Asistență Maternală</h5>
                            <p class="card-text text-secondary small mb-4 flex-grow-1">
                                Obține informații despre serviciile de asistență maternă disponibile.
                            </p>
                            <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                                Află mai multe &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- INTERACTIVE MAP SECTION -->
         <section class="my-5">
           <div class="card border rounded-5 bg-white shadow-sm p-4 p-lg-5">
              <div class="row align-items-center">
                <!-- LEFT COLUMN: MAP -->
                <div class="col-12 col-lg-6 text-start">
                    <h3 class="fw-bold text-dark mb-3">Harta Serviciilor Sociale din Județul Mureș</h3>
                    <p class="text-secondary mb-4 lh-base">Descoperiți rețeaua noastră de centre rezidențiale, centre de zi și servicii de sprijin distribuite la nivelul județului pentru a asigura proximitatea față de beneficiari.</p>
                    <a href="#" class="btn text-white fw-medium px-4 py-2 rounded-pill shadow-sm" style="background-color: #0b2545;">
                    Explorează Harta Interactivă
                </a>
                </div>
                <!-- RIGHT COLUMN: MAP IMAGE -->
                <div class="col-12 col-lg-6 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interactiveMap.png" alt="Harta Serviciilor Sociale Mureș" class="img-fluid rounded-3 shadow-sm" style="max-height: 400px; width: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </section>

    <!-- ANUNTURI SI NOUTATI SECTION -->
    <section class="my-5">
       <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
            <h3 class="fw-bold text-dark mb-1">Anunțuri și Noutăți</h3>
            <p class="text-secondary small mb-0">Ultimele comunicate și informații de interes public.</p>
        </div>
        <a href="#" class="text-decoration-none text-primary fw-semibold small mt-2 mt-md-0">
            Vezi toate anunțurile &rarr;
        </a>
    </div>
    <!-- CARDS GRID FOR ANNOUNCEMENTS -->
    <div class="row g-4">
        <!-- First Announcement Card -->
     <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 border rounded-3 bg-white shadow-sm">
            <div class="card-body d-flex flex-column text-start p-4">
                <div class="d-flex gap-2 mb-3">
                    <span class="badge bg-light text-secondary border fw-medium px-2 py-1">24 Aug 2023</span>
                    <span class="badge bg-primary-subtle text-primary border-0 fw-medium px-2 py-1">Comunicat</span>
                </div>
                <h5 class="card-title fw-bold text-dark fs-6 mb-2">
                    Acordarea scutirii de la plata tarifului de rovinietă
                </h5>
                <p class="card-text text-secondary small mb-4 flex-grow-1">
                    Informații detaliate cu privire la modalitatea de acordare a scutirii pentru persoanele cu dizabilități.
                </p>
                <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                    Citește mai mult &rarr;
                </a>
            </div>
        </div>
    </div>
    <!-- Second Announcement Card -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 border rounded-3 bg-white shadow-sm">
            <div class="card-body d-flex flex-column text-start p-4">
                <div class="d-flex gap-2 mb-3">
                    <span class="badge bg-light text-secondary border fw-medium px-2 py-1">27 Dec 2022</span>
                    <span class="badge bg-success-subtle text-success border-0 fw-medium px-2 py-1">Proiecte</span>
                </div>
                <h5 class="card-title fw-bold text-dark fs-6 mb-2">
                    Semnarea convenției "Pași spre viitor"
                </h5>
                <p class="card-text text-secondary small mb-4 flex-grow-1">
                    Comunicat cu privire la semnarea convenției de finanțare nerambursabilă pentru noul proiect de sprijin comunitar.
                </p>
                <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                    Citește mai mult &rarr;
                </a>
            </div>
        </div>
    </div>
    <!-- Third Announcement Card -->
    <div class="col-12 col-md-6 col-lg-4"> 
        <div class="card h-100 border rounded-3 bg-white shadow-sm">
            <div class="card-body d-flex flex-column text-start p-4">
                <div class="d-flex gap-2 mb-3">
                    <span class="badge bg-light text-secondary border fw-medium px-2 py-1">26 Mai 2022</span>
                    <span class="badge bg-warning-subtle text-warning border-0 fw-medium px-2 py-1">Informatii</span>
                </div>
                <h5 class="card-title fw-bold text-dark fs-6 mb-2">
                    Plasamentul familial în județul Mureș
                </h5>
                <p class="card-text text-secondary small mb-4 flex-grow-1">
                    A fost publicat noul pliant informativ detaliind procedurile și cerințele pentru plasamentul familial în județul Mureș.
                </p>
                <a href="#" class="card-link text-decoration-none fw-semibold small text-primary m-0">
                    Citește mai mult &rarr;
                </a>
            </div>
        </div>
    </div>
</div> 
</section>
<!-- FORMULARE SI DOCUMENTE SECTION -->
<section class="my-5">
    <div class="text-center mb-4">
        <h3 class="fw-bold text-dark mb-1">Formulare și Documente</h3>
    </div>
    <!-- navigation bar for the documents -->
     <div class="card border rounded-3 bg-white shadow-sm p-4">
        <div class="card-header bg-white border-bottom pt-3 px-4">
            <ul class="nav nav-tabs card-header-tabs" id="documentsTab" role="tablist">
                
            </ul>
        </div>
    </div>
</main>
<?php wp_footer(); ?>
</body>
</html>
