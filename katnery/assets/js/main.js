document.addEventListener("DOMContentLoaded", function() {
    // Typed.js Animation (Single Instance)
    // Typed.js Debug
    console.log('Typed.js element:', document.getElementById('typed-text'));
    if(document.getElementById('typed-text')) {
        console.log('Initializing Typed.js');
        new Typed('#typed-text', {
            strings: ['Ring', 'Necklaces', 'Bracelets', 'Earrings'],
            typeSpeed: 40,
            backSpeed: 50,
            loop: true,
            showCursor: true,
            cursorChar: '|',
            autoInsertCss: true,
            contentType: 'html',
            startDelay: 500,  
            backDelay: 1000,  
            onBegin: (self) => {
                console.log('Animation started');
                // Remove any existing cursors
                document.querySelectorAll('.typed-cursor').forEach(el => el.remove());
            },
            onComplete: () => console.log('Animation complete')
        });
    }

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
            priceElement.textContent = `$${parseFloat(price).toLocaleString()}`;
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
                priceValue.textContent = '$' + this.value;
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
        const countElement = document.getElementById('product-count');
        if (countElement) {
            countElement.textContent = `Showing ${visibleCount} products`;
        }
    }

    setupProductFiltering();
    updateProductCount();

    // Initialize elevateZoom
    $('.zoom').elevateZoom({
        zoomType: "lens",
        lensShape: "round",
        lensSize: 200
    });

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

    mobileMenuToggle.addEventListener('click', () => {
        mobileMenuToggle.classList.toggle('active');
        mobileNav.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileNav.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
            mobileMenuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
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

      // Reinitialize zoom for the current slide
      $('.zoom').elevateZoom({
        zoomType: "lens",
        lensShape: "round",
        lensSize: 200
      });
    }

    function openQuickView(productItem) {
      const modal = document.getElementById('product-modal');
      if (!modal) return;

      // Get product data
      const category = productItem.getAttribute('data-category');
      const name = productItem.getAttribute('data-name');
      const price = productItem.getAttribute('data-price');
      const description = productItem.getAttribute('data-description');
      const clickedImageSrc = productItem.querySelector('.product-image img').src;
      const clickedImageName = clickedImageSrc.split('/').pop();
      
      // Get all variants of the clicked image
      const baseImageName = clickedImageName.replace(/-[a-z]\./, '.');
      const variants = ['a', 'b', 'c', 'd'].map(variant => 
        `/assets/img/${baseImageName.replace('.', `-${variant}.`)}`
      );

      // Update modal content
      document.getElementById('modal-category').textContent = category;
      document.getElementById('modal-title').textContent = name;
      document.getElementById('modal-price').textContent = `$${parseFloat(price).toLocaleString()}`;
      document.getElementById('modal-description').textContent = description;

      // Clear and update slideshow
      const slideshow = document.getElementById('modal-slideshow');
      const dotsContainer = document.getElementById('modal-dots');
      slideshow.innerHTML = '';
      dotsContainer.innerHTML = '';

      // Create slides and dots
      variants.forEach((image, index) => {
        const slide = document.createElement('div');
        slide.className = 'mySlides';
        slide.style.display = index === 0 ? 'block' : 'none';
        slide.innerHTML = `<img src="${image}" class="w-full rounded-lg mb-4 zoom">`;
        slideshow.appendChild(slide);

        const dot = document.createElement('span');
        dot.className = `dot${index === 0 ? ' active' : ''}`;
        dotsContainer.appendChild(dot);
      });

      // Initialize slideshow
      slideIndex = 1;
      showSlides(slideIndex);
      
      // Add transition styles to modal
      modal.style.transition = 'opacity 0.3s ease-in-out';
      modal.querySelector('div').style.transition = 'transform 0.3s ease-in-out';
      modal.querySelector('div').style.transform = 'translateY(-20px)';
      
      // Reset animation state
      modal.style.opacity = '0';
      modal.querySelector('div').style.transform = 'translateY(-20px)';
      modal.classList.remove('hidden');
      
      // Animate in
      setTimeout(() => {
        modal.style.opacity = '1';
        modal.querySelector('div').style.transform = 'translateY(0)';
      }, 10);
    }

    // Add click handlers for prev/next buttons
    document.querySelector('.prev').addEventListener('click', () => plusSlides(-1));
    document.querySelector('.next').addEventListener('click', () => plusSlides(1));

    // Initialize slideshow
    showSlides(slideIndex);
    slideInterval = setInterval(() => plusSlides(1), 3000);

    // Quick view modal handlers
    document.querySelectorAll('.quick-view-btn').forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        const productItem = this.closest('.product-item');
        openQuickView(productItem);
      });
    });

    // Enhanced modal closing with animations
    function closeModal() {
      const modal = document.getElementById('product-modal');
      modal.style.opacity = '0';
      setTimeout(() => {
        modal.classList.add('hidden');
        modal.style.opacity = '1';
      }, 300);
    }

    // Close modal when clicking outside (more reliable method)
    document.addEventListener('click', function(e) {
      const modal = document.getElementById('product-modal');
      if (!modal.classList.contains('hidden') && 
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

    // Header Scroll Effect
    window.addEventListener('scroll', function() {
      const header = document.querySelector('header');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
});