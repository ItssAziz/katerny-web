console.log('[main.js] Script loaded');
document.addEventListener("DOMContentLoaded", function() {
  const quickViewBtns = document.querySelectorAll('.quick-view-btn');
  
    /**
     * TypeWriter Class - Handles the typing animation
     * @param {HTMLElement} txtElement - Element to animate
     * @param {Array} words - Array of words to cycle through
     * @param {Number} wait - Delay between words (ms)
     */
    class TypeWriter {
        constructor(txtElement, words, wait = 2000) {
            // Animation settings
            this.txtElement = txtElement;
            this.words = words;
            this.wait = parseInt(wait, 10);
            
            // Animation state
            this.txt = '';
            this.wordIndex = 0;
            this.isDeleting = false;
            
            // Start animation
            this.type();
        }

        /**
         * Main animation method - handles typing/deleting
         */
        type() {
            // Current word and full text
            const currentWordIndex = this.wordIndex % this.words.length;
            const fullTxt = this.words[currentWordIndex];

            // Check if deleting
            if (this.isDeleting) {
                // Remove character
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                // Add character
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            // Update DOM
            this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

            // Calculate typing speed
            let typeSpeed = 200; // Base speed
            
            if (this.isDeleting) {
                typeSpeed /= 2; // Faster when deleting
            }

            // Check if word is complete
            if (!this.isDeleting && this.txt === fullTxt) {
                typeSpeed = this.wait; // Pause at end
                this.isDeleting = true;
            } 
            // Check if word is deleted
            else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.wordIndex++;
                typeSpeed = 500; // Brief pause before next word
            }

            // Continue animation
            setTimeout(() => this.type(), typeSpeed);
        }
    }

    /**
     * Get random phrase option
     */
    function getRandomPhrase() {
      const phraseData = document.querySelector('.phrase-data').dataset.phrases;
      return JSON.parse(phraseData)[Math.floor(Math.random() * JSON.parse(phraseData).length)];
    }

    /**
     * Initialize the typing animation
     */
    function initTypeAnimation() {
      const txtElement = document.querySelector('.txt-type');
      if (!txtElement) return;
      
      const {prefix, suffix} = getRandomPhrase();
      const words = JSON.parse(txtElement.getAttribute('data-words'));
      const wait = txtElement.getAttribute('data-wait');
      
      // Update static text elements
      document.querySelector('.prefix-text').textContent = prefix;
      document.querySelector('.suffix-text').textContent = suffix;
      
      new TypeWriter(txtElement, words, wait);
    }

    // Initialize when DOM loads
    initTypeAnimation();

    // Client Slider (Single Instance)
    if($("#clientlogo").length) {
        var $clientslider = $("#clientlogo");
        var clients = $clientslider.children().length;
        var clientwidth = clients * 220;
        $clientslider.css("width", clientwidth);
        
        var rotating = true;
        var clientspeed = 1800;
        var seeclients = setInterval(rotateClients, clientspeed);
        
        $(document).on({
            mouseenter: function() { rotating = false; },
            mouseleave: function() { rotating = true; }
        }, '#clientlogo');
        
        function rotateClients() {
            if(rotating != false) {
                var $first = $('#clientlogo li:first');
                $first.animate({ 'margin-left': '-220px' }, 600, function() {
                    $first.remove().css({ 'margin-left': '0px' });
                    $('#clientlogo li:last').after($first);
                });
            }
        }
    }

    // Product sorting and display
    const productItems = document.querySelectorAll('.product-item');
    productItems.forEach(item => {
        const price = item.getAttribute('data-price');
        const priceElement = item.querySelector('.price');
        if (priceElement) {
            const currencySymbol = '<span class="icon-saudi_riyal">&#xea;</span>';
            priceElement.innerHTML = (document.documentElement.dir === 'rtl') ? 
                `${parseFloat(price).toLocaleString()}${currencySymbol}` : 
                `${currencySymbol}${parseFloat(price).toLocaleString()}`;
        }
    });

    // Enhanced sorting and filtering
    function setupProductFiltering() {
        const sortSelect = document.getElementById('sort-options');
        const priceRange = document.getElementById('price-range');
        const priceValue = document.getElementById('price-value');

        if (sortSelect) {
            sortSelect.addEventListener('change', function () {
                sortProducts(this.value);
                updateProductCount();
            });
        }

        if (priceRange) {
            priceRange.addEventListener('input', function () {
                priceValue.innerHTML = '<span class="icon-saudi_riyal">&#xea;</span>' + this.value;
                filterByPrice(parseInt(this.value));
                updateProductCount();
            });
        }
    }

    function sortProducts(sortType) {
        const productGrid = document.querySelector('.product-grid');
        const products = Array.from(document.querySelectorAll('.product-item'));

        products.sort((a, b) => {
            switch (sortType) {
                case 'price-asc':
                    return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                case 'price-desc':
                    return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                case 'name-asc':
                    return a.dataset.name.localeCompare(b.dataset.name);
                case 'name-desc':
                    return b.dataset.name.localeCompare(a.dataset.name);
                default:
                    return 0;
            }
        });

        products.forEach(product => productGrid.appendChild(product));
    }

    function filterByPrice(maxPrice) {
        document.querySelectorAll('.product-item').forEach(product => {
            const price = parseFloat(product.dataset.price);
            if (price <= maxPrice) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    }

    function updateProductCount() {
        const visibleCount = document.querySelectorAll('.product-item:not([style*="display: none"])').length;
        const defaultText = `Showing ${visibleCount} products`;

        const countElem = document.getElementById('product-count');
        if (!countElem) {
            // No product-count element, skip updating
            return;
        }

        if (!window.translations) {
            countElem.textContent = defaultText;
            return;
        }

        // Get the language from the session
        const lang = sessionStorage.getItem('lang') || 'en';
        const formatString = window.translations[lang]?.showing_products_count || defaultText;
        countElem.textContent = formatString.replace('%d', visibleCount);
    }

    setupProductFiltering();
    updateProductCount();

    // Fix image paths
    document.querySelectorAll('img[src^="/katnery/"]').forEach(img => {
        img.src = img.src.replace('/katnery/', '/');
    });

    // Include product gallery functionality
    if (document.querySelector('.product-main-image')) {
        const galleryScript = document.createElement('script');
        galleryScript.src = '/assets/js/product-gallery.js';
        document.head.appendChild(galleryScript);
    }

    // Client Logo Styles
    const style = document.createElement('style');
    style.textContent = `
        #ourclients {
            background: #f8f8f8;
            padding: 40px 0;
            position: relative;
        }
        .logo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .logo-item img {
            width: 100%;
            height: auto;
            max-height: 80px;
            object-fit: contain;
            filter: grayscale(100%) brightness(110%);
            transition: all 0.3s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    `;
    document.head.appendChild(style);

    // Animate client logos
    document.querySelectorAll('.logo-item').forEach((item, index) => {
        item.style.animation = `fadeIn 0.8s ease forwards ${index * 0.2}s`;
    });

    // Mobile Navigation
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    function openMobileNav() {
        mobileMenuToggle.classList.add('active');
        mobileNav.classList.add('active');
        document.body.classList.add('no-scroll');
        // Focus trap: focus first link
        setTimeout(() => {
            const firstLink = mobileNav.querySelector('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
            if (firstLink) firstLink.focus();
        }, 100);
    }
    function closeMobileNav() {
        mobileMenuToggle.classList.remove('active');
        mobileNav.classList.remove('active');
        document.body.classList.remove('no-scroll');
    }
    mobileMenuToggle.addEventListener('click', openMobileNav);
    document.querySelector('.mobile-nav-close').addEventListener('click', closeMobileNav);

    // Backdrop logic
    const mobileNavBackdrop = document.querySelector('.mobile-nav-backdrop');
    if (mobileNavBackdrop) {
        mobileNavBackdrop.addEventListener('click', closeMobileNav);
    }

    // ESC key closes menu
    document.addEventListener('keydown', function(e) {
        if (mobileNav.classList.contains('active')) {
            if (e.key === 'Escape' || e.keyCode === 27) {
                closeMobileNav();
            }
            // Focus trap
            if (e.key === 'Tab') {
                const focusableEls = mobileNav.querySelectorAll('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
                const firstEl = focusableEls[0];
                const lastEl = focusableEls[focusableEls.length - 1];
                if (!e.shiftKey && document.activeElement === lastEl) {
                    e.preventDefault();
                    firstEl.focus();
                } else if (e.shiftKey && document.activeElement === firstEl) {
                    e.preventDefault();
                    lastEl.focus();
                }
            }
        }
    });

    // Animate menu items on open (handled by CSS)


    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileNav.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
            mobileMenuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
    });

    // Quick view handler with click protection
    document.querySelectorAll('.quick-view-btn').forEach(btn => {
        let isProcessing = false;
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const productItem = this.closest('.product-item');
            
            if (productItem) {
                try {
                    openQuickView(productItem);
                } catch (err) {
                    
                }
            } else {
                
            }
        });
    });

    // Quick View functionality
    let slideIndex = 0;
    let slideInterval;

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (slides.length === 0) return;

      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}

      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }

      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }

    // Debug-enhanced modal functions
    function openQuickView(product) {
        
        const modal = document.getElementById('product-modal');
        
        if (!modal) {
            return;
        }
        
        // Force modal visibility
        modal.style.display = 'flex';
        modal.style.opacity = '1';
        modal.style.visibility = 'visible';
        modal.style.zIndex = '10000';
        modal.classList.remove('hidden');
        
        // Add modal backdrop
        const backdrop = document.createElement('div');
        backdrop.className = 'modal-backdrop';
        backdrop.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 9999;
        `;
        document.body.appendChild(backdrop);
        
        // Get clicked thumbnail
        const clickedThumbnail = product.querySelector('img').src;
        
        // Get all product images
        const images = JSON.parse(product.dataset.images);
        
        // Put clicked thumbnail first in array
        const clickedImgName = clickedThumbnail.split('/').pop();
        const clickedIndex = images.findIndex(img => img.includes(clickedImgName));
        if (clickedIndex > 0) {
            [images[0], images[clickedIndex]] = [images[clickedIndex], images[0]]; 
        }
        
        // Get product data
        const category = product.getAttribute('data-category');
        const name = product.getAttribute('data-name');
        const price = product.getAttribute('data-price');
        const description = product.getAttribute('data-description');
        
        // Update modal content
        document.getElementById('modal-category').textContent = category;
        document.getElementById('modal-title').textContent = name;
        document.getElementById('modal-price').innerHTML = `<span class="icon-saudi_riyal">&#xea;</span>${parseFloat(price).toLocaleString()}`;
        document.getElementById('modal-description').textContent = description;

        // Clear and update slideshow
        const slideshow = document.getElementById('modal-slideshow');
        const dotsContainer = document.getElementById('modal-dots');
        slideshow.innerHTML = '';
        dotsContainer.innerHTML = '';

        // Create slides and dots
        images.forEach((image, index) => {
            const slide = document.createElement('div');
            slide.className = 'mySlides';
            slide.style.display = index === 0 ? 'block' : 'none';
            slide.innerHTML = `<img src="${image}" class="w-full rounded-lg mb-4">`;
            slideshow.appendChild(slide);

            const dot = document.createElement('span');
            dot.className = `dot${index === 0 ? ' active' : ''}`;
            dotsContainer.appendChild(dot);
        });

        // Initialize slideshow
        slideIndex = 1;
        showSlides(slideIndex);
        
    }

    function closeModal() {
        
        const modal = document.getElementById('product-modal');
        if (modal) {
            modal.style.display = 'none';
            document.querySelector('.modal-backdrop')?.remove();
        }
    }

    // Add click handlers for prev/next buttons
    document.querySelector('.prev').addEventListener('click', () => plusSlides(-1));
    document.querySelector('.next').addEventListener('click', () => plusSlides(1));

    // Initialize slideshow
    showSlides(slideIndex);
    slideInterval = setInterval(() => plusSlides(1), 3000);

    // Unified modal handling
    function initModals() {
      const modals = document.querySelectorAll('#product-modal');
      modals.forEach(modal => {
        const content = modal.querySelector('div');
        if (content) {
          content.classList.add('bg-white', 'rounded-lg', 'shadow-lg');
        }
      });
    }

    document.addEventListener('DOMContentLoaded', initModals);

    // RTL Modal Support
    function setupRTLModals() {
      if (document.documentElement.dir === 'rtl') {
        const modals = document.querySelectorAll('#product-modal');
        modals.forEach(modal => {
          const content = modal.querySelector('div > div');
          if (content) {
            content.classList.add('flex-row-reverse');
          }
        });
      }
    }

    document.addEventListener('DOMContentLoaded', setupRTLModals);

    // Enhanced modal closing with animations
    // Close modal when clicking outside (more reliable method)
    document.addEventListener('click', function(e) {
      const modal = document.getElementById('product-modal');
      if (modal && !modal.classList.contains('hidden') && 
        !e.target.closest('.product-item') && 
        !e.target.closest('#product-modal > div')) {
        closeModal();
      }
    });

    // Close modal button
    const closeModalButton = document.getElementById('close-modal');
    if (closeModalButton) {
      closeModalButton.addEventListener('click', closeModal);
    }

    // Add consistent close button behavior
    function setupModalClose() {
      const closeButtons = document.querySelectorAll('#close-modal, .modal-close');
      closeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          const modal = btn.closest('[id^="modal-"], .modal');
          if (modal) modal.classList.add('hidden');
        });
      });
    }

    document.addEventListener('DOMContentLoaded', setupModalClose);

    // Header Scroll Effect
    const header = document.querySelector('header');
    if (header) {
        let lastScroll = 0;
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.scrollY || document.documentElement.scrollTop;
            
            if (currentScroll <= 10) {
                header.classList.remove('scrolled');
            } else if (currentScroll > lastScroll && currentScroll > 50) {
                header.classList.add('scrolled');
            } 
            
            lastScroll = currentScroll;
        }, {passive: true});
        
        // Initialize state
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        }
    }

    // Generate product URL
    function getProductUrl(product) {
        const baseUrl = 'https://dreamy-sa.com/YgbnVwE';
        return `${baseUrl}?name=${encodeURIComponent(product.name)}` + 
               `&price=${product.price}` +
               `&desc=${encodeURIComponent(product.description.substring(0, 100))}`;
    }

    // Handle language switch
    function handleLanguageSwitch(lang) {
      document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
      sessionStorage.setItem('lang', lang);
    }

    // Apply saved language preference on load
    window.addEventListener('DOMContentLoaded', () => {
      const savedLang = sessionStorage.getItem('lang');
      if (savedLang) {
        document.documentElement.dir = savedLang === 'ar' ? 'rtl' : 'ltr';
      }
    });

    // Persist RTL mode on navigation
    if (sessionStorage.getItem('lang') === 'ar') {
        document.documentElement.dir = 'rtl';
    }
});