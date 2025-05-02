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
    <?php include('header.php'); ?>

    <div class="products-container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
            <a href="index.php" class="no-underline text-gray-500">Home</a> &nbsp;/&nbsp; Bracelets
        </nav>

        <!-- Page Title -->
        <h1 class="text-5xl font-bold mb-4">Bracelets</h1>

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
                
                <!-- Category Filter -->
                <div class="relative">
                    <select id="filter-options" class="appearance-none bg-transparent border-none text-gray-500">
                        <option value="all">All Categories</option>
                        <option value="Ring">Rings</option>
                        <option value="Bracelet">Bracelets</option>
                        <option value="Earring">Earrings</option>
                        <option value="Necklace">Necklaces</option>
                    </select>
                    <i class="fas fa-chevron-down absolute right-0 top-0 mt-2 mr-2 text-gray-500"></i>
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
                data-category="Bracelet" 
                data-name="Elegant Gold Bracelet" 
                data-price="1800"
                data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
                data-description="A stunning bracelet featuring a unique design that combines elegance and modernity. Perfect for special occasions or everyday wear. This bracelet is crafted with high-quality materials to ensure durability and long-lasting shine.">
                <div class="product-image">
                    <a href="product.php?name=Elegant%20Gold%20Bracelet&price=1800&description=A%20stunning%20bracelet%20featuring%20a%20unique%20design%20that%20combines%20elegance%20and%20modernity.%20Perfect%20for%20special%20occasions%20or%20everyday%20wear.%20This%20bracelet%20is%20crafted%20with%20high-quality%20materials%20to%20ensure%20durability%20and%20long-lasting%20shine.&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Bracelet">
                        <img alt="Elegant gold bracelet with a unique design" src="https://storage.googleapis.com/a1aa/image/1u2VM7easZ3Mci876MOCAfb1oCTOoaDcJfcP6swejncWdR8PB.jpg">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick view.png" alt="Quick View">
                            <span class="quick-view-tooltip">Quick View</span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold">Elegant Gold Bracelet</h2>
                <p class="price">$1800</p>
            </div>

            <!-- Add more bracelet items here following the same structure -->
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

    <script src="../katnery/script.js"></script>
</body>
</html>
