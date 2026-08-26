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
<!-- FLOATING DRAGGABLE EMERGENCY WIDGET -->
<aside id="floating-emergency-widget" class="floating-emergency-widget shadow-lg rounded-4 overflow-hidden position-fixed end-0 bottom-0 m-3 m-md-4 text-white" 
     style="z-index: 1050; width: 220px; background-color: #dc2626;" aria-label="Urgențe 24/7">
    
    <div class="p-3 text-center">
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
        <a href="tel:119" class="btn btn-light w-100 fw-bold py-2 rounded-3 text-danger shadow-sm d-flex align-items-center justify-content-center gap-1">
            <span>Sună Acum (119)</span>
        </a>
    </div>
</aside>
<?php wp_footer(); ?>
</body>
</html>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const widget = document.getElementById('draggableEmergencyWidget');
    const handle = widget.querySelector('.emergency-drag-handle');

    if (!widget || !handle) return;

    let isDragging = false;
    let startX = 0, startY = 0;
    let initialLeft = 0, initialTop = 0;

    handle.addEventListener('pointerdown', (e) => {
        isDragging = true;
        
        // Eredeti pozíció kiszámítása (eltávolítjuk a Bootstrap end-0, bottom-0 fix kötéseit)
        const rect = widget.getBoundingClientRect();
        initialLeft = rect.left;
        initialTop = rect.top;

        startX = e.clientX;
        startY = e.clientY;

        widget.style.right = 'auto';
        widget.style.bottom = 'auto';
        widget.style.left = `${initialLeft}px`;
        widget.style.top = `${initialTop}px`;
        widget.style.margin = '0';

        handle.setPointerCapture(e.pointerId);
    });

    handle.addEventListener('pointermove', (e) => {
        if (!isDragging) return;

        const dx = e.clientX - startX;
        const dy = e.clientY - startY;

        let newX = initialLeft + dx;
        let newY = initialTop + dy;

        // Képernyőn belül tartás (Boundaries)
        const maxX = window.innerWidth - widget.offsetWidth - 10;
        const maxY = window.innerHeight - widget.offsetHeight - 10;

        newX = Math.max(10, Math.min(newX, maxX));
        newY = Math.max(10, Math.min(newY, maxY));

        widget.style.left = `${newX}px`;
        widget.style.top = `${newY}px`;
    });

    const stopDragging = (e) => {
        if (!isDragging) return;
        isDragging = false;
        try {
            handle.releasePointerCapture(e.pointerId);
        } catch (err) {}
    };

    handle.addEventListener('pointerup', stopDragging);
    handle.addEventListener('pointercancel', stopDragging);
});
</script>