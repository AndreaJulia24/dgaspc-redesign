<?php
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<!-- FLOATING DRAGGABLE EMERGENCY WIDGET -->
<aside id="draggableEmergencyWidget" 
       class="floating-emergency-widget shadow-lg rounded-4 overflow-hidden position-fixed m-3 m-md-4 text-white" 
       style="z-index: 1050; width: 220px; background-color: #dc2626; right: 20px; bottom: 20px;" 
       aria-label="Urgențe 24/7">
    
    <div class="emergency-drag-handle text-center p-3">
        <div class="fs-4 lh-1 mb-1">
            <i class="bi bi-asterisk"></i>
        </div>
        <h6 class="fw-bold mb-1 text-uppercase letter-spacing-1">
            <?php echo $is_hu ? 'Vészhelyzet 24/7' : 'Urgențe 24/7'; ?>
        </h6>
        <p class="small text-white-50 mb-0" style="font-size: 0.75rem;">
            <?php echo $is_hu ? 'Biztonságosan hívja' : 'Apelați cu încredere'; ?>
        </p>
    </div>

    <!-- TELEFONUL COPILULUI -->
    <a href="https://dgaspcmures.ro/corai/en" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white">
        <div class="py-2 px-3 text-center border-top border-bottom border-white-50 bg-black bg-opacity-10">
            <div class="d-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-telephone-fill small"></i>
                <span class="fw-semibold small">
                    <?php echo $is_hu ? 'Gyermek telefon' : 'Telefonul Copilului'; ?>
                </span>
                <i class="bi bi-box-arrow-up-right small opacity-75"></i>
            </div>
        </div>
    </a>

    <!-- BUTTON EMERGENCY NUMBER 119 -->
    <div class="p-2 text-center bg-black bg-opacity-20">
        <a href="tel:119" class="btn btn-light text-danger fw-bold w-100 py-2 rounded-pill shadow-sm">
            <?php echo $is_hu ? 'Hívja most (119)' : 'Sună Acum (119)'; ?>
        </a>
    </div>
</aside>
