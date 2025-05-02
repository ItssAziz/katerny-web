<?php include('header.php'); ?>

<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
        <a href="index.php" class="no-underline text-gray-500">Home</a> &nbsp;/&nbsp; Rings
    </nav>

    <!-- Page Title -->
    <h1 class="text-5xl font-bold mb-4">Rings</h1>

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
            data-category="Ring" 
            data-name="Elegant Gold Ring" 
            data-price="1500"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="A stunning ring featuring a unique design that combines elegance and modernity. Perfect for special occasions or everyday wear. This ring is crafted with high-quality materials to ensure durability and long-lasting shine. Its intricate design and attention to detail make it a standout piece in any jewelry collection. Whether you're dressing up for a formal event or adding a touch of sophistication to your everyday look, this ring is the perfect accessory.">
            <div class="product-image">
                <a href="product.php?name=Elegant%20Gold%20Ring&price=1500&description=A%20stunning%20ring%20featuring%20a%20unique%20design%20that%20combines%20elegance%20and%20modernity.%20Perfect%20for%20special%20occasions%20or%20everyday%20wear.%20This%20ring%20is%20crafted%20with%20high-quality%20materials%20to%20ensure%20durability%20and%20long-lasting%20shine.%20Its%20intricate%20design%20and%20attention%20to%20detail%20make%20it%20a%20standout%20piece%20in%20any%20jewelry%20collection.%20Whether%20you're%20dressing%20up%20for%20a%20formal%20event%20or%20adding%20a%20touch%20of%20sophistication%20to%20your%20everyday%20look,%20this%20ring%20is%20the%20perfect%20accessory.&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="Elegant gold ring with a unique design" src="https://storage.googleapis.com/a1aa/image/1u2VM7easZ3Mci876MOCAfb1oCTOoaDcJfcP6swejncWdR8PB.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="Quick View">
                        <span class="quick-view-tooltip">Quick View</span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold">Elegant Gold Ring</h2>
            <p class="price">$1500</p>
        </div>

        <div class="product-item text-center" 
            data-category="Ring" 
            data-name="Sparkling Gemstone Ring" 
            data-price="2200"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="An exquisite ring adorned with sparkling gemstones, designed to make a statement. Ideal for engagements or anniversaries. This ring features a brilliant array of gemstones that catch the light beautifully, creating a dazzling effect. The band is crafted from high-quality materials, ensuring both comfort and durability. Whether you're proposing to your significant other or celebrating a special milestone, this ring is the perfect symbol of your love and commitment.">
            <div class="product-image">
                <a href="product.php?name=Sparkling%20Gemstone%20Ring&price=2200&description=An%20exquisite%20ring%20adorned%20with%20sparkling%20gemstones,%20designed%20to%20make%20a%20statement.%20Ideal%20for%20engagements%20or%20anniversaries.%20This%20ring%20features%20a%20brilliant%20array%20of%20gemstones%20that%20catch%20the%20light%20beautifully,%20creating%20a%20dazzling%20effect.%20The%20band%20is%20crafted%20from%20high-quality%20materials,%20ensuring%20both%20comfort%20and%20durability.%20Whether%20you're%20proposing%20to%20your%20significant%20other%20or%20celebrating%20a%20special%20milestone,%20this%20ring%20is%20the%20perfect%20symbol%20of%20your%20love%20and%20commitment.&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="Exquisite ring adorned with sparkling gemstones" src="https://storage.googleapis.com/a1aa/image/8m5DiFZmEQqzClS9hpeP8m40DfQe0gdVEfWOvhDe1JBI6i4fE.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="Quick View">
                        <span class="quick-view-tooltip">Quick View</span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold">Sparkling Gemstone Ring</h2>
            <p class="price">$2200</p>
        </div>

        <div class="product-item text-center" 
            data-category="Ring" 
            data-name="Classic Timeless Ring" 
            data-price="1300"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="A classic ring with a timeless design, perfect for those who appreciate simplicity and elegance. Suitable for any occasion. This ring features a sleek and understated design that never goes out of style. Crafted from high-quality materials, it offers both durability and comfort. Whether you're wearing it as a daily accessory or for a special event, this ring adds a touch of sophistication to any outfit. Its versatile design makes it a great gift for loved ones or a treat for yourself.">
            <div class="product-image">
                <a href="product.php?name=Classic%20Timeless%20Ring&price=1300&description=A%20classic%20ring%20with%20a%20timeless%20design,%20perfect%20for%20those%20who%20appreciate%20simplicity%20and%20elegance.%20Suitable%20for%20any%20occasion.%20This%20ring%20features%20a%20sleek%20and%20understated%20design%20that%20never%20goes%20out%20of%20style.%20Crafted%20from%20high-quality%20materials,%20it%20offers%20both%20durability%20and%20comfort.%20Whether%20you're%20wearing%20it%20as%20a%20daily%20accessory%20or%20for%20a%20special%20event,%20this%20ring%20adds%20a%20touch%20of%20sophistication%20to%20any%20outfit.%20Its%20versatile%20design%20makes%20it%20a%20great%20gift%20for%20loved%20ones%20or%20a%20treat%20for%20yourself.&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="Classic ring with a timeless design" src="https://storage.googleapis.com/a1aa/image/ZJAGFIG83u6uPlTouOCDyETqUOMcd2ChYEQPfiHM7CIqLifTA.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="Quick View">
                        <span class="quick-view-tooltip">Quick View</span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold">Classic Timeless Ring</h2>
            <p class="price">$1300</p>
        </div>

        <div class="product-item text-center" 
            data-category="Ring" 
            data-name="Delicate Charm Ring" 
            data-price="750"
            data-images='["/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg"]'
            data-description="A delicate ring that adds a touch of charm to any outfit. Perfect for layering or wearing alone for a subtle look. This ring features a minimalist design that is both elegant and versatile. Crafted from high-quality materials, it offers durability and comfort. Whether you're wearing it as a daily accessory or for a special occasion, this ring adds a touch of sophistication to any outfit. Its delicate design makes it a great gift for loved ones or a treat for yourself.">
            <div class="product-image">
                <a href="product.php?name=Delicate%20Charm%20Ring&price=750&description=A%20delicate%20ring%20that%20adds%20a%20touch%20of%20charm%20to%20any%20outfit.%20Perfect%20for%20layering%20or%20wearing%20alone%20for%20a%20subtle%20look.%20This%20ring%20features%20a%20minimalist%20design%20that%20is%20both%20elegant%20and%20versatile.%20Crafted%20from%20high-quality%20materials,%20it%20offers%20durability%20and%20comfort.%20Whether%20you're%20wearing%20it%20as%20a%20daily%20accessory%20or%20for%20a%20special%20occasion,%20this%20ring%20adds%20a%20touch%20of%20sophistication%20to%20any%20outfit.%20Its%20delicate%20design%20makes%20it%20a%20great%20gift%20for%20loved%20ones%20or%20a%20treat%20for%20yourself.&images=/assets/img/bracelet-d.jpg,/assets/img/bracelet-01-a.jpg,/assets/img/bracelet-01-b.jpg&category=Ring">
                    <img alt="Delicate ring that adds charm to any outfit" src="https://storage.googleapis.com/a1aa/image/BDo8fmKe6drqEkGElxsncJPf2bogB3rhfrMNFU8MwyzKdR8PB.jpg">
                </a>
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick view.png" alt="Quick View">
                        <span class="quick-view-tooltip">Quick View</span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold">Delicate Charm Ring</h2>
            <p class="price">$750</p>
        </div>
    </div>

    <!-- Modal -->
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="product-modal">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full relative">
            <button class="absolute top-4 right-4 text-gray-600 hover:text-gray-900" id="close-modal">
                <i class="fas fa-times"></i>
            </button>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <div class="relative">
                        <span class="absolute top-2 left-2 bg-white text-gray-800 text-xs font-semibold px-2 py-1 rounded-full shadow">Sale!</span>
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
                        <span class="text-2xl font-bold text-brown-600 ml-2" id="modal-price"></span>
                        <span class="text-sm text-gray-500 ml-2">&amp; Free Shipping</span>
                    </div>
                    <p class="text-gray-700 mt-4" id="modal-description"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>