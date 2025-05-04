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
    <option value="all"><?= $translations['all_categories'] ?? 'All Categories' ?></option>
    <option value="Ring"><?= $translations['rings_page_title'] ?? 'Rings' ?></option>
    <option value="Bracelet"><?= $translations['bracelets_page_title'] ?? 'Bracelets' ?></option>
    <option value="Earring"><?= $translations['earrings_page_title'] ?? 'Earrings' ?></option>
    <option value="Necklace"><?= $translations['necklaces_page_title'] ?? 'Necklaces' ?></option>
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
                data-name="<?= $translations['gold_cuff_bracelet'] ?>" 
                data-price="1800"
                data-description="<?= $translations['gold_cuff_bracelet_desc'] ?>"
                data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'>
                <div class="product-image">
                    <a href="product.php?name=<?= $translations['gold_cuff_bracelet'] ?>&price=1800&description=<?= $translations['gold_cuff_bracelet_desc'] ?>&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Bracelet">
                        <img alt="<?= $translations['gold_cuff_bracelet'] ?>" src="https://storage.googleapis.com/a1aa/image/1u2VM7easZ3Mci876MOCAfb1oCTOoaDcJfcP6swejncWdR8PB.jpg">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold"><?= $translations['gold_cuff_bracelet'] ?></h2>
                <p class="price"><span class="icon-saudi_riyal">&#xea;</span>1800</p>
            </div>

            <div class="product-item text-center" 
                data-category="Bracelet" 
                data-name="<?= $translations['silver_chain_bracelet'] ?>" 
                data-price="1200"
                data-description="<?= $translations['silver_chain_bracelet_desc'] ?>"
                data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'>
                <div class="product-image">
                    <a href="product.php?name=<?= $translations['silver_chain_bracelet'] ?>&price=1200&description=<?= $translations['silver_chain_bracelet_desc'] ?>&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Bracelet">
                        <img alt="<?= $translations['silver_chain_bracelet'] ?>" src="https://storage.googleapis.com/a1aa/image/1u2VM7easZ3Mci876MOCAfb1oCTOoaDcJfcP6swejncWdR8PB.jpg">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold"><?= $translations['silver_chain_bracelet'] ?></h2>
                <p class="price"><span class="icon-saudi_riyal">&#xea;</span>1200</p>
            </div>

            <!-- Add more bracelet items here following the same structure -->
        </div>

        <!-- Modal -->
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="product-modal">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full relative <?= $_SESSION['lang'] === 'ar' ? 'rtl' : '' ?>">
                <button class="modal-close absolute top-4 right-4 <?= $_SESSION['lang'] === 'ar' ? 'right-auto left-4' : '' ?>" id="close-modal">
                  <i class="fas fa-times text-xl"></i>
                </button>
                <div class="flex flex-col md:flex-row <?= $_SESSION['lang'] === 'ar' ? 'md:flex-row-reverse' : '' ?>">
                    <div class="product-gallery">
                        <!-- Gallery content will be populated by JavaScript -->
                    </div>
                    <div class="product-details">
                        <!-- Details content will be populated by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="../katnery/script.js"></script>
</body>
</html>
