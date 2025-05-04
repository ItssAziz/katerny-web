<?php include('header.php'); ?>

<!-- Modern Hero Section -->
<section class="hero-section relative h-96 flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/kat list.jpg');">
    <div class="text-center px-8 w-full">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-2"><?= $translations['contact_title'] ?></h1>
        <p class="text-xl text-white ml-[28%] w-3/4 md:w-1/2 text-center"><?= $translations['contact_subtitle'] ?></p>
    </div>
</section>

<!-- Main Content -->
<main class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-t-4 border-gold-500 max-w-2xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Phone Section -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4"><?= $translations['call_us'] ?></h3>
                    <a href="tel:+966553464889" class="block text-gray-600 hover:text-gold-600 text-center font-medium mb-4" dir="ltr">
                        +966 55 346 4889
                    </a>
                    <a href="tel:+966553464889" class="block w-full bg-gradient-to-r from-gold-500 to-gold-600 hover:from-gold-600 hover:to-gold-700 text-white font-medium py-2 px-4 rounded-lg transition-all duration-300 text-center">
                        <?= $translations['call_us'] ?>
                    </a>
                </div>

                <!-- Telegram Section -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-800 text-center mb-4"><?= $translations['connect_with_us'] ?></h3>
                    <a href="https://t.me/katnery" class="flex items-center justify-center w-12 h-12 mx-auto bg-white hover:bg-blue-100 text-gray-500 hover:text-blue-600 rounded-full transition-all duration-300">
                        <i class="fab fa-telegram text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
