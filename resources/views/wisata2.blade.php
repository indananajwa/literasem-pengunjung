<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajah Wisata Semarang</title>
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Include Header -->
    @include('layouts.header')

    <!-- Hero Section -->
    <div id="hero-section" class="relative h-screen bg-cover bg-center z-10" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div id="hero-content" class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h1 class="text-5xl font-bold mb-4">
                <span class="text-red-800">Jelajah Wisata Semarang</span><br>
                <span class="text-red-800 font-normal text-3xl">Kaya Rasa, Sarat Makna</span>
            </h1>
            <button class="bg-red-800 text-white px-6 py-3 rounded-full shadow-lg flex items-center hover:bg-yellow-600" onclick="scrollToMenu()">
                View Menu
            </button>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 bg-white rounded-full shadow-lg px-6 py-4 flex space-x-4 items-center z-30">
            <input id="search-bar" type="text" placeholder="Search by name or description..." class="flex-1 border-none bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" style="width: 300px;" oninput="handleSearch()" />
            <button class="bg-red-800 text-white font-bold rounded-md px-6 py-2 hover:bg-yellow-600">Search</button>
        </div>
    </div>

    <!-- Menu Section -->
    <div id="menu-section" class="container mx-auto px-4 py-6 mt-12"></div>

    <!-- Detail Section -->
    <div id="detail-section" class="container mx-auto px-4 py-6 mt-12"></div>

    <script>
        const tourData = [
        {
            id: "lawang-sewu",
            name: "Lawang Sewu",
            image: "/pariwisata/lawangsewu.jpg",
            description: "Lawang Sewu adalah bangunan ikonik di Semarang yang dikenal dengan sejarahnya yang kaya. Menjadi simbol sejarah perjuangan bangsa Indonesia.",
            location: "https://maps.app.goo.gl/GsNSHBTWFX9RmVoN9"
        },
        {
            id: "kota-lama",
            name: "Kota Lama",
            image: "/pariwisata/kotalama.jpg",
            description: "Kota Lama Semarang adalah kawasan bersejarah yang dipenuhi bangunan bergaya kolonial Belanda.",
            location: "https://maps.app.goo.gl/xyz123"
        },
        {
            id: "kampung-melayu",
            name: "Kampung Melayu",
            image: "/pariwisata/kampung-melayu.jpg",
            description: "Kampung Melayu adalah kawasan unik yang mencerminkan budaya Melayu di Semarang.",
            location: "https://maps.app.goo.gl/abc456"
        },
        {
            id: "kampung-batik",
            name: "Kampung Batik",
            image: "/pariwisata/kampung-batik.jpg",
            description: "Kampung Batik adalah pusat seni batik tradisional yang menawarkan pengalaman budaya tak terlupakan.",
            location: "https://maps.app.goo.gl/def789"
        },
        {
            id: "puri-maerokoco",
            name: "Puri Maerokoco",
            image: "/pariwisata/purimaerokoco.jpg",
            description: "Puri Maerokoco dikenal sebagai 'Taman Mini Jawa Tengah' dengan miniatur rumah adat dari berbagai daerah.",
            location: "https://maps.app.goo.gl/ghi101"
        }
        ];

        // Load tour items dynamically
        function loadTourItems() {
            const menuSection = document.getElementById("menu-section");
            menuSection.innerHTML = `
                <h2 class="text-4xl font-bold mb-8 text-center">
                    Jelajah Wisata <span class="text-red-800">Semarang</span>
                </h2>
                <div class="overflow-x-auto hide-scrollbar flex space-x-4">
                    ${tourData.map(tour => `
                        <div class="flex-none relative w-64 h-80 rounded-lg transform transition hover:scale-105 hover:shadow-xl">
                            <img src="${tour.image}" alt="${tour.name}" class="absolute inset-0 w-full h-full object-cover cursor-pointer" onclick="scrollToSection('${tour.id}')">
                            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                            <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 z-10">
                                <h2 class="text-lg font-bold text-white">${tour.name}</h2>
                                <a href="javascript:void(0)" class="text-white underline hover:text-blue-400" onclick="scrollToSection('${tour.id}')">
                                    View Detail
                                </a>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
        }
        
        // Load detail sections dynamically
        function loadDetailSections() {
            const detailSection = document.getElementById("detail-section");
            detailSection.innerHTML = tourData.map(tour => `
                <section id="${tour.id}" class="mt-12 p-4 border rounded-lg shadow-md bg-gray-100">
                    <div class="flex items-center">
                        <img src="${tour.image}" class="w-32 h-32 object-cover rounded-md mr-4" alt="${tour.name}">
                        <div>
                            <h2 class="text-3xl font-bold mb-2">${tour.name}</h2>
                            <p class="text-gray-800 mb-4">${tour.description}</p>
                            <a href="${tour.location}" class="text-blue-500 underline hover:text-blue-700" target="_blank">View Location</a>
                        </div>
                    </div>
                </section>
            `).join('');
        }
        .
        // Scroll to section
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
        
        // Initialize the page
        window.onload = () => {
            loadTourItems();
            loadDetailSections();
        };
        

    </script>
</body>
</html>