<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Menyembunyikan scrollbar */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Include Header -->
    @include('layouts.header')

    <div id="hero-section" class="relative h-screen bg-cover bg-center z-10" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <!-- Overlay hitam transparan -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Konten hero section -->
        <div id="hero-content" class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h1 class="text-5xl font-bold mb-4">
                <span class="text-red-800">Jelajah Wisata Semarang</span><br>
                <span class="text-red-800 font-normal text-3xl">Kaya Rasa, Sarat Makna</span>
            </h1>
            <button class="bg-red-800 text-white px-6 py-3 rounded-full shadow-lg flex items-center hover:bg-yellow-600" onclick="scrollToMenu()">
                View Menu
            </button>
        </div>

        <!-- Search bar -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 bg-white rounded-full shadow-lg px-6 py-4 flex space-x-4 items-center z-30">
            <input
                id="search-bar"
                type="text"
                placeholder="Search by name or description..."
                class="flex-1 border-none bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" style="width: 300px;"
                oninput="handleSearch()"
            />
            <button class="bg-red-800 text-white font-bold rounded-md px-6 py-2 hover:bg-yellow-600">Search</button>
        </div>
    </div>

    <div id="menu-section" class="container mx-auto px-4 py-6 mt-12">
        <div class="container mx-auto text-center rounded-lg">
            <h2 class="text-4xl font-bold mb-8">
                Jelajah Wisata
                <span class="text-red-800">Semarang</span>
            </h2>
            <div class="overflow-x-auto hide-scrollbar rounded-lg overflow-visible">
                <div class="flex space-x-4">
                    <!-- Tour Item -->
                    <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                        <img 
                            src="/pariwisata/lawangsewu.jpg" 
                            alt="Lawang Sewu" 
                            class="absolute inset-0 w-full h-full object-cover cursor-pointer"
                            onclick="scrollToSection('lawang-sewu')"
                        />

                        <!-- Overlay Transparan -->
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                        <!-- Teks di Tengah -->
                        <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                            <h2 class="text-lg font-bold text-white">Lawang Sewu</h2>
                            <a 
                                href="javascript:void(0)" 
                                class="text-white underline hover:text-blue-400"
                                onclick="scrollToSection('lawang-sewu')">
                                View Detail
                            </a>
                        </div>
                    </div>


                    <!-- Tour Item -->
                    <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                        <img 
                            src="/pariwisata/kotalama.jpg" 
                            alt="Kota Lama" 
                            class="absolute inset-0 w-full h-full object-cover cursor-pointer"
                            onclick="scrollToSection('kota-lama')"
                        />

                        <!-- Overlay Transparan -->
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                        <!-- Teks di Tengah -->
                        <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                            <h2 class="text-lg font-bold text-white">Kota Lama</h2>
                            <a 
                                href="javascript:void(0)" 
                                class="text-white underline hover:text-blue-400"
                                onclick="scrollToSection('kota-lama')">
                                View Detail
                            </a>
                        </div>
                    </div>

                    <!-- Tour Item -->
                    <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                        <img 
                            src="/pariwisata/kampung-melayu.jpg" 
                            alt="Kampung Melayu" 
                            class="absolute inset-0 w-full h-full object-cover cursor-pointer"
                            onclick="scrollToSection('kampung-melayu')"
                        />

                        <!-- Overlay Transparan -->
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                        <!-- Teks di Tengah -->
                        <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                            <h2 class="text-lg font-bold text-white">Kampung Melayu</h2>
                            <a 
                                href="javascript:void(0)" 
                                class="text-white underline hover:text-blue-400"
                                onclick="scrollToSection('kampung-melayu')">
                                View Detail
                            </a>
                        </div>
                    </div>

                    <!-- Tour Item -->
                    <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                        <img 
                            src="/pariwisata/lawangsewu.jpg" 
                            alt="Kampung Batik" 
                            class="absolute inset-0 w-full h-full object-cover cursor-pointer"
                            onclick="scrollToSection('kampung-batik')"
                        />

                        <!-- Overlay Transparan -->
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                        <!-- Teks di Tengah -->
                        <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                            <h2 class="text-lg font-bold text-white">Kampung Batik</h2>
                            <a 
                                href="javascript:void(0)" 
                                class="text-white underline hover:text-blue-400"
                                onclick="scrollToSection('kampung-batik')">
                                View Detail
                            </a>
                        </div>
                    </div>

                    <!-- Tour Item -->
                    <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                        <img 
                            src="/pariwisata/purimaerokoco.jpg" 
                            alt="Puri Maerokoco" 
                            class="absolute inset-0 w-full h-full object-cover cursor-pointer"
                            onclick="scrollToSection('puri-maerokoco')"
                        />

                        <!-- Overlay Transparan -->
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                        <!-- Teks di Tengah -->
                        <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                            <h2 class="text-lg font-bold text-white">Puri Maerokoco</h2>
                            <a 
                                href="javascript:void(0)" 
                                class="text-white underline hover:text-blue-400"
                                onclick="scrollToSection('puri-maerokoco')">
                                View Detail
                            </a>
                        </div>
                    </div>

                    <!-- Tour Item -->
                    <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                        <img 
                            src="/pariwisata/lawangsewu.jpg" 
                            alt="Lawang Sewu" 
                            class="absolute inset-0 w-full h-full object-cover cursor-pointer"
                            onclick="scrollToSection('lawang-sewu')"
                        />

                        <!-- Overlay Transparan -->
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                        <!-- Teks di Tengah -->
                        <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                            <h2 class="text-lg font-bold text-white">Lawang Sewu</h2>
                            <a 
                                href="javascript:void(0)" 
                                class="text-white underline hover:text-blue-400"
                                onclick="scrollToSection('lawang-sewu')">
                                View Detail
                            </a>
                        </div>
                    </div>
                    
                    <!-- Tambahkan lebih banyak item jika diperlukan -->
                </div>
            </div>
            <button class="mt-8 px-6 py-2 bg-teal-400 text-black font-bold rounded hover:bg-teal-300">
                Заказать индивидуальный тур
            </button>
        </div>
    </section>

    <!-- Section Detail -->
    <section id="lawang-sewu" class="mt-12 p-4 border rounded-lg shadow-md bg-gray-100">
        <div class="flex items-center">
            <!-- Gambar Kecil -->
            <img src="/pariwisata/lawangsewu.jpg" class="w-32 h-32 object-cover rounded-md mr-4" alt="Lawang Sewu" />

            <!-- Deskripsi -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Lawang Sewu</h2>
                <p class="text-gray-800 mb-4 text-justify">Lawang Sewu, ikon wisata Semarang, dikenal karena arsitektur kolonialnya yang megah dan kisah sejarahnya yang kaya. Dibangun tahun 1904 sebagai kantor perusahaan kereta api NIS, nama "Lawang Sewu" merujuk pada banyaknya pintu dan jendela besar di bangunan ini. Selain menikmati keindahan arsitekturnya, pengunjung bisa belajar tentang sejarah transportasi kereta api Indonesia dan masa kelam saat bangunan ini menjadi penjara di era pendudukan Jepang. Lawang Sewu juga terkenal dengan cerita-cerita mistisnya, seperti ruang bawah tanah yang memikat pencinta wisata horor. Tempat ini kerap menjadi lokasi acara seni dan budaya, menjadikannya destinasi unik yang memadukan sejarah, seni, dan misteri.</p>
                <a href="https://maps.app.goo.gl/GsNSHBTWFX9RmVoN9" class="text-blue-500 underline hover:text-blue-700" target="_blank">View Location</a>
            </div>
        </div>
    </section>

    <section class="mt-12 p-4 border rounded-lg shadow-md bg-gray-100">
        <div>
            <div id="kota-lama" class="flex items-center">
            <!-- Gambar Kecil -->
            <img src="/pariwisata/kotalama.jpg" class="w-32 h-32 object-cover rounded-md mr-4" alt="Lawang Sewu" />

            <!-- Deskripsi -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Kota Lama</h2>
                <p class="text-gray-800 mb-4">Lawang Sewu adalah bangunan ikonik di Semarang yang dikenal dengan sejarahnya yang kaya. Menjadi simbol sejarah perjuangan bangsa Indonesia...</p>
                <a href="https://maps.app.goo.gl/GsNSHBTWFX9RmVoN9" class="text-blue-500 underline hover:text-blue-700" target="_blank">View Location</a>
            </div>
        </div>
    </section>

    <section id="kampung-melayu" class="mt-12 p-4 border rounded-lg shadow-md bg-gray-100">
        <div class="flex items-center">
            <!-- Gambar Kecil -->
            <img src="/pariwisata/lawangsewu.jpg" class="w-32 h-32 object-cover rounded-md mr-4" alt="Lawang Sewu" />

            <!-- Deskripsi -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Kampung Melayu</h2>
                <p class="text-gray-800 mb-4">Kampung Melayu yang berkembang dari abad ke-17 ini menjadi tempat pertemuan para pendatang yang berasal dari berbagai negara untuk berdagang.Dahulu, Kampung Melayu di Semarang dikenal sebagai tempat tinggal bagi pendatang keturunan Melayu yang berdagang di kawasan tersebut.</p>
                <p class="text-gray-800 mb-4">Namun, tidak hanya pendatang dari Melayu, melainkan juga dari bangsa lain seperti Arab, Gujarat India, Cina, dan Eropa yang turut berlabuh untuk berdagang dan menyebarkan dakwah agama.</p>
                <a href="https://maps.app.goo.gl/GsNSHBTWFX9RmVoN9" class="text-blue-500 underline hover:text-blue-700" target="_blank">View Location</a>
            </div>
        </div>
    </section>

    <section id="kampung-batik" class="mt-12 p-4 border rounded-lg shadow-md bg-gray-100">
        <div class="flex items-center">
            <!-- Gambar Kecil -->
            <img src="/pariwisata/lawangsewu.jpg" class="w-32 h-32 object-cover rounded-md mr-4" alt="Lawang Sewu" />

            <!-- Deskripsi -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Kampung Batik</h2>
                <p class="text-gray-800 mb-4">kampung batik semarang sudah ada sejak zaman penjajahan Jepang. Kampung batik ini telah menjadi sumber perekonomian masyarakat setempat. Namun tentara Jepang membakar desa tersebut dan seluruh peralatan yang digunakan untuk membatik juga ikut rusak.</p>
                <a href="https://maps.app.goo.gl/GsNSHBTWFX9RmVoN9" class="text-blue-500 underline hover:text-blue-700" target="_blank">View Location</a>
            </div>
        </div>
    </section>

    <script>
        // Function untuk scroll ke section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
