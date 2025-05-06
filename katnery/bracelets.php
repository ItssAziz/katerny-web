<?php
// Start output buffering and session at very top
ob_start();
require_once 'header.php';

// Rest of file content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracelets - Katnery</title>
    <link rel="stylesheet" href="../katnery/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container mx-auto px-4 py-8" <?= ($_SESSION['lang'] ?? 'en') == 'ar' ? 'dir="rtl"' : '' ?>>
        <!-- Breadcrumb Navigation -->
        <!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
    <a href="index.php" class="no-underline text-gray-500"><?= $translations['home'] ?></a> &nbsp;/&nbsp; <?= $translations['bracelets_page_title'] ?>
</nav>

<!-- Page Title -->
<h1 class="text-5xl font-bold mb-4"><?= $translations['bracelets_page_title'] ?></h1>

        <!-- Sorting, Filtering and Product Count -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <span id="product-count" class="text-gray-500"></span>
            
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <!-- Price Range Filter -->
                <div class="flex items-center gap-2">
                    <span class="text-gray-500 whitespace-nowrap"><?= $translations['price_filter_label'] ?></span>
                    <input type="range" id="price-range" min="0" max="5000" step="100" value="5000" 
                           class="w-24 md:w-32" />
                    <span id="price-value" class="text-gray-500"><span class="icon-saudi_riyal">&#xea;</span>5000</span>
                </div>
                
                <!-- Category Filter -->
                <div class="relative">
                    <select id="filter-options" class="appearance-none bg-transparent border-none text-gray-500">
    <option value="Bracelet"><?= $translations['bracelets'] ?></option>
    <option value="Ring"><?= $translations['rings'] ?></option>
    <option value="Earring"><?= $translations['earrings'] ?></option>
    <option value="Necklace"><?= $translations['necklaces'] ?></option>
</select>
                    <i class="fas fa-chevron-down absolute right-0 top-0 mt-2 mr-2 text-gray-500"></i>
                </div>
                
                <!-- Sorting -->
                <div class="relative">
                    <select id="sort-options" class="appearance-none bg-transparent border-none text-gray-500">
    <option value="default"><?= $translations['default_sorting'] ?></option>
    <option value="price-asc"><?= $translations['price_low_to_high'] ?></option>
    <option value="price-desc"><?= $translations['price_high_to_low'] ?></option>
    <option value="name-asc"><?= $translations['name_a_to_z'] ?></option>
    <option value="name-desc"><?= $translations['name_z_to_a'] ?></option>
</select>
                    <i class="fas fa-chevron-down absolute right-0 top-0 mt-2 mr-2 text-gray-500"></i>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="product-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Product Items -->
            <div class="product-item text-center" 
                data-category="Bracelet"
                data-name="<?= $translations['chain_bracelet'] ?? 'Chain Bracelet' ?>"
                data-price="1100"
                data-images='["/assets/img/bracelet-01-a.webp", "/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-01-d.jpg"]'
                data-description="<?= $translations['chain_bracelet_desc'] ?? 'Delicate chain bracelet with adjustable length' ?>">
                <div class="product-image">
                    <img src="/assets/img/bracelet-01-a.webp" alt="<?= $translations['chain_bracelet'] ?? 'Chain Bracelet' ?>" class="w-full">
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['chain_bracelet'] ?? 'Chain Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1100</p>
            </div>

            <div class="product-item text-center" 
                data-category="Bracelet"
                data-name="<?= $translations['bangle_bracelet'] ?? 'Bangle Bracelet' ?>"
                data-price="1250"
                data-images='["/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-01-d.jpg", "/assets/img/bracelet-01-a.webp"]'
                data-description="<?= $translations['bangle_bracelet_desc'] ?? 'Solid bangle bracelet with engraved details' ?>">
                <div class="product-image">
                    <img src="/assets/img/bracelet-01-b.webp" alt="<?= $translations['bangle_bracelet'] ?? 'Bangle Bracelet' ?>" class="w-full">
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['bangle_bracelet'] ?? 'Bangle Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1250</p>
            </div>

            <!-- Product Item 3 -->
            <div class="product-item text-center" 
                data-category="Bracelet"
                data-name="<?= $translations['charm_bracelet'] ?? 'Charm Bracelet' ?>"
                data-price="1400"
                data-images='["/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-01-d.jpg", "/assets/img/bracelet-01-a.webp", "/assets/img/bracelet-01-b.webp"]'
                data-description="<?= $translations['charm_bracelet_desc'] ?? 'Personalized charm bracelet' ?>">
                <div class="product-image">
                    <img src="/assets/img/bracelet-01-c.jpg" alt="<?= $translations['charm_bracelet'] ?? 'Charm Bracelet' ?>" class="w-full">
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['charm_bracelet'] ?? 'Charm Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1400</p>
            </div>

            <!-- Product Item 4 -->
            <div class="product-item text-center" 
                data-category="Bracelet"
                data-name="<?= $translations['tennis_bracelet'] ?? 'Tennis Bracelet' ?>"
                data-price="1600"
                data-images='["/assets/img/bracelet-01-d.jpg", "/assets/img/bracelet-01-a.webp", "/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-c.jpg"]'
                data-description="<?= $translations['tennis_bracelet_desc'] ?? 'Elegant diamond-cut tennis bracelet' ?>">
                <div class="product-image">
                    <img src="/assets/img/bracelet-01-d.jpg" alt="<?= $translations['tennis_bracelet'] ?? 'Tennis Bracelet' ?>" class="w-full">
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['tennis_bracelet'] ?? 'Tennis Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1600</p>
            </div>

            <!-- Add more bracelet items here following the same structure -->
        </div>

        <!-- Modal -->
        <!-- Modal -->
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="product-modal">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full relative <?= $_SESSION['lang'] === 'ar' ? 'rtl' : '' ?>">
            <button class="modal-close absolute top-4 right-4 <?= $_SESSION['lang'] === 'ar' ? 'right-auto left-4' : '' ?>" id="close-modal">
              <i class="fas fa-times text-xl"></i>
            </button>
            <div class="flex flex-col md:flex-row <?= $_SESSION['lang'] === 'ar' ? 'md:flex-row-reverse' : '' ?>">
                <div class="md:w-1/2">
                    <div class="relative">
                        <?php if(isset($translations['sale_badge'])): ?>
                            <span class="absolute top-0 left-0 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded"><?= $translations['sale_badge'] ?></span>
                        <?php endif; ?>
                        <div class="slideshow-container" id="modal-slideshow">
                            <!-- Slides will be inserted here dynamically -->
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <div class="flex justify-center mt-4 space-x-2" id="modal-dots">
                            <!-- Dots will be inserted here dynamically -->
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-6 mt-6 md:mt-0">
                    <a href="http://localhost/katnery/bracelets.php" class="text-sm text-gray-500 hover:underline" id="modal-category"></a>
                    <h1 class="text-3xl font-bold text-gray-900" id="modal-title"></h1>
                    <div class="flex items-center mt-2">
                        <span class="text-2xl font-bold text-brown-600 ml-2" id="modal-price"><span class="icon-saudi_riyal">&#xea;</span></span>
                        <span class="text-sm text-gray-500 ml-2"><?= $translations['free_shipping'] ?></span>
                    </div>
                    <p class="text-gray-700 mt-4" id="modal-description"></p>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <?php include('footer.php'); ?>

    <script src="../katnery/script.js"></script>
</body>
</html>
