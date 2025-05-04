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
            data-name="<?= $translations['diamond_stud_earrings'] ?>" 
            data-price="2200"
            data-description="<?= $translations['diamond_stud_earrings_desc'] ?>"
            data-images='["/assets/img/earrings-a.jpg", "/assets/img/earrings-b.jpg", "/assets/img/earrings-c.jpg"]'>
            <div class="product-image">
                <a href="product.php?name=<?= $translations['diamond_stud_earrings'] ?>&price=2200&description=<?= $translations['diamond_stud_earrings_desc'] ?>&images=/assets/img/earrings-a.jpg,/assets/img/earrings-b.jpg,/assets/img/earrings-c.jpg&category=Earring">
                    <img alt="<?= $translations['diamond_stud_earrings'] ?>" src="https://storage.googleapis.com/a1aa/image/earring-example.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['diamond_stud_earrings'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>2200</p>
        </div>

        <div class="product-item text-center" 
            data-category="Earring" 
            data-name="<?= $translations['gold_hoop_earrings'] ?>" 
            data-price="1500"
            data-description="<?= $translations['gold_hoop_earrings_desc'] ?>"
            data-images='["/assets/img/earrings-d.jpg", "/assets/img/earrings-e.jpg", "/assets/img/earrings-f.jpg"]'>
            <div class="product-image">
                <a href="product.php?name=<?= $translations['gold_hoop_earrings'] ?>&price=1500&description=<?= $translations['gold_hoop_earrings_desc'] ?>&images=/assets/img/earrings-d.jpg,/assets/img/earrings-e.jpg,/assets/img/earrings-f.jpg&category=Earring">
                    <img alt="<?= $translations['gold_hoop_earrings'] ?>" src="https://storage.googleapis.com/a1aa/image/earring-example.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['gold_hoop_earrings'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>1500</p>
        </div>

        <!-- Add more earring items here following the same structure -->
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
