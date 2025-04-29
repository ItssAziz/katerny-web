<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
                <a href="http://localhost/katnery/"><img src="/assets/img/katnery logo.png" alt="Brand Logo" style="width:100%; height:auto;"></a>
            </div>
            <nav>
                <ul class="left-nav">
                    <li><a href="rings.php" class="<?= basename($_SERVER['PHP_SELF']) == 'rings.php' ? 'active' : '' ?>">Rings</a></li>
                    <li><a href="bracelets.php" class="<?= basename($_SERVER['PHP_SELF']) == 'bracelets.php' ? 'active' : '' ?>">Bracelets</a></li>
                    <li><a href="earrings.php" class="<?= basename($_SERVER['PHP_SELF']) == 'earrings.php' ? 'active' : '' ?>">Earrings</a></li>
                    <li><a href="necklaces.php" class="<?= basename($_SERVER['PHP_SELF']) == 'necklaces.php' ? 'active' : '' ?>">Necklaces</a></li>
                </ul>
                <ul class="right-nav">
                    <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
                    <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a></li>
                    <li><a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <nav class="mobile-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="rings.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
