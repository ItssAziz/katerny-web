<?php
// Language initialization
$lang = $_GET['lang'] ?? 'en';
$translations = require "lang/$lang.php";
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $lang === 'ar' ? 'rtl' : 'ltr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jewelry Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <!-- Essential scripts with proper order -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/typed.js/typed.umd.js"></script>
    <script src="assets/js/main.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo" style="max-width: 180px;">
                <a href="index.php"><img src="/assets/img/katnery logo.png" alt="Brand Logo" style="width:100%; height:auto;"></a>
            </div>
            <nav>
                <ul class="left-nav">
                    <li><a href="rings.php" class="<?= basename($_SERVER['PHP_SELF']) == 'rings.php' ? 'active' : '' ?>"><?= $translations['rings'] ?></a></li>
                    <li><a href="necklaces.php" class="<?= basename($_SERVER['PHP_SELF']) == 'necklaces.php' ? 'active' : '' ?>"><?= $translations['necklaces'] ?></a></li>
                    <li><a href="bracelets.php" class="<?= basename($_SERVER['PHP_SELF']) == 'bracelets.php' ? 'active' : '' ?>"><?= $translations['bracelets'] ?></a></li>
                    <li><a href="earrings.php" class="<?= basename($_SERVER['PHP_SELF']) == 'earrings.php' ? 'active' : '' ?>"><?= $translations['earrings'] ?></a></li>
                </ul>
                <ul class="right-nav">
                    <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><?= $translations['home'] ?></a></li>
                    <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><?= $translations['about'] ?></a></li>
                    <li><a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>"><?= $translations['contact'] ?></a></li>
                    <li class="language-switcher">
                        <a href="?lang=en" class="<?= ($_GET['lang'] ?? 'en') === 'en' ? 'active' : '' ?>">EN</a>
                        <span class="text-gray-400">/</span>
                        <a href="?lang=ar" class="<?= ($_GET['lang'] ?? 'en') === 'ar' ? 'active' : '' ?>">العربية</a>
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
                    <li><a href="index.php"><?= $translations['home'] ?></a></li>
                    <li><a href="rings.php"><?= $translations['rings'] ?></a></li>
                    <li><a href="necklaces.php"><?= $translations['necklaces'] ?></a></li>
                    <li><a href="bracelets.php"><?= $translations['bracelets'] ?></a></li>
                    <li><a href="earrings.php"><?= $translations['earrings'] ?></a></li>
                    <li><a href="about.php"><?= $translations['about'] ?></a></li>
                    <li><a href="contact.php"><?= $translations['contact'] ?></a></li>
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
