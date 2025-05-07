<?php
/**
 * Main Index File - Katnery Jewelry Website
 * 
 * Handles:
 * - Language selection and translations
 * - Main page content structure
 * - Product display sections
 */

// 1. Include header and setup translations
include('header.php');
?>

<!-- 2. Main CSS -->
<link rel="stylesheet" href="/css/style.css">

<!-- 3. Hero Section -->
<section class="cover header-content">
    <div class="cover-content">
        <!-- Phrase data for JavaScript -->
        <div class="phrase-data" data-phrases='<?= json_encode($translations["phrase_options"]) ?>'></div>
        
        <!-- Animated Heading -->
        <h1>
            <span class="prefix-text"><?= $translations['new'] ?></span>
            <span class="txt-type" 
                  data-wait="3000" 
                  data-words='["<?= $translations['rings'] ?>", 
                               "<?= $translations['necklaces'] ?>", 
                               "<?= $translations['bracelets'] ?>", 
                               "<?= $translations['earrings'] ?>"]'>
            </span>
            <span class="suffix-text"><?= $translations['sensation'] ?></span>
        </h1>
        
        <!-- Subheading -->
        <p class="static-text mb-8"><?= $translations['exclusive_designs'] ?></p>
    </div>
</section>

<!-- 4. Trending Products Section -->
<section class="trending-products">
  <h3 class="section-title small"><?= $translations['popular_products'] ?></h3>
  <h2 class="section-title big"><?= $translations['trending_now'] ?></h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-0">
    <!-- Standardized Product Item Structure -->
     <!-- Product Items -->
     <div class="product-item text-center" 
            data-category="Ring" 
            data-name="<?= $translations['elegant_gold_ring'] ?>" 
            data-price="1500"
            data-images='["/assets/img/ring-01-a.jpg", "/assets/img/ring-01-b.jpg", "/assets/img/ring-01-c.jpg", "/assets/img/ring-01-d.jpg"]'
            data-description="<?= $translations['elegant_gold_ring_desc'] ?>">
            <div class="product-image">
                <img alt="<?= $translations['elegant_gold_ring'] ?>" src="/assets/img/ring-01-a.jpg">
                <div class="overlay">
                    <a href="#" class="eye-icon quick-view-btn">
                        <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                        <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
                    </a>
                </div>
            </div>
            <h2 class="text-xl font-semibold"><?= $translations['elegant_gold_ring'] ?></h2>
            <p class="price"><span class="icon-saudi_riyal">&#xea;</span>1500</p>
        </div>
    
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Bracelet"
         data-name="<?= $translations['bracelet_2'] ?>"
         data-price="180"
         data-images='["/assets/img/bracelet-01-b.jpg", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg"]'
         data-description="<?= $translations['bracelet_2_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['bracelet_2'] ?>" src="/assets/img/bracelet-01-b.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['bracelet_2'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>180</p>
    </div>
    
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Necklace"
         data-name="<?= $translations['necklace'] ?>"
         data-price="250"
         data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
         data-description="<?= $translations['necklace_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['necklace'] ?>" src="/assets/img/necklace-01-a.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['necklace'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>250</p>
    </div>
    
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Ring"
         data-name="<?= $translations['ring'] ?>"
         data-price="300"
         data-images='["/assets/img/cover ring.jpg", "/assets/img/kat ring 2.jpg", "/assets/img/cover 2.jpg", "/assets/img/cover 5.jpg"]'
         data-description="<?= $translations['ring_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['ring'] ?>" src="/assets/img/cover ring.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['ring'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>300</p>
    </div>
  </div>
</section>

