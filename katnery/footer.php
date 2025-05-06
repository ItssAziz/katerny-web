<footer class="site-footer">
    <div class="footer-content">
        <!-- Footer Logo -->
        <div class="footer-logo">
            <img src="assets/img/katnery logo.png" alt="<?= $translations['brand_logo'] ?>">
        </div>

        <!-- About Us Section -->
        <div class="footer-about">
            <h3><?= $translations['about_us'] ?></h3>
            <ul aria-label="Footer navigation links">
                <li><a href="index.php"><?= $translations['home'] ?></a></li>
                <li><a href="about.php"><?= $translations['about'] ?></a></li>
                <li><a href="contact.php"><?= $translations['contact'] ?></a></li>
            </ul>
        </div>

        <!-- Shop Section -->
        <div class="footer-shop">
            <h3><?= $translations['shop'] ?></h3>
            <ul>
                <li><a href="rings.php"><?= $translations['rings'] ?></a></li>
                <li><a href="bracelets.php"><?= $translations['bracelets'] ?></a></li>
                <li><a href="earrings.php"><?= $translations['earrings'] ?></a></li>
                <li><a href="necklaces.php"><?= $translations['necklaces'] ?></a></li>
            </ul>
        </div>

        <!-- Contact Us Section -->
        <div class="footer-contact">
            <h3><?= $translations['contact_us'] ?></h3>
            <p><?= $translations['address'] ?></p>
            <p><a href="mailto:katnery@gmail.com">katnery@gmail.com</a></p>
            <p><a href="tel:+966553464889">+966 55 346 4889</a></p>
        </div>
    
    </div>
    <div class="copyright">
    <div class="footer-copyright">
        <p> 2024 Katnery by Aziz. All rights reserved.</p>
    </div>
    </div>
</footer>

<?php 
// Removed duplicate session_start() since it's already called in header.php
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}
$lang = $_SESSION['lang'];
$translations = require __DIR__."/lang/$lang.php";
?>

<script>
    window.translations = {
        en: <?= json_encode($translations) ?>,
        ar: <?= json_encode(require __DIR__."/lang/ar.php") ?>
    };
</script>

<script src="assets/js/main.js"></script>
<script src="https://websitedemos.net/blingg-jewelry-store-04/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21-wc.9.3.1" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js" defer></script>