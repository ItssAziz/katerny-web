<?php
// Start output buffering first
ob_start();

// Then start session
session_start();

// Language initialization
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = ($_GET['lang'] === 'ar') ? 'ar' : 'en';
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}
$lang = $_SESSION['lang'];
$translations = require "lang/$lang.php";
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $lang === 'ar' ? 'rtl' : 'ltr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jewelry Store</title>
    <link rel="stylesheet" href="/katnery/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@abdulrysr/saudi-riyal-new-symbol-font@latest/style.css">
    <!-- Essential scripts with proper order -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/typed.js/typed.umd.js"></script>
    <!-- ElevateZoom -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="assets/js/main.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo" style="max-width: 180px;">
                <a href="index.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><img src="/assets/img/katnery logo.png" alt="<?= $translations['brand_logo'] ?>" style="width:100%; height:auto;"></a>
            </div>
            <nav>
                <ul class="left-nav">
                    <li><a href="rings.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'rings.php' ? 'active' : '' ?>"><?= $translations['rings'] ?></a></li>
                    <li><a href="necklaces.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'necklaces.php' ? 'active' : '' ?>"><?= $translations['necklaces'] ?></a></li>
                    <li><a href="bracelets.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'bracelets.php' ? 'active' : '' ?>"><?= $translations['bracelets'] ?></a></li>
                    <li><a href="earrings.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'earrings.php' ? 'active' : '' ?>"><?= $translations['earrings'] ?></a></li>
                </ul>
                <ul class="right-nav">
                    <li><a href="index.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><?= $translations['home'] ?></a></li>
                    <li><a href="about.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><?= $translations['about'] ?></a></li>
                    <li><a href="contact.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>"><?= $translations['contact'] ?></a></li>
                    <li class="language-switcher">
                        <a href="?lang=en" class="<?= ($_SESSION['lang'] ?? 'en') === 'en' ? 'active' : '' ?>" data-lang="en">EN</a>
                        <span class="text-gray-400">/</span>
                        <a href="?lang=ar" class="<?= ($_SESSION['lang'] ?? 'en') === 'ar' ? 'active' : '' ?>" data-lang="ar">العربية</a>
                    </li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <nav class="mobile-nav">
                <ul>
                    <li><a href="index.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['home'] ?></a></li>
                    <li><a href="rings.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['rings'] ?></a></li>
                    <li><a href="necklaces.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['necklaces'] ?></a></li>
                    <li><a href="bracelets.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['bracelets'] ?></a></li>
                    <li><a href="earrings.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['earrings'] ?></a></li>
                    <li><a href="about.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['about'] ?></a></li>
                    <li><a href="contact.php?lang=<?= $_SESSION['lang'] ?? 'en' ?>"><?= $translations['contact'] ?></a></li>
                    <li class="mobile-language-switcher">
                        <a href="?lang=en">EN</a>
                        <span>/</span>
                        <a href="?lang=ar">العربية</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
