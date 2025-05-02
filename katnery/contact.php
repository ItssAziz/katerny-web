<?php include('header.php'); ?>

<!-- Modern Hero Section -->
<section class="hero-section relative h-96 flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/kat list.jpg');">
    <div class="text-center px-8 w-full">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-2">Contact Us</h1>
        <p class="text-xl text-white ml-[28%] w-3/4 md:w-1/2 text-center">Get in touch via Telegram or phone</p>
    </div>
</section>

<!-- Main Content -->
<main class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Contact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gold-500">
                    <div class="text-gold-500 text-3xl mb-4"><i class="fab fa-telegram"></i></div>
                    <h3 class="text-xl font-bold mb-2">Message Us on Telegram</h3>
                    <a href="https://t.me/katnery" class="inline-block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300">
                        Open Telegram
                    </a>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gold-500">
                    <div class="text-gold-500 text-3xl mb-4"><i class="fas fa-phone-alt"></i></div>
                    <h3 class="text-xl font-bold mb-2">Call Us</h3>
                    <a href="tel:+966553464889" class="text-gray-600 mb-4 hover:text-gold-500 block">+966 55 346 4889</a>
                    <a href="tel:+966553464889" class="inline-block mt-4 bg-gold-500 hover:bg-gold-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300">
                        Call Now
                    </a>
                </div>
            </div>

            <!-- Social Media -->
            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold mb-6">Connect With Us</h3>
                <div class="flex justify-center space-x-6">
                    <a href="https://t.me/katnery" class="text-gray-700 hover:text-blue-500 transition-colors text-2xl"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
