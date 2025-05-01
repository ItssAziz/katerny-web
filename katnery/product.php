<?php include('header.php'); ?>

<main class="product-page">
  <div class="product-container">
    <!-- Gallery Section -->
    <div class="product-gallery">
      <div class="main-image">
        <img id="mainImage" src="<?= $_GET['images'] ? explode(',', $_GET['images'])[0] : '' ?>" alt="<?= $_GET['name'] ?>">
        <div class="gallery-arrow prev" onclick="navigateGallery(-1)"><i class="fas fa-chevron-left"></i></div>
        <div class="gallery-arrow next" onclick="navigateGallery(1)"><i class="fas fa-chevron-right"></i></div>
      </div>
      <div class="thumbnail-container">
        <?php if(isset($_GET['images'])): ?>
          <?php foreach(explode(',', $_GET['images']) as $index => $image): ?>
            <div class="thumbnail" onclick="changeImage('<?= $image ?>')">
              <img src="<?= $image ?>" alt="Thumbnail <?= $index + 1 ?>">
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <!-- Product Info Section -->
    <div class="product-info">
      <h1><?= $_GET['name'] ?? 'Product' ?></h1>
      <p class="price">$<?= $_GET['price'] ?? '0' ?></p>
      <p class="description"><?= $_GET['description'] ?? '' ?></p>
      
      <div class="product-actions">
        <a href="https://t.me/yourtelegram" class="order-button" target="_blank">
          <i class="fab fa-telegram"></i> Order Now
        </a>
      </div>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>

<script>
function changeImage(src) {
  document.getElementById('mainImage').src = src;
}

function navigateGallery(direction) {
  const images = <?= json_encode(isset($_GET['images']) ? explode(',', $_GET['images']) : []) ?>;
  const currentSrc = document.getElementById('mainImage').src.split('/').pop();
  const currentIndex = images.findIndex(img => img.includes(currentSrc));
  
  let newIndex = currentIndex + direction;
  if(newIndex < 0) newIndex = images.length - 1;
  if(newIndex >= images.length) newIndex = 0;
  
  document.getElementById('mainImage').src = images[newIndex];
}

const mainImage = document.getElementById('mainImage');
let isZoomed = false;

mainImage.addEventListener('click', function(e) {
  isZoomed = !isZoomed;
  
  if(isZoomed) {
    this.style.transformOrigin = 
      ((e.pageX - this.offsetLeft) / this.offsetWidth * 100) + '% ' + 
      ((e.pageY - this.offsetTop) / this.offsetHeight * 100) + '%';
    this.classList.add('zoomed');
  } else {
    this.classList.remove('zoomed');
  }
});
</script>
