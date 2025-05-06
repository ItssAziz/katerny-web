<?php
// Ensure no whitespace before opening tag
require_once 'header.php';

?>

<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
        <a href="index.php" class="no-underline text-gray-500"><?= $translations['home'] ?></a> &nbsp;/&nbsp; <?= $translations['earrings_page_title'] ?>
    </nav>

    <!-- Page Title -->
    <h1 class="text-5xl font-bold mb-4"><?= $translations['earrings_page_title'] ?></h1>

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
        <!-- Product Items -->
        <div class="product-item text-center" 
            data-category="Earring"
            data-name="<?= $translations['statement_chandelier_earrings'] ?? 'Statement Chandelier Earrings' ?>"
            data-price="1800"
            data-images='["/assets/img/earrings-01-a.webp", "/assets/img/earrings-01-b.webp", "/assets/img/earrings-01-c.jpg"]'
            data-description="<?= $translations['statement_chandelier_earrings_desc'] ?? 'Dramatic chandelier earrings with intricate metalwork' ?>">
            <div class="product-image">
                <img src="/assets/img/earrings-01-a.webp" alt="<?= htmlspecialchars($translations['statement_chandelier_earrings'] ?? 'Statement Chandelier Earrings') ?> - <?= htmlspecialchars($translations['statement_chandelier_earrings_desc'] ?? 'Dramatic chandelier earrings with intricate metalwork' )?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['statement_chandelier_earrings'] ?? 'Statement Chandelier Earrings' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1800</p>
        </div>

        <div class="product-item text-center" 
            data-category="Earring"
            data-name="<?= $translations['elegant_stud_earrings'] ?? 'Elegant Stud Earrings' ?>"
            data-price="950"
            data-images='["/assets/img/earrings-02-a.webp", "/assets/img/earrings-02-b.webp"]'
            data-description="<?= $translations['elegant_stud_earrings_desc'] ?? 'Sophisticated stud earrings with secure fastening' ?>">
            <div class="product-image">
                <img src="/assets/img/earrings-02-a.webp" alt="<?= htmlspecialchars($translations['elegant_stud_earrings'] ?? 'Elegant Stud Earrings') ?> - <?= htmlspecialchars($translations['elegant_stud_earrings_desc'] ?? 'Sophisticated stud earrings with secure fastening' )?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['elegant_stud_earrings'] ?? 'Elegant Stud Earrings' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>950</p>
        </div>

        <!-- Product Item 3 -->
        <div class="product-item text-center" 
            data-category="Earrings"
            data-name="<?= $translations['drop_earrings'] ?? 'Drop Earrings' ?>"
            data-price="1100"
            data-images='["/assets/img/earrings-01-c.jpg", "/assets/img/earrings-01-d.jpeg", "/assets/img/earrings-01-a.webp", "/assets/img/earrings-01-b.webp"]'
            data-description="<?= $translations['drop_earrings_desc'] ?? 'Elegant drop earrings with secure fastening' ?>">
            <div class="product-image">
                <img src="/assets/img/earrings-01-c.jpg" alt="<?= htmlspecialchars($translations['drop_earrings'] ?? 'Drop Earrings') ?> - <?= htmlspecialchars($translations['drop_earrings_desc'] ?? 'Elegant drop earrings with secure fastening' )?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['drop_earrings'] ?? 'Drop Earrings' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1100</p>
        </div>

        <!-- Product Item 4 -->
        <div class="product-item text-center" 
            data-category="Earrings"
            data-name="<?= $translations['chandelier_earrings'] ?? 'Chandelier Earrings' ?>"
            data-price="1350"
            data-images='["/assets/img/earrings-01-d.jpeg", "/assets/img/earrings-01-a.webp", "/assets/img/earrings-01-b.webp", "/assets/img/earrings-01-c.jpg"]'
            data-description="<?= $translations['chandelier_earrings_desc'] ?? 'Statement chandelier earrings' ?>">
            <div class="product-image">
                <img src="/assets/img/earrings-01-d.jpeg" alt="<?= htmlspecialchars($translations['chandelier_earrings'] ?? 'Chandelier Earrings') ?> - <?= htmlspecialchars($translations['chandelier_earrings_desc'] ?? 'Statement chandelier earrings' )?>" class="w-full">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold mt-4"><?= $translations['chandelier_earrings'] ?? 'Chandelier Earrings' ?></h2>
            <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1350</p>
        </div>

        <!-- Add more earring items here following the same structure -->
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
