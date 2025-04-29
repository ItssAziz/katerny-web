// Product Image Gallery
class ProductGallery {
  constructor() {
    this.mainImage = document.querySelector('.product-main-image');
    this.thumbnails = document.querySelectorAll('.product-thumbnail');
    this.init();
  }

  init() {
    // Thumbnail click handler
    this.thumbnails.forEach(thumb => {
      thumb.addEventListener('click', (e) => {
        e.preventDefault();
        this.setMainImage(thumb.dataset.image);
        this.updateActiveThumb(thumb);
      });
    });

    // Pinch-to-zoom setup for mobile
    if ('ontouchstart' in window) {
      this.setupPinchZoom();
    }
  }

  setMainImage(src) {
    this.mainImage.src = src;
    // Re-init zoom plugin if exists
    if (typeof $ !== 'undefined' && $.fn.elevateZoom) {
      $(this.mainImage).data('zoom-image', src).elevateZoom();
    }
  }

  updateActiveThumb(activeThumb) {
    this.thumbnails.forEach(thumb => thumb.classList.remove('active'));
    activeThumb.classList.add('active');
  }

  setupPinchZoom() {
    // Mobile zoom implementation
    let initialDistance = null;
    let initialScale = 1;

    this.mainImage.addEventListener('touchstart', (e) => {
      if (e.touches.length === 2) {
        initialDistance = Math.hypot(
          e.touches[0].clientX - e.touches[1].clientX,
          e.touches[0].clientY - e.touches[1].clientY
        );
      }
    });

    this.mainImage.addEventListener('touchmove', (e) => {
      if (e.touches.length === 2) {
        e.preventDefault();
        const currentDistance = Math.hypot(
          e.touches[0].clientX - e.touches[1].clientX,
          e.touches[0].clientY - e.touches[1].clientY
        );
        
        if (initialDistance) {
          const scale = currentDistance / initialDistance * initialScale;
          this.mainImage.style.transform = `scale(${scale})`;
        }
      }
    });

    this.mainImage.addEventListener('touchend', () => {
      initialDistance = null;
      initialScale = parseFloat(
        window.getComputedStyle(this.mainImage).transform.split(',')[3] || 1
      );
    });
  }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('.product-main-image')) {
    new ProductGallery();
  }
});
