<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<section id="contact" class="mt-16 py-10 bg-gray-800 text-white transition-all duration-700">
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-bold text-center mb-2">Contact Us</h2>
        <p class="text-center text-gray-300 mb-8">Got a question or want to get in touch? Fill out the form below!</p>
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Contact Information -->
            <div class="w-full lg:w-1/2">
                <h3 class="text-xl font-bold mb-4">Our Office</h3>
                <p class="text-gray-300 mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Jalan Pemuda No. 1, Semarang, Indonesia</p>
                <p class="text-gray-300 mb-2"><i class="fas fa-phone mr-2"></i> +62 812 3456 7890</p>
                <p class="text-gray-300 mb-4"><i class="fas fa-envelope mr-2"></i> info@dinaskotasemarang.go.id</p>
                <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-pink-500 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-red-500 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="w-full lg:w-1/2 bg-gray-700 p-6 rounded-lg shadow-lg">
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-300 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full p-3 rounded bg-gray-800 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-red-600" placeholder="Your Name" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-300 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full p-3 rounded bg-gray-800 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-red-600" placeholder="Your Email" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-300 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full p-3 rounded bg-gray-800 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-red-600" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="w-full py-3 bg-red-800 text-white font-bold rounded-lg hover:bg-red-700 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>