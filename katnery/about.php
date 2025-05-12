<?php include('header.php'); ?>

<!-- Modern Hero Section -->
<section class="hero-section relative h-96 flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/kat list.jpg');">
    <div class="text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4"><?= $translations['about_title'] ?></h1>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-8">
        <a href="#content" class="text-white animate-bounce">
            <i class="fas fa-chevron-down text-3xl"></i>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-8">
        <p class="text-xl text-white max-w-2xl mx-auto"><?= $translations['about_hero'] ?></p>
    </div>
</section>

<!-- Main Content -->
<main id="content" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Intro Section -->
        <section class="mb-20 text-center">
            <h2 class="text-4xl font-bold mb-6 relative pb-4">
                <span class="relative">
                    <?= $translations['our_heritage'] ?>
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gold-500"></span>
                </span>
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                <?= $translations['heritage_description'] ?>
            </p>
        </section>

        <!-- Story Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-center">
            <div class="overflow-hidden rounded-xl shadow-xl">
                <img src="assets/img/cover ring.jpg" alt="<?= $translations['workshop_image'] ?>" class="w-full h-auto transition-transform duration-500 hover:scale-105">
            </div>
            <div>
                <h3 class="text-3xl font-bold mb-4 text-gold-600"><?= $translations['our_story'] ?></h3>
                <p class="text-lg text-gray-700 mb-6">
                    <?= $translations['story_description'] ?>
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-gold-500 mr-3 w-5 text-center">✓</span>
                        <span><?= $translations['established_point'] ?></span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gold-500 mr-3 w-5 text-center">✓</span>
                        <span><?= $translations['designs_point'] ?></span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gold-500 mr-3 w-5 text-center">✓</span>
                        <span><?= $translations['materials_point'] ?></span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Values Section -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <img src="assets/img/bracelet-01-a.jpg" alt="<?= $translations['craftsmanship_image'] ?>" class="w-full h-48 object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-bold mb-3"><?= $translations['craftsmanship'] ?></h3>
                <p class="text-gray-600"><?= $translations['craftsmanship_desc'] ?></p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <img src="assets/img/ring pic 1.webp" alt="<?= $translations['sustainability_image'] ?>" class="w-full h-48 object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-bold mb-3"><?= $translations['sustainability'] ?></h3>
                <p class="text-gray-600"><?= $translations['sustainability_desc'] ?></p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <img src="assets/img/kat ring 2.jpg" alt="<?= $translations['customer_care_image'] ?>" class="w-full h-48 object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-bold mb-3"><?= $translations['customer_care'] ?></h3>
                <p class="text-gray-600"><?= $translations['customer_care_desc'] ?></p>
            </div>
        </section>
    </div>
</main>

<?php include('footer.php'); ?>