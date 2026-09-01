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
    if (!widget) return;
    
    const handle = widget.querySelector('.emergency-drag-handle');
    if (!handle) return;

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

        // On the screen boundaries 
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
    if (!contrastBtn) return;

    const contrastSpan = contrastBtn.querySelector('span');

    function updateContrastText(isDark) {
        if (!contrastSpan) return;

        if (isDark) {
            //if active dark mode (enabled) -> the button text will be "Light Mode"
            contrastSpan.textContent = contrastSpan.textContent.includes('Sötét') || contrastSpan.textContent.includes('Világos') 
                ? 'Világos Mód' 
                : 'Mod Luminos';
        } else {
            //if inactive dark mode (disabled) -> the button text will be "Dark Mode"
            contrastSpan.textContent = contrastSpan.textContent.includes('Világos') || contrastSpan.textContent.includes('Sötét') 
                ? 'Sötét Mód' 
                : 'Mod Întunecat';
        }
    }

    // 1. BACK TO THE PREVIOUS STATE
    const initialIsDark = document.documentElement.classList.contains('high-contrast');
    updateContrastText(initialIsDark);

    // 2. TOGGLE CONTRAST
    contrastBtn.addEventListener('click', (e) => {
        e.preventDefault();

        const isDark = document.documentElement.classList.toggle('high-contrast');
        document.body.classList.toggle('high-contrast', isDark);

        // Save the state in localStorage
        localStorage.setItem('dgaspc_contrast', isDark ? 'enabled' : 'disabled');

        // Update the button text based on the new state
        updateContrastText(isDark);
    });
});

// ------------------FONT SIZE TOGGLE LOGIC-------------------

document.addEventListener('DOMContentLoaded', () => {
    const fontIncreaseBtn = document.getElementById('fontIncrease');
    const fontDecreaseBtn = document.getElementById('fontDecrease');
    const fontResetBtn = document.getElementById('fontReset');
    const fontIndicator = document.getElementById('fontSizeIndicator');
    const fontValueSpan = document.getElementById('fontSizeValue');
    const rootElement = document.documentElement;

    const MIN_FONT_SIZE = 70; // Minimum betűméret %
    const MAX_FONT_SIZE = 150; // Maximum betűméret %
    const step = 10;
    let toastTimeout;

    // 1. BACK TO THE PREVIOUS STATE
    let currentFontSize = parseInt(localStorage.getItem('dgaspc_font_size')) || 100;
    
    function showToast(size) {
        if (fontIndicator && fontValueSpan) {
            fontValueSpan.textContent = size + '%';
            fontIndicator.classList.remove('d-none');
            fontIndicator.classList.add('show');

            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                fontIndicator.classList.remove('show');
                setTimeout(() => fontIndicator.classList.add('d-none'), 300);
            }, 1200);
        }
    }

    function applyFontSize(size, showFeedback = false) {
        rootElement.style.fontSize = size + '%';
        localStorage.setItem('dgaspc_font_size', size);
        if (showFeedback) {
            showToast(size);
        }
    }

    applyFontSize(currentFontSize, false);

    // 2. INCREASE FONT SIZE
    if (fontIncreaseBtn) {
        fontIncreaseBtn.addEventListener('click', () => {
            if (currentFontSize < MAX_FONT_SIZE) {
                currentFontSize += step;
                applyFontSize(currentFontSize, true);
            }
        });
    }

    // 3. DECREASE FONT SIZE
    if (fontDecreaseBtn) {
        fontDecreaseBtn.addEventListener('click', () => {
            if (currentFontSize > MIN_FONT_SIZE) {
                currentFontSize -= step;
                applyFontSize(currentFontSize, true);
            }
        });
    }

    // 4. RESET FONT SIZE
    if (fontResetBtn) {
        fontResetBtn.addEventListener('click', () => {
            currentFontSize = 100;
            applyFontSize(currentFontSize, true);
        });
    }
});

// ------------------DECLARATII DE AVERE FILTER & SEARCH-------------------
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchDeclaratii');
    const filterBtns = document.querySelectorAll('.filter-year');
    const items = document.querySelectorAll('.dec-item');
    const noResults = document.getElementById('noResults');

    if (!items.length) return;

    let currentYear = 'all';
    let currentSearch = '';

    function applyFilters() {
        let visibleCount = 0;

        items.forEach(item => {
            const name = item.getAttribute('data-name') || '';
            const year = item.getAttribute('data-year') || '';

            const matchesSearch = name.includes(currentSearch);
            const matchesYear = (currentYear === 'all' || year === currentYear);

            if (matchesSearch && matchesYear) {
                item.classList.remove('d-none');
                visibleCount++;
            } else {
                item.classList.add('d-none');
            }
        });

        if (noResults) {
            noResults.classList.toggle('d-none', visibleCount > 0);
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value.toLowerCase().trim();
            applyFilters();
        });
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentYear = btn.getAttribute('data-year');
            applyFilters();
        });
    });
});