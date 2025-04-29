<?php include('header.php'); ?>

<!-- Modern Hero Section -->
<section class="hero-section relative h-96 flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/kat list.jpg');">
    <div class="text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">About Katnery</h1>
        <p class="text-xl text-white max-w-2xl mx-auto">Crafting timeless jewelry with passion and precision</p>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-8">
        <a href="#content" class="text-white animate-bounce">
            <i class="fas fa-chevron-down text-3xl"></i>
        </a>
    </div>
</section>

<!-- Main Content -->
<main id="content" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Intro Section -->
        <section class="mb-20 text-center">
            <h2 class="text-4xl font-bold mb-6 relative pb-4">
                <span class="relative">
                    Our Heritage
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gold-500"></span>
                </span>
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Founded in Makkah with a vision to blend traditional craftsmanship with contemporary design, Katnery has become synonymous with quality and elegance in fine jewelry.
            </p>
        </section>

        <!-- Story Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-center">
            <div class="overflow-hidden rounded-xl shadow-xl">
                <img src="assets/img/cover ring.jpg" alt="Our Workshop" class="w-full h-auto transition-transform duration-500 hover:scale-105">
            </div>
            <div>
                <h3 class="text-3xl font-bold mb-4 text-gold-600">Our Story</h3>
                <p class="text-lg text-gray-700 mb-6">
                    What began as a small family workshop has grown into a renowned jewelry house, maintaining the same dedication to quality that started it all.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-gold-500 mr-3">✓</span>
                        <span>Established in 2010 by master goldsmiths</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gold-500 mr-3">✓</span>
                        <span>100+ unique designs created annually</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gold-500 mr-3">✓</span>
                        <span>Ethically sourced precious metals and gems</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Values Section -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <img src="assets/img/bracelet-01-a.jpg" alt="Craftsmanship" class="w-full h-48 object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-bold mb-3">Craftsmanship</h3>
                <p class="text-gray-600">Each piece undergoes 20+ quality checks by our master jewelers.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <img src="assets/img/ring pic 1.webp" alt="Sustainability" class="w-full h-48 object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-bold mb-3">Sustainability</h3>
                <p class="text-gray-600">We use 100% recycled gold and conflict-free diamonds.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <img src="assets/img/kat ring 2.jpg" alt="Customer Care" class="w-full h-48 object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-bold mb-3">Customer Care</h3>
                <p class="text-gray-600">Lifetime warranty and free annual cleaning for all pieces.</p>
            </div>
        </section>
    </div>
</main>

<?php include('footer.php'); ?>