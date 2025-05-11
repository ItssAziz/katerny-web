<?php 
include('header.php'); 
// Initialize language
$lang = include('lang/' . ($_SESSION['lang'] ?? 'en') . '.php');
?>

<main class="product-page">
  <div class="product-container">
    <!-- Gallery Section -->
    <div class="product-gallery">
  <div class="main-image">
    <img id="mainImage" src="<?= $_GET['images'] ? explode(',', $_GET['images'])[0] : '' ?>" alt="<?= $_GET['name'] ?>">
    <div class="gallery-arrow prev" onclick="navigateGallery(-1)"><i class="fas fa-chevron-left"></i></div>
    <div class="gallery-arrow next" onclick="navigateGallery(1)"><i class="fas fa-chevron-right"></i></div>
  </div>
  <div class="thumbnail-row">
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
  <h1 class="product-title"><?= $_GET['name'] ?? 'Product' ?></h1>
  <p class="product-price"><span class="icon-saudi_riyal">&#xea;</span><?= number_format($_GET['price'] ?? '0', 2) ?></p>
  <div class="availability"><?= $lang['available'] ?? 'Available' ?> <span class="icon-check">&#10003;</span></div>
  <p class="product-description"><?= $_GET['description'] ?? '' ?></p>
  <div class="product-actions">
    <button class="add-to-cart" onclick="window.open('https://t.me/yourtelegram', '_blank')">
      <i class="fab fa-telegram" style="font-size: 1.2em;"></i> <?= $lang['order_via_telegram'] ?? 'Order via Telegram' ?>
    </button>
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
  const currentSrc = document.getElementById('mainImage').src;
  const currentPath = new URL(currentSrc).pathname.split('/').pop();
  const currentIndex = images.findIndex(img => {
    const imgPath = new URL(img, window.location.origin).pathname.split('/').pop();
    return imgPath === currentPath;
  });
  
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
