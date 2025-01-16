<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Underwater</title>
    @vite('resources/css/app.css') <!-- Untuk Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center mb-4">Jelajah Wisata Semarang</h1>
        <p class="text-center mb-8 text-gray-300">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>

        <!-- Section Cards -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide relative group">
                    <img src="{{ asset('pariwisata/lawangsewu.jpg') }}" alt="Tour 1" class="w-full h-72 object-cover rounded-lg" onclick="scrollToSection('anemone')">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                        <h2 class="text-white text-xl font-bold">TOUR 1</h2>
                        <p class="text-white text-sm">There will be a small.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide relative group">
                    <img src="https://via.placeholder.com/300x200" alt="Tour 2" class="w-full h-72 object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                        <h2 class="text-white text-xl font-bold">TOUR 2</h2>
                        <p class="text-white text-sm">There will be a small.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide relative group">
                    <img src="https://via.placeholder.com/300x200" alt="Tour 3" class="w-full h-72 object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                        <h2 class="text-white text-xl font-bold">TOUR 3</h2>
                        <p class="text-white text-sm">There will be a small.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide relative group">
                    <img src="https://via.placeholder.com/300x200" alt="Tour 4" class="w-full h-72 object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                        <h2 class="text-white text-xl font-bold">TOUR 4</h2>
                        <p class="text-white text-sm">There will be a small.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="swiper-slide relative group">
                    <img src="https://via.placeholder.com/300x200" alt="Tour 5" class="w-full h-72 object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                        <h2 class="text-white text-xl font-bold">TOUR 5</h2>
                        <p class="text-white text-sm">There will be a small.</p>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <script>
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        </script>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Card Medusa -->
            <div class="relative">
                <img alt="A delicious ice cream dessert with chocolate syrup and a cherry on top" class="w-full h-full object-cover rounded" height="400" src="https://storage.googleapis.com/a1aa/image/J1BmDQ5b3zpQCZ6LWf0w8XqYSggOTkwMsRxL5cQq2WUeIODUA.jpg" width="600"/>
                <div class="absolute bottom-0 left-0 p-4 text-white">
                    <h3 class="text-lg font-semibold">
                        Es Krim Zangrandi
                    </h3>
                    <a class="flex items-center space-x-1" href="#">
                        <span>
                            Visit
                        </span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card Anemone -->
            <div class="bg-blue-800 p-4 rounded-lg text-center transform transition hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300x200" alt="Anemone" class="rounded-md mb-4">
                <h2 class="text-2xl font-bold">Anemone</h2>
                <button onclick="scrollToSection('anemone')" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                    Detail
                </button>
            </div>

            <!-- Card Jellyfish -->
            <div class="bg-blue-800 p-4 rounded-lg text-center transform transition hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300x200" alt="Jellyfish" class="rounded-md mb-4">
                <h2 class="text-2xl font-bold">Jellyfish</h2>
                <button onclick="scrollToSection('jellyfish')" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                    Detail
                </button>
            </div>

            <!-- Card Jellyfish -->
            <div class="bg-blue-800 p-4 rounded-lg text-center transform transition hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300x200" alt="Jellyfish" class="rounded-md mb-4">
                <h2 class="text-2xl font-bold">Jellyfish</h2>
                <button onclick="scrollToSection('jellyfish')" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                    Detail
                </button>
            </div>

            <!-- Card Jellyfish -->
            <div class="bg-blue-800 p-4 rounded-lg text-center transform transition hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300x200" alt="Jellyfish" class="rounded-md mb-4">
                <h2 class="text-2xl font-bold">Jellyfish</h2>
                <button onclick="scrollToSection('jellyfish')" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                    Detail
                </button>
            </div>
        </div>

        <!-- Sections -->
        <div class="mt-12 space-y-16">
            <section id="medusa" class="bg-blue-700 p-8 rounded-lg">
                <h2 class="text-3xl font-bold">Medusa</h2>
                <p class="text-gray-300 mt-4">Detail tentang Medusa...</p>
            </section>

            <section id="anemone" class="bg-blue-700 p-8 rounded-lg">
                <h2 class="text-3xl font-bold">Anemone</h2>
                <p class="text-gray-300 mt-4">Detail tentang Anemone...</p>
            </section>

            <section id="jellyfish" class="bg-blue-700 p-8 rounded-lg">
                <h2 class="text-3xl font-bold">Jellyfish</h2>
                <p class="text-gray-300 mt-4">Detail tentang Jellyfish...</p>
            </section>
        </div>
    </div>

    <script>
        // Function untuk scroll ke section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
