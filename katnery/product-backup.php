<?php include('header.php'); ?>

<?php
$name = $_GET['name'];
$price = $_GET['price'];
$description = $_GET['description'];
$images = explode(',', $_GET['images']);
$category = isset($_GET['category']) ? $_GET['category'] : 'Uncategorized';

// Fetch related products from the same category
$relatedProducts = [
    [
        'name' => 'Elegant Gold Ring',
        'price' => 1500,
        'description' => 'A stunning ring featuring a unique design that combines elegance and modernity. Perfect for special occasions or everyday wear. This ring is crafted with high-quality materials to ensure durability and long-lasting shine. Its intricate design and attention to detail make it a standout piece in any jewelry collection. Whether you\'re dressing up for a formal event or adding a touch of sophistication to your everyday look, this ring is the perfect accessory.',
        'images' => ['../katnery/assets/img/bracelet-d.jpg', '../katnery/assets/img/bracelet-01-a.jpg', '../katnery/assets/img/bracelet-01-b.jpg'],
        'category' => 'Ring'
    ],
    [
        'name' => 'Classic Bracelet',
        'price' => 200,
        'description' => 'A classic bracelet that adds a touch of elegance to any outfit. Perfect for everyday wear or special occasions. This bracelet is crafted with high-quality materials to ensure durability and long-lasting shine. Its timeless design makes it a versatile accessory that can be worn alone or stacked with other bracelets. Whether you\'re dressing up for a formal event or adding a touch of sophistication to your everyday look, this bracelet is the perfect accessory.',
        'images' => ['../katnery/assets/img/bracelet-01-a.jpg', '../katnery/assets/img/bracelet-01-b.jpg', '../katnery/assets/img/bracelet-01-c.jpg'],
        'category' => 'Bracelet'
    ],
    [
        'name' => 'Elegant Necklace',
        'price' => 300,
        'description' => 'An elegant necklace that adds a touch of sophistication to any outfit. Perfect for special occasions or everyday wear. This necklace is crafted with high-quality materials to ensure durability and long-lasting shine. Its intricate design and attention to detail make it a standout piece in any jewelry collection. Whether you\'re dressing up for a formal event or adding a touch of elegance to your everyday look, this necklace is the perfect accessory.',
        'images' => ['../katnery/assets/img/bracelet-01-b.jpg', '../katnery/assets/img/bracelet-01-c.jpg', '../katnery/assets/img/bracelet-d.jpg'],
        'category' => 'Necklace'
    ],
    [
        'name' => 'Stylish Earrings',
        'price' => 150,
        'description' => 'Stylish earrings that add a touch of elegance to any outfit. Perfect for special occasions or everyday wear. These earrings are crafted with high-quality materials to ensure durability and long-lasting shine. Their intricate design and attention to detail make them a standout piece in any jewelry collection. Whether you\'re dressing up for a formal event or adding a touch of elegance to your everyday look, these earrings are the perfect accessory.',
        'images' => ['../katnery/assets/img/bracelet-01-c.jpg', '../katnery/assets/img/bracelet-d.jpg', '../katnery/assets/img/bracelet-01-a.jpg'],
        'category' => 'Earrings'
    ]
];

// Filter related products by category and shuffle them
$relatedProducts = array_filter($relatedProducts, function($product) use ($category) {
    return $product['category'] === $category;
});
shuffle($relatedProducts);
$relatedProducts = array_slice($relatedProducts, 0, 4);
?>

<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
        <a href="http://localhost/katnery/" class="no-underline text-gray-500">Home</a> &nbsp;/&nbsp; 
        <a href="http://localhost/katnery/<?php echo strtolower($category); ?>s.php" class="no-underline text-gray-500"><?php echo htmlspecialchars($category); ?></a> &nbsp;/&nbsp; 
        <span class="text-gray-700"><?php echo htmlspecialchars($name); ?></span>
    </nav>

    <!-- Product Details -->
    <div class="product-details grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="product-gallery">
            <div class="product-images flex">
                <div class="thumbnails flex flex-col mr-4">
                    <?php foreach ($images as $index => $image): ?>
                        <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($name); ?>" class="thumbnail mb-2 cursor-pointer" onclick="currentSlide(<?php echo $index + 1; ?>)">
                    <?php endforeach; ?>
                </div>
                <div class="slideshow-container relative w-full">
                    <?php foreach ($images as $index => $image): ?>
                        <div class="mySlides">
                            <img id="main-image-<?php echo $index; ?>" src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($name); ?>" class="w-full rounded-lg mb-4 zoom">
                        </div>
                    <?php endforeach; ?>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
        </div>
        <div class="product-info">
            <h1 class="text-4xl font-bold mb-4"><?php echo htmlspecialchars($name); ?></h1>
            <p class="text-2xl font-bold text-brown-600 mb-4 price">$<?php echo htmlspecialchars($price); ?></p>
            <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($description); ?></p>
        </div>
    </div>

    <!-- Related Products -->
    <div class="related-products mt-12">
        <h2 class="text-3xl font-bold mb-6">Related Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <?php foreach ($relatedProducts as $product): ?>
                <div class="product-item text-center" 
                    data-category="<?php echo htmlspecialchars($product['category']); ?>" 
                    data-name="<?php echo htmlspecialchars($product['name']); ?>" 
                    data-price="<?php echo htmlspecialchars($product['price']); ?>"
                    data-images='<?php echo json_encode($product['images']); ?>'
                    data-description="<?php echo htmlspecialchars($product['description']); ?>">
                    <div class="product-image">
                        <a href="product.php?name=<?php echo urlencode($product['name']); ?>&price=<?php echo urlencode($product['price']); ?>&description=<?php echo urlencode($product['description']); ?>&images=<?php echo urlencode(implode(',', $product['images'])); ?>&category=<?php echo urlencode($product['category']); ?>">
                            <img alt="<?php echo htmlspecialchars($product['name']); ?>" src="<?php echo htmlspecialchars($product['images'][0]); ?>" width="310" height="387.5">
                        </a>
                        <div class="overlay">
                            <a href="#" class="eye-icon quick-view-btn">
                                <img src="../katnery/assets/img/quick view.png" alt="Quick View">
                                <span class="quick-view-tooltip">Quick View</span>
                            </a>
                        </div>
                    </div>
                    <h2 class="text-xl font-semibold"><?php echo htmlspecialchars($product['name']); ?></h2>
                    <p class="price">$<?php echo htmlspecialchars($product['price']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
