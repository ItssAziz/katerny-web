<?php
// Ensure no whitespace before opening tag
require_once 'header.php';

?>

<div class="container mx-auto px-4 py-8" <?= ($_SESSION['lang'] ?? 'en') == 'ar' ? 'dir="rtl"' : '' ?>>
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
        <a href="index.php" class="no-underline text-gray-500"><?= $translations['home'] ?></a> &nbsp;/&nbsp; <?= $translations['necklaces_page_title'] ?>
    </nav>

    <!-- Page Title -->
    <h1 class="text-5xl font-bold mb-4"><?= $translations['necklaces_page_title'] ?></h1>

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
        <!-- Product Item 1 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['elegant_pearl_necklace'] ?? 'Elegant Pearl Necklace' ?>"
            data-price="1200"
            data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
            data-description="<?= $translations['elegant_pearl_necklace_desc'] ?? 'Beautiful pearl necklace with gold accents' ?>">
            <div class="product-image">
                <img src="/assets/img/necklace-01-a.jpg" alt="<?= $translations['elegant_pearl_necklace'] ?? 'Elegant Pearl Necklace' ?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['elegant_pearl_necklace'] ?? 'Elegant Pearl Necklace' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1200</p>
        </div>

        <!-- Product Item 2 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['diamond_pendant_necklace'] ?? 'Diamond Pendant Necklace' ?>"
            data-price="950"
            data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-d.jpg"]'
            data-description="<?= $translations['diamond_pendant_necklace_desc'] ?? 'Elegant diamond pendant on silver chain' ?>">
            <div class="product-image">
                <img src="/assets/img/necklace-01-b.jpg" alt="<?= $translations['diamond_pendant_necklace'] ?? 'Diamond Pendant Necklace' ?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['diamond_pendant_necklace'] ?? 'Diamond Pendant Necklace' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>950</p>
        </div>

        <!-- Product Item 3 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['gold_choker_necklace'] ?? 'Gold Choker Necklace' ?>"
            data-price="1800"
            data-images='["/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
            data-description="<?= $translations['gold_choker_necklace_desc'] ?? 'Luxurious gold choker with intricate design' ?>">
            <div class="product-image">
                <img src="/assets/img/necklace-01-c.jpg" alt="<?= $translations['gold_choker_necklace'] ?? 'Gold Choker Necklace' ?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['gold_choker_necklace'] ?? 'Gold Choker Necklace' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1800</p>
        </div>

        <!-- Product Item 4 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['silver_lariat_necklace'] ?? 'Silver Lariat Necklace' ?>"
            data-price="1500"
            data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
            data-description="<?= $translations['silver_lariat_necklace_desc'] ?? 'Modern silver lariat necklace with adjustable length' ?>">
            <div class="product-image">
                <img src="/assets/img/necklace-01-d.jpg" alt="<?= $translations['silver_lariat_necklace'] ?? 'Silver Lariat Necklace' ?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['silver_lariat_necklace'] ?? 'Silver Lariat Necklace' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1500</p>
        </div>
    </div>

    <!-- Modal -->
<div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="product-modal">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full relative <?= $_SESSION['lang'] === 'ar' ? 'rtl' : '' ?>">
        <button class="modal-close absolute top-4 right-4 <?= $_SESSION['lang'] === 'ar' ? 'right-auto left-4' : '' ?>" id="close-modal">
          <i class="fas fa-times text-xl"></i>
        </button>
        <div class="flex flex-col md:flex-row <?= $_SESSION['lang'] === 'ar' ? 'md:flex-row-reverse' : '' ?>">
            <div class="md:w-1/2">
                <div class="relative">
                    <span class="absolute top-2 left-2 bg-white text-gray-800 text-xs font-semibold px-2 py-1 rounded-full shadow"><?= $translations['sale'] ?></span>
                    <div class="slideshow-container" id="modal-slideshow">
                        <!-- Slides will be inserted here dynamically -->
                    </div>
                    <div class="zoom-container hidden">
                        <img id="zoom-image" class="w-full rounded-lg">
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
                    <span class="text-2xl font-bold text-brown-600 ml-2" id="modal-price"></span>
                    <span class="text-sm text-gray-500 ml-2">&amp; <?= $translations['free_shipping'] ?></span>
                </div>
                <p class="text-gray-700 mt-4" id="modal-description"></p>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('footer.php'); ?>