<!-- 5. Best Selling Products Section -->
<section class="best-selling">
  <h3 class="section-title small"><?= $translations['shop'] ?></h3>
  <h2 class="section-title big"><?= $translations['best_selling'] ?></h2>
  <div class="product-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Bracelet"
         data-name="<?= $translations['bracelet'] ?>"
         data-price="225"
         data-images='["/assets/img/bracelet-01-a.jpg", "/assets/img/bracelet-01-b.jpg", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-d.jpg"]'
         data-description="<?= $translations['bracelet_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['bracelet'] ?>" src="/assets/img/bracelet-01-a.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['bracelet'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>225</p>
    </div>
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Bracelet"
         data-name="<?= $translations['bracelet_2'] ?>"
         data-price="180"
         data-images='["/assets/img/bracelet-01-b.jpg", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-d.jpg", "/assets/img/bracelet-01-a.jpg"]'
         data-description="<?= $translations['bracelet_2_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['bracelet_2'] ?>" src="/assets/img/bracelet-01-b.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['bracelet_2'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>180</p>
    </div>
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Necklace"
         data-name="<?= $translations['necklace'] ?>"
         data-price="250"
         data-images='["/assets/img/necklace-01-a.jpg", "/assets/img/necklace-01-b.jpg", "/assets/img/necklace-01-c.jpg", "/assets/img/necklace-01-d.jpg"]'
         data-description="<?= $translations['necklace_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['necklace'] ?>" src="/assets/img/necklace-01-a.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['necklace'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>250</p>
    </div>
    <!-- Standardized Product Item Structure -->
    <div class="product-item text-center" 
         data-category="Ring"
         data-name="<?= $translations['ring'] ?>"
         data-price="300"
         data-images='["/assets/img/cover ring.jpg", "/assets/img/kat ring 2.jpg", "/assets/img/cover 2.jpg", "/assets/img/cover 5.jpg"]'
         data-description="<?= $translations['ring_description'] ?>">
      <div class="product-image">
        <img alt="<?= $translations['ring'] ?>" src="/assets/img/cover ring.jpg">
        <div class="overlay">
          <a href="#" class="eye-icon quick-view-btn">
            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?></span>
          </a>
        </div>
      </div>
      <h2 class="text-xl font-semibold"><?= $translations['ring'] ?></h2>
      <p class="price"><span class="icon-saudi_riyal">&#xea;</span>300</p>
    </div>
  </div>
</section>

<!-- 6. Always On Trend Section -->
<section class="always-on-trend">
  <div class="container">
    <div class="content">
      <div class="text-content">
        <h2 class="section-title"><?= $translations['be_always_on_the_trend'] ?></h2>
        <p class="section-description"><?= $translations['stay_ahead_with_the_latest_styles_and_trends'] ?></p>
      </div>
      <div class="image-content">
        <img src="/assets/img/ring pic.webp" alt="Ring Image 1" class="image-first">
        <img src="/assets/img/ring pic 1.webp" alt="Ring Image 2" class="image-second">
      </div>
    </div>
  </div>
</section>

<!-- 7. Why Choose Us Section -->
<section class="why-choose-us">
  <div class="container">
  <h3 class="section-title small"><?= $translations['best_in_business'] ?></h3>
    <h2 class="section-title big"><?= $translations['why_choose_us'] ?></h2>
    <div class="reasons">
      <div class="reason-item">
        <h3 class="reason-title"><?= $translations['premium_quality'] ?></h3>
        <p class="reason-description"><?= $translations['our_jewelry_is_crafted_with_the_finest_materials'] ?></p>
      </div>
      <div class="reason-item">
        <h3 class="reason-title"><?= $translations['exclusive_designs'] ?></h3>
        <p class="reason-description"><?= $translations['we_offer_unique_stylish_pieces'] ?></p>
      </div>
      <div class="reason-item">
        <h3 class="reason-title"><?= $translations['customer_satisfaction'] ?></h3>
        <p class="reason-description"><?= $translations['your_satisfaction_is_our_priority'] ?></p>
      </div>
    </div>
  </div>
</section>

<!-- 8. About Us Section -->
<section class="about-us">
    <h2 class="section-title big"><?= $translations['about_us'] ?></h2>
    <p class="about-description"><?= $translations['welcome_to_katnery'] ?></p>
</section>

<!-- 9. Contact Us Section -->
<section class="contact-us">
    <h2 class="section-title big"><?= $translations['contact_us'] ?></h2>
    <p class="contact-description"><?= $translations['we_would_love_to_hear_from_you'] ?></p>
    <form class="contact-form">
        <input type="text" placeholder="<?= $translations['your_name'] ?>" required>
        <input type="email" placeholder="<?= $translations['your_email'] ?>" required>
        <textarea placeholder="<?= $translations['your_message'] ?>" required></textarea>
        <div class="form-buttons">
          <button type="submit"><?= $translations['send_message'] ?></button>
          <button type="button" onclick="window.location.href='https://t.me/yourchannel'" class="submit-btn">
            <?= $translations['via_telegram'] ?>
          </button>
        </div>
    </form>
</section>

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

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">

<script src="/assets/js/main.js"></script>

 <?php include('footer.php'); ?>