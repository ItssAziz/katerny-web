<?php include('header.php'); ?>

<div class="container mx-auto px-4 py-8" <?= ($_SESSION['lang'] ?? 'en') == 'ar' ? 'dir="rtl"' : '' ?>>
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
        <a href="index.php" class="no-underline text-gray-500"><?= $translations['home'] ?></a> &nbsp;/&nbsp; <?= $translations['rings_page_title'] ?>
    </nav>

    <!-- Page Title -->
    <h1 class="text-5xl font-bold mb-4"><?= $translations['rings_page_title'] ?></h1>

    <!-- Sorting, Filtering and Product Count -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <span id="product-count" class="text-gray-500"></span>
        
        <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
            <!-- Price Range Filter -->
            <div class="flex items-center gap-2">
                <span class="text-gray-500 whitespace-nowrap"><?= $translations['max_price'] ?>:</span>
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
            data-category="Ring" 
            data-name="<?= $translations['elegant_gold_ring'] ?>" 
            data-price="1500"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="<?= $translations['elegant_gold_ring_desc'] ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['elegant_gold_ring']) ?>&price=1500&description=<?= urlencode($translations['elegant_gold_ring_desc']) ?>&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="<?= $translations['elegant_gold_ring'] ?>" src="https://storage.googleapis.com/a1aa/image/1u2VM7easZ3Mci876MOCAfb1oCTOoaDcJfcP6swejncWdR8PB.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['elegant_gold_ring'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>1500</p>
        </div>

        <div class="product-item text-center" 
            data-category="Ring" 
            data-name="<?= $translations['sparkling_gemstone_ring'] ?>" 
            data-price="2200"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="<?= $translations['sparkling_gemstone_ring_desc'] ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['sparkling_gemstone_ring']) ?>&price=2200&description=<?= urlencode($translations['sparkling_gemstone_ring_desc']) ?>&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="<?= $translations['sparkling_gemstone_ring'] ?>" src="https://storage.googleapis.com/a1aa/image/8m5DiFZmEQqzClS9hpeP8m40DfQe0gdVEfWOvhDe1JBI6i4fE.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['sparkling_gemstone_ring'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>2200</p>
        </div>

        <div class="product-item text-center" 
            data-category="Ring" 
            data-name="<?= $translations['classic_timeless_ring'] ?>" 
            data-price="1300"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="<?= $translations['classic_timeless_ring_desc'] ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['classic_timeless_ring']) ?>&price=1300&description=<?= urlencode($translations['classic_timeless_ring_desc']) ?>&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="<?= $translations['classic_timeless_ring'] ?>" src="https://storage.googleapis.com/a1aa/image/ZJAGFIG83u6uPlTouOCDyETqUOMcd2ChYEQPfiHM7CIqLifTA.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['classic_timeless_ring'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>1300</p>
        </div>

        <div class="product-item text-center" 
            data-category="Ring" 
            data-name="<?= $translations['delicate_charm_ring'] ?>" 
            data-price="750"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="<?= $translations['delicate_charm_ring_desc'] ?>">
            <div class="product-image">
                <a href="product.php?name=<?= urlencode($translations['delicate_charm_ring']) ?>&price=750&description=<?= urlencode($translations['delicate_charm_ring_desc']) ?>&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="<?= $translations['delicate_charm_ring'] ?>" src="https://storage.googleapis.com/a1aa/image/BDo8fmKe6drqEkGElxsncJPf2bogB3rhfrMNFU8MwyzKdR8PB.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="<?= $translations['quick_view'] ?>">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['delicate_charm_ring'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>750</p>
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
                        <span class="absolute top-2 left-2 bg-white text-gray-800 text-xs font-semibold px-2 py-1 rounded-full shadow"><?= $translations['sale_badge'] ?></span>
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

<?php include('footer.php'); ?>