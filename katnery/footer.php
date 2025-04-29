<footer class="site-footer">
    <div class="footer-content">
        <!-- Footer Logo -->
        <div class="footer-logo">
            <img src="assets/img/katnery logo.png" alt="Katnery Jewelry Brand Logo">
        </div>

        <!-- About Us Section -->
        <div class="footer-about">
            <h3>About Us</h3>
            <ul aria-label="Footer navigation links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <!-- Shop Section -->
        <div class="footer-shop">
            <h3>Shop</h3>
            <ul>
                <li><a href="rings.php">Rings</a></li>
                <li><a href="bracelets.php">Bracelets</a></li>
                <li><a href="earrings.php">Earrings</a></li>
                <li><a href="necklaces.php">Necklaces</a></li>
            </ul>
        </div>

        <!-- Contact Us Section -->
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <p> AL-AZIZIYA , MAKKAH, NY 10160</p>
            <p><a href="mailto:contact@info.com">contact@info.com</a></p>
            <p><a href="tel:940508643">+251-940508643</a></p>
        </div>
    
    </div>
    <div class="copyright">
    <div class="footer-copyright">
        <p> &copy; 2024 <strong>Katnery</strong>. All rights reserved.
    </p>
    </div>
    </div>
</footer>

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
                <a href="#" class="text-sm text-gray-500 hover:underline" id="modal-category"></a>
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

<script src="assets/js/main.js"></script>
<script src="https://websitedemos.net/blingg-jewelry-store-04/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21-wc.9.3.1" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js" defer></script>