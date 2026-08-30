<!-- FOOTER -->
<footer class="bg-light border-top mt-5 pt-5 pb-4 text-secondary">
    <div class="container">
        <div class="row g-4 mb-4">
            
            <!-- 1. COLUMN: DGASPC Mureș -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-dark mb-3">DGASPC Mureș</h6>
                <p class="small text-muted mb-0">
                    Direcția Generală de Asistență Socială și Protecția Copilului Mureș.
                </p>
            </div>
            <!-- 2. COLUMN: INFORMATII -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-dark mb-3">Informații</h6>
                <ul class="list-unstyled small text-muted mb-0">
                    <li><a href="#" class="text-decoration-none text-muted">Programul de lucru</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Contact</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Locuri de muncă</a></li>
                </ul>
            </div>
            <!-- 3. COLUMN: LEGAL -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-dark mb-3">Legal</h6>
                <ul class="list-unstyled small text-muted mb-0">
                    <li><a href="#" class="text-decoration-none text-muted">GDPR</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Transparență decizională</a></li>
                    <li><a href="#" class="text-decoration-none text-muted">Hartă site</a></li>
                </ul>
            </div>
            <!-- 4. COLUMN: CONTACT RAPID -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-dark mb-3">Contact Rapid</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt text-dark"></i>
                        <span>Târgu Mureș, Jud. Mureș</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope text-dark"></i>
                        <a href="mailto:dgaspc_mures@yahoo.com" class="text-secondary text-decoration-none">dgaspc_mures@yahoo.com</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</footer>

<!-- BOOTSTRAP 5 JAVASCRIPT for the category tabs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- HTML to PDF generator -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<!-- FLOATING DRAGGABLE EMERGENCY WIDGET -->
<aside id="draggableEmergencyWidget" 
       class="floating-emergency-widget shadow-lg rounded-4 overflow-hidden position-fixed m-3 m-md-4 text-white" 
       style="z-index: 1050; width: 220px; background-color: #dc2626; right: 20px; bottom: 20px;" 
       aria-label="Urgențe 24/7">
    
    <div class="emergency-drag-handle text-center">
        <div class="fs-4 lh-1 mb-1">
            <i class="bi bi-asterisk"></i>
        </div>
        <h6 class="fw-bold mb-1 text-uppercase letter-spacing-1">Urgențe 24/7</h6>
        <p class="small text-white-50 mb-0" style="font-size: 0.75rem;">Apelați cu încredere</p>
    </div>

    <!-- TELEFONUL COPILULUI-->
    <div class="py-2 px-3 text-center border-top border-bottom border-white-50 bg-black bg-opacity-10">
        <div class="d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-telephone-fill small"></i>
            <span class="fw-semibold small">Telefonul Copilului</span>
        </div>
    </div>

    <!-- BUTTON EMERGENCY NUMBER 119 -->
    <div class="p-2 text-center bg-black bg-opacity-20">
        <a href="https://dgaspcmures.ro/corai/en" target="_blank" rel="noopener noreferrer" class="btn btn-light text-danger fw-bold w-100 py-2 rounded-pill shadow-sm">
            Sună Acum (119)
        </a>
    </div>
</aside>
<?php wp_footer(); ?>
</body>
</html>