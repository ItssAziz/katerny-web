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
        <span id="product-count" class="text-gray-500"><?= sprintf($translations['showing_products'], 0) ?></span>
        
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
    <div class="product-grid">
        <!-- Product Item 1 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['luxury_gold_choker'] ?? 'Luxurious Gold Choker' ?>"
            data-price="2200"
            data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
            data-description="<?= $translations['luxury_gold_choker_desc'] ?? 'Handcrafted 18K gold choker with diamond accents' ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['luxury_gold_choker'] ?? 'Luxurious Gold Choker') ?>&price=2200&description=<?= urlencode($translations['luxury_gold_choker_desc'] ?? 'Handcrafted 18K gold choker with diamond accents') ?>&images=/assets/img/necklace-01-a.jpg,/assets/img/necklace-01-b.jpg,/assets/img/necklace-01-c.jpg,/assets/img/necklace-01-d.jpg&category=<?= urlencode('Necklace') ?>">
                    <img src="/assets/img/necklace-01-a.jpg" alt="<?= htmlspecialchars($translations['luxury_gold_choker'] ?? 'Luxurious Gold Choker') ?> - <?= htmlspecialchars($translations['luxury_gold_choker_desc'] ?? 'Handcrafted 18K gold choker with diamond accents') ?>" class="w-full">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['luxury_gold_choker'] ?? 'Luxurious Gold Choker' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>2200</p>
        </div>

        <!-- Product Item 2 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['modern_lariat_necklace'] ?? 'Modern Silver Lariat Necklace' ?>"
            data-price="1750"
            data-images='["/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg", "/assets/img/necklace-01-a.jpg"]'
            data-description="<?= $translations['modern_lariat_necklace_desc'] ?? 'Contemporary sterling silver lariat with adjustable length' ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['modern_lariat_necklace'] ?? 'Modern Silver Lariat Necklace') ?>&price=1750&description=<?= urlencode($translations['modern_lariat_necklace_desc'] ?? 'Contemporary sterling silver lariat with adjustable length') ?>&images=/assets/img/necklace-01-b.jpg,/assets/img/necklace-01-c.jpg,/assets/img/necklace-01-d.jpg,/assets/img/necklace-01-a.jpg&category=<?= urlencode('Necklace') ?>">
                    <img src="/assets/img/necklace-01-b.jpg" alt="<?= htmlspecialchars($translations['modern_lariat_necklace'] ?? 'Modern Silver Lariat Necklace') ?> - <?= htmlspecialchars($translations['modern_lariat_necklace_desc'] ?? 'Contemporary sterling silver lariat with adjustable length') ?>" class="w-full">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['modern_lariat_necklace'] ?? 'Modern Silver Lariat Necklace' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1750</p>
        </div>

        <!-- Product Item 3 -->
        <div class="product-item text-center" 
            data-category="Necklace"
            data-name="<?= $translations['gold_choker_necklace'] ?? 'Gold Choker Necklace' ?>"
            data-price="1800"
            data-images='["/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg", "/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg"]'
            data-description="<?= $translations['gold_choker_necklace_desc'] ?? 'Luxurious gold choker with intricate design' ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['gold_choker_necklace'] ?? 'Gold Choker Necklace') ?>&price=1800&description=<?= urlencode($translations['gold_choker_necklace_desc'] ?? 'Luxurious gold choker with intricate design') ?>&images=/assets/img/necklace-01-c.jpg,/assets/img/necklace-01-d.jpg,/assets/img/necklace-01-a.jpg,/assets/img/necklace-01-b.jpg&category=<?= urlencode('Necklace') ?>">
                    <img src="/assets/img/necklace-01-c.jpg" alt="<?= htmlspecialchars($translations['gold_choker_necklace'] ?? 'Gold Choker Necklace') ?> - <?= htmlspecialchars($translations['gold_choker_necklace_desc'] ?? 'Luxurious gold choker with intricate design') ?>" class="w-full">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
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
            data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
            data-description="<?= $translations['silver_lariat_necklace_desc'] ?? 'Modern silver lariat necklace with adjustable length' ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['silver_lariat_necklace'] ?? 'Silver Lariat Necklace') ?>&price=1500&description=<?= urlencode($translations['silver_lariat_necklace_desc'] ?? 'Elegant silver lariat with modern design') ?>&images=/assets/img/necklace-01-d.jpg,/assets/img/necklace-01-a.jpg,/assets/img/necklace-01-b.jpg,/assets/img/necklace-01-c.jpg&category=<?= urlencode('Necklace') ?>">
                    <img src="/assets/img/necklace-01-d.jpg" alt="<?= htmlspecialchars($translations['silver_lariat_necklace'] ?? 'Silver Lariat Necklace') ?> - <?= htmlspecialchars($translations['silver_lariat_necklace_desc'] ?? 'Elegant silver lariat with modern design') ?>" class="w-full">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
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
        <button id="close-modal" class="absolute top-4 right-4 text-2xl" aria-label="Close product modal">
            &times;
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
                <a href="http://localhost/katnery/bracelets.php" class="text-sm text-gray-500 hover:underline" id="modal-category"><?= $translations['category'] ?? 'Category' ?></a>
                <h1 class="text-3xl font-bold text-gray-900" id="modal-title"><?= $translations['product_name'] ?? 'Product Name' ?></h1>
                <div class="flex items-center mt-2">
                    <span class="text-2xl font-bold text-brown-600 ml-2" id="modal-price"><span class="icon-saudi_riyal">&#xea;</span><?= $translations['price'] ?? 'Price' ?></span>
                    <span class="text-sm text-gray-500 ml-2"><?= $translations['free_shipping'] ?></span>
                </div>
                <p class="text-gray-700 mt-4" id="modal-description"><?= $translations['product_description'] ?? 'Product Description' ?></p>
                <a href="https://t.me/yourtelegram" class="order-button mt-4" target="_blank">
                    <i class="fab fa-telegram"></i> <?= $translations['order_now'] ?? 'Order Now' ?>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('footer.php'); ?>
