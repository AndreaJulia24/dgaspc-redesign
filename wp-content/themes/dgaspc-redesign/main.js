/* 
DGASPC MURES -- MAIN SCRIPTS 
*/

// ------------------PDF GENERATION LOGIC-------------------
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


// ------------------EMERGENCY WIDGET DRAGGABLE LOGIC-------------------

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

        widget.classList.remove('end-0', 'bottom-0');
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

// ------------------CONTRAST TOGGLE LOGIC-------------------

document.addEventListener('DOMContentLoaded', () => {
    const contrastBtn = document.getElementById('toggleContrast');
    const body = document.body;

    // 1. BACK TO THE PREVIOUS STATE
    if (localStorage.getItem('dgaspc_contrast') === 'enabled') {
        body.classList.add('high-contrast');
    }

    if (!contrastBtn) return;

    // 2. TOGGLE CONTRAST MODE
    contrastBtn.addEventListener('click', () => {
        body.classList.toggle('high-contrast');

        // 3. STORE THE CURRENT STATE IN LOCAL STORAGE
        if (body.classList.contains('high-contrast')) {
            localStorage.setItem('dgaspc_contrast', 'enabled');
        } else {
            localStorage.setItem('dgaspc_contrast', 'disabled');
        }
    });
});

// ------------------FONT SIZE TOGGLE LOGIC-------------------

document.addEventListener('DOMContentLoaded', () => {
    const fontIncreaseBtn = document.getElementById('fontIncrease');
    const fontDecreaseBtn = document.getElementById('fontDecrease');
    const fontResetBtn = document.getElementById('fontReset');
    const rootElement = document.documentElement;

    const MIN_FONT_SIZE = 25; // Minimum font size in pixels
    const MAX_FONT_SIZE = 200; // Maximum font size in pixels
    const step=10;

    // 1. BACK TO THE PREVIOUS STATE
    let currentFontSize= parseInt(localStorage.getItem('dgaspc_font_size')) || 100;
    
    function applyFontSize(size) {
        rootElement.style.fontSize = size + '%';
        localStorage.setItem('dgaspc_font_size', size);
    }

    applyFontSize(currentFontSize);

    // 2. INCREASE FONT SIZE
    fontIncreaseBtn.addEventListener('click', () => {
        if (currentFontSize < MAX_FONT_SIZE) {
            currentFontSize += step;
            applyFontSize(currentFontSize);
        }
    });

    // 3. DECREASE FONT SIZE
    fontDecreaseBtn.addEventListener('click', () => {
        if (currentFontSize > MIN_FONT_SIZE) {
            currentFontSize -= step;
            applyFontSize(currentFontSize);
        }
    });

    // 4. RESET FONT SIZE
    fontResetBtn.addEventListener('click', () => {
        currentFontSize = 100;
        applyFontSize(currentFontSize);
    });
}
);