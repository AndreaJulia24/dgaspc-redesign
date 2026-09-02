<?php
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$is_hu = ($current_lang === 'hu');
?>

<footer class="bg-dark text-light pt-5 pb-3 border-top border-secondary border-opacity-25 mt-auto">
    <div class="container">
        <div class="row g-4">
            
            <!-- 1. OSZLOP: DGASPC MUREȘ -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-white mb-3">DGASPC Mureș</h6>
                <p class="small text-secondary lh-sm mb-3">
                    <?php echo $is_hu 
                        ? 'Maros Megyei Szociális és Gyermekvédelmi Főigazgatóság.' 
                        : 'Direcția Generală de Asistență Socială și Protecția Copilului Mureș.'; ?>
                </p>
                <div class="small text-secondary">
                    <span class="d-block mb-1"><strong>CUI:</strong> 17112028</span>
                </div>
            </div>

            <!-- 2. OSZLOP: INFORMAȚII / INFORMÁCIÓK -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-white mb-3"><?php echo $is_hu ? 'Információk' : 'Informații'; ?></h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li>
                        <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/munkaprogram/' : '/program-de-lucru/' ) ); ?>" class="text-secondary text-decoration-none">
                            <?php echo $is_hu ? 'Ügyfélfogadási rend' : 'Programul de lucru'; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/kapcsolat/' : '/contact/' ) ); ?>" class="text-secondary text-decoration-none">
                            <?php echo $is_hu ? 'Kapcsolat' : 'Contact'; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/allasajanlatok/' : '/locuri-de-munca/' ) ); ?>" class="text-secondary text-decoration-none">
                            <?php echo $is_hu ? 'Állásajánlatok' : 'Locuri de muncă'; ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 3. OSZLOP: LEGAL / JOGI INFORMACIOK -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-white mb-3"><?php echo $is_hu ? 'Jogi Információk' : 'Legal'; ?></h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li>
                        <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/adatvedelem/' : '/gdpr/' ) ); ?>" class="text-secondary text-decoration-none">
                            <?php echo $is_hu ? 'Adatvédelem és GDPR' : 'Protecția Datelor și GDPR'; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/atlathatosag/' : '/transparenta/' ) ); ?>" class="text-secondary text-decoration-none">
                            <?php echo $is_hu ? 'Döntési átláthatóság' : 'Transparență decizională'; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( $is_hu ? '/hu/interaktiv-terkep/' : '/harta-interactiva/' ) ); ?>" class="text-secondary text-decoration-none">
                            <?php echo $is_hu ? 'Interaktív térkép' : 'Hartă interactivă'; ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 4. OSZLOP: CONTACT RAPID / GYORS KAPCSOLAT -->
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="fw-bold text-white mb-3"><?php echo $is_hu ? 'Gyors Kapcsolat' : 'Contact Rapid'; ?></h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-secondary">
                        <li class="d-flex align-items-start gap-2">
                            <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
                            <a href="https://www.google.com/maps/search/?api=1&query=Strada+Trébely+7,+Târgu+Mureș" target="_blank" rel="noopener noreferrer" class="text-secondary text-decoration-none">
                                Târgu Mureș, str. Trebely nr. 7, Jud. Mureș
                            </a>
                        </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        <div>
                            <a href="tel:0265213512" class="text-secondary text-decoration-none d-block">0265-213.512</a>
                            <a href="tel:0265211699" class="text-secondary text-decoration-none d-block">0265-211.699</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        <a href="mailto:office@dgaspcmures.ro" class="text-secondary text-decoration-none">office@dgaspcmures.ro</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="border-top border-secondary border-opacity-25 mt-4 pt-3 text-center small text-secondary">
            &copy; <?php echo date('Y'); ?> DGASPC Mureș. <?php echo $is_hu ? 'Minden jog fenntartva.' : 'Toate drepturile rezervate.'; ?>
        </div>
    </div>
</footer>

<!-- FLOATING WIDGET INCLUDE -->
<?php get_template_part('assets/widgets/emergency_widget'); ?>

<!-- Bootstrap 5 JS Bundle (important for Bootstrap components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>