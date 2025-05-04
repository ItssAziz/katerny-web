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
        <!-- Product Items -->
        <div class="product-item text-center" 
            data-category="Necklace" 
            data-name="<?= $translations['elegant_pearl_necklace'] ?>" 
            data-price="2800"
            data-images='["/assets/img/necklace-a.jpg", "/assets/img/necklace-b.jpg", "/assets/img/necklace-c.jpg"]'
            data-description="<?= $translations['elegant_pearl_necklace_desc'] ?>">
            <div class="product-image">
                <a href="product.php?name=<?= $translations['elegant_pearl_necklace'] ?>&price=2800&description=<?= $translations['elegant_pearl_necklace_desc'] ?>&images=/assets/img/necklace-a.jpg,/assets/img/necklace-b.jpg,/assets/img/necklace-c.jpg&category=Necklace">
                    <img alt="<?= $translations['elegant_pearl_necklace'] ?>" src="https://storage.googleapis.com/a1aa/image/necklace-example.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['elegant_pearl_necklace'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>2800</p>
        </div>

        <div class="product-item text-center" 
            data-category="Necklace" 
            data-name="<?= $translations['diamond_pendant_necklace'] ?>" 
            data-price="3500"
            data-images='["/assets/img/necklace-d.jpg", "/assets/img/necklace-e.jpg", "/assets/img/necklace-f.jpg"]'
            data-description="<?= $translations['diamond_pendant_necklace_desc'] ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['diamond_pendant_necklace']) ?>&price=3500&description=<?= urlencode($translations['diamond_pendant_necklace_desc']) ?>&images=/assets/img/necklace-d.jpg,/assets/img/necklace-e.jpg,/assets/img/necklace-f.jpg&category=Necklace">
                    <img alt="<?= $translations['diamond_pendant_necklace'] ?>" src="/assets/img/necklace-d.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['diamond_pendant_necklace'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>3500</p>
        </div>

        <!-- Add more necklace items here following the same structure -->
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
