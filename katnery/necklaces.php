<?php include('header.php'); ?>

<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
        <a href="http://localhost/katnery/" class="no-underline text-gray-500">Home</a> &nbsp;/&nbsp; Necklaces
    </nav>

    <!-- Page Title -->
    <h1 class="text-5xl font-bold mb-4">Necklaces</h1>

    <!-- Sorting, Filtering and Product Count -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <span id="product-count" class="text-gray-500"></span>
        
        <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
            <!-- Price Range Filter -->
            <div class="flex items-center gap-2">
                <span class="text-gray-500 whitespace-nowrap">Max Price:</span>
                <input type="range" id="price-range" min="0" max="5000" step="100" value="5000" 
                       class="w-24 md:w-32" />
                <span id="price-value" class="text-gray-500">$5000</span>
            </div>
            
            <!-- Sorting -->
            <div class="relative">
                <select id="sort-options" class="appearance-none bg-transparent border-none text-gray-500">
                    <option value="default">Default sorting</option>
                    <option value="price-asc">Price: Low to High</option>
                    <option value="price-desc">Price: High to Low</option>
                    <option value="name-asc">Name: A to Z</option>
                    <option value="name-desc">Name: Z to A</option>
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
            data-name="Elegant Pearl Necklace" 
            data-price="2800"
            data-images='["/assets/img/necklace-a.jpg", "/assets/img/necklace-b.jpg", "/assets/img/necklace-c.jpg"]'
            data-description="A timeless pearl necklace featuring a unique design that combines elegance and modernity. Perfect for special occasions or everyday wear. Crafted with high-quality materials for durability and shine.">
            <div class="product-image">
                <a href="product.php?name=Elegant%20Pearl%20Necklace&price=2800&description=A%20timeless%20pearl%20necklace%20featuring%20a%20unique%20design%20that%20combines%20elegance%20and%20modernity.%20Perfect%20for%20special%20occasions%20or%20everyday%20wear.%20Crafted%20with%20high-quality%20materials%20for%20durability%20and%20shine.&images=/assets/img/necklace-a.jpg,/assets/img/necklace-b.jpg,/assets/img/necklace-c.jpg&category=Necklace">
                    <img alt="Elegant pearl necklace" src="https://storage.googleapis.com/a1aa/image/necklace-example.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="Quick View">
                        <span class="quick-view-tooltip">Quick View</span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold">Elegant Pearl Necklace</h2>
            <p class="price">$2800</p>
        </div>

        <!-- Add more necklace items here following the same structure -->
    </div>

    <!-- Modal -->
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="product-modal">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full relative">
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700" id="close-modal">
                <i class="fas fa-times"></i>
            </button>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
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
