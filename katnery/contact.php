<?php include('header.php'); ?>

<!-- Modern Hero Section -->
<section class="hero-section relative h-96 flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/kat list.jpg');">
    <div class="text-center px-4">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">Contact Us</h1>
        <p class="text-xl text-white max-w-2xl mx-auto">We'd love to hear from you</p>
    </div>
</section>

<!-- Main Content -->
<main class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Contact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gold-500">
                    <div class="text-gold-500 text-3xl mb-4"><i class="fas fa-map-marker-alt"></i></div>
                    <h3 class="text-xl font-bold mb-2">Our Location</h3>
                    <p class="text-gray-600">AL-AZIZIYA, MAKKAH, Saudi Arabia</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gold-500">
                    <div class="text-gold-500 text-3xl mb-4"><i class="fas fa-envelope"></i></div>
                    <h3 class="text-xl font-bold mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-1"><a href="mailto:contact@info.com" class="hover:text-gold-500 transition-colors">contact@info.com</a></p>
                    <p class="text-gray-600"><a href="mailto:support@info.com" class="hover:text-gold-500 transition-colors">support@info.com</a></p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-gold-500">
                    <div class="text-gold-500 text-3xl mb-4"><i class="fas fa-phone-alt"></i></div>
                    <h3 class="text-xl font-bold mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-1"><a href="tel:+251940508643" class="hover:text-gold-500 transition-colors">+251-940508643</a></p>
                    <p class="text-gray-600">Mon-Fri: 9AM-6PM</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-8 lg:p-12 bg-gray-50">
                        <h2 class="text-3xl font-bold mb-4">Send Us a Message</h2>
                        <img src="assets/img/katnery logo.png" alt="Katnery Logo" class="w-32 mb-6 mx-auto">
                        <p class="text-gray-600 mb-6">Have questions about our jewelry? Want to discuss a custom design? Fill out the form and we'll get back to you within 24 hours.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 mb-2">Full Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-all" placeholder="Your name">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Email Address</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-all" placeholder="your@email.com">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Message</label>
                                <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500 transition-all h-40" placeholder="Your message"></textarea>
                            </div>
                            <button class="w-full bg-gold-500 hover:bg-gold-600 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300">
                                Send Message
                            </button>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block bg-cover bg-center" style="background-image: url('assets/img/cover 2.jpg');"></div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold mb-6">Connect With Us</h3>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-700 hover:text-gold-500 transition-colors text-2xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-700 hover:text-gold-500 transition-colors text-2xl"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-700 hover:text-gold-500 transition-colors text-2xl"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-700 hover:text-gold-500 transition-colors text-2xl"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
