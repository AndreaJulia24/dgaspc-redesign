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
<script>
function generatePDF(contentId, title) {
    window.scrollTo(0, 0); // Scroll to the top of the page before generating the PDF
    setTimeout(() => {
        const element = document.getElementById(contentId);

        if (!element) {
            console.error('Element not found:', contentId);
            return;
        }
        
        const opt = {
            margin: 0.5,
            filename: title + '.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { 
                scale: 2,
                scrollY: -window.scrollY,
                scrollX: 0,
                windowWidth: document.documentElement.scrollWidth,
                windowHeight: document.documentElement.scrollHeight
            },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        html2pdf().set(opt).from(element).save();
    }, 100);
}
</script>
<?php wp_footer(); ?>
</body>
</html>