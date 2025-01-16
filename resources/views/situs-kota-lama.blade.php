<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Situs Kota Lama Semarang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hover-box:hover {
            transform: translateY(-10px);
            transition: transform 0.3s;
        }
        .hidden-opacity {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .visible-opacity {
            opacity: 1;
            transition: opacity 0.5s ease;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Include Header -->
    @include('layouts.header')

    <div id="hero-section" class="relative h-screen bg-cover bg-center z-10" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div id="hero-content" class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white visible-opacity">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Discover your right places with us</h1>
        </div>
        <div id="video-container" class="relative z-30 flex items-center justify-center hidden-opacity">
            <iframe 
                id="video" 
                class="w-full h-5/6 rounded-lg shadow-lg" 
                src="https://www.youtube.com/embed/-5q5mZbe3V8?autoplay=1&controls=1" 
                allow="autoplay; fullscreen" 
                allowfullscreen>
            </iframe>        
        </div>
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

    <div class="container mx-auto px-4 text-center">
        <div id="food-list" class="grid grid-cols-1 gap-6"></div>
        <div id="pagination" class="mt-8 flex justify-center items-center space-x-4"></div>
    </div>

    <script>
        const heroContent = document.getElementById('hero-content');
        const videoContainer = document.getElementById('video-container');
        const video = document.getElementById('video');

        video.addEventListener('play', () => {
            heroContent.classList.remove('visible-opacity');
            heroContent.classList.add('hidden-opacity');
            videoContainer.classList.remove('hidden-opacity');
            videoContainer.classList.add('visible-opacity');
        });

        video.addEventListener('pause', () => {
            heroContent.classList.remove('hidden-opacity');
            heroContent.classList.add('visible-opacity');
        });

        video.addEventListener('ended', () => {
            heroContent.classList.remove('hidden-opacity');
            heroContent.classList.add('visible-opacity');
        });
    </script>

    <script>
        const foodData = [
            {
                name: "Jembatan Berok",
                description: "Salah satu pintu benteng yang masih ada hingga kini adalah Jembatan Berok, yang juga dikenal sebagai De Zuider Por. Nama \"Berok\" berasal dari cara pengucapan masyarakat Pribumi yang kesulitan menyebut kata \"Burg\" dalam bahasa Belanda.",
                location: "https://maps.app.goo.gl/GsNSHBTWFX9RmVoN9",
                rating: 5.0,
                image: "/SKL/Jembatan-Berok-1890.jpg",
            },
            {
                name: "Gereja Blenduk",
                description: "Terdapat bangunan Gereja Blenduk yang merupakan bangunan yang dibangun pada 1753 dengan bentuk rumah panggung Jawa dan atap bergaya Jawa. Renovasi besar dilakukan pada 1787, diikuti perubahan lagi pada 1794 dan pembangunan kembali pada 1894 oleh H.P.A. de Wilde dan W.Westmas. Setelah tiga renovasi—1753, 1894, dan 2003—gereja ini tetap mempertahankan gaya arsitektur Eropa klasik yang anggun dan aristokrat. Setiap renovasi tercatat di batu marmer di bawah altar.",
                location: "https://maps.app.goo.gl/K8w7mWZZHtPF58hS9",
                rating: 5.0,
                image: "/SKL/Gereja-Blenduk-1930.jpg",
            },
            {
                name: "Gedung Schouwburg (Gedung Marabunta)",
                description: "Dibangun pada tahun 1870, dulunya menjadi pusat pertunjukan seni dan budaya bagi warga Semarang. Namun, pada tahun 1994, bangunan ini roboh dan digantikan oleh Gedung Marabunta yang didirikan pada tahun 1997 di lokasi yang sama. Nama \"Marabunta,\" yang berarti \"semut raksasa\" dalam bahasa Jawa, kini dikenal sebagai destinasi wisata dan cagar budaya. Selain itu, beberapa bagian gedung dimanfaatkan sebagai kafe, restoran, dan toko.",
                location: "https://maps.app.goo.gl/K8w7mWZZHtPF58hS9",
                rating: 5.0,
                image: "/SKL/Gedung-Schouwburg.jpg",
            },
            {
                name: "Gedung Schouwburg (Gedung Marabunta)",
                description: "Dibangun pada tahun 1870, dulunya menjadi pusat pertunjukan seni dan budaya bagi warga Semarang. Namun, pada tahun 1994, bangunan ini roboh dan digantikan oleh Gedung Marabunta yang didirikan pada tahun 1997 di lokasi yang sama. Nama \"Marabunta,\" yang berarti \"semut raksasa\" dalam bahasa Jawa, kini dikenal sebagai destinasi wisata dan cagar budaya. Selain itu, beberapa bagian gedung dimanfaatkan sebagai kafe, restoran, dan toko.",
                location: "https://maps.app.goo.gl/K8w7mWZZHtPF58hS9",
                rating: 5.0,
                image: "/SKL/Gedung-Schouwburg.jpg",
            },
            {
                name: "Gedung Schouwburg (Gedung Marabunta)",
                description: "Dibangun pada tahun 1870, dulunya menjadi pusat pertunjukan seni dan budaya bagi warga Semarang. Namun, pada tahun 1994, bangunan ini roboh dan digantikan oleh Gedung Marabunta yang didirikan pada tahun 1997 di lokasi yang sama. Nama \"Marabunta,\" yang berarti \"semut raksasa\" dalam bahasa Jawa, kini dikenal sebagai destinasi wisata dan cagar budaya. Selain itu, beberapa bagian gedung dimanfaatkan sebagai kafe, restoran, dan toko.",
                location: "https://maps.app.goo.gl/K8w7mWZZHtPF58hS9",
                rating: 5.0,
                image: "/SKL/Gedung-Schouwburg.jpg",
            },
            {
                name: "Gedung Schouwburg (Gedung Marabunta)",
                description: "Dibangun pada tahun 1870, dulunya menjadi pusat pertunjukan seni dan budaya bagi warga Semarang. Namun, pada tahun 1994, bangunan ini roboh dan digantikan oleh Gedung Marabunta yang didirikan pada tahun 1997 di lokasi yang sama. Nama \"Marabunta,\" yang berarti \"semut raksasa\" dalam bahasa Jawa, kini dikenal sebagai destinasi wisata dan cagar budaya. Selain itu, beberapa bagian gedung dimanfaatkan sebagai kafe, restoran, dan toko.",
                location: "https://maps.app.goo.gl/K8w7mWZZHtPF58hS9",
                rating: 5.0,
                image: "/SKL/Gedung-Schouwburg.jpg",
            },
            {
                name: "Gedung Schouwburg (Gedung Marabunta)",
                description: "Dibangun pada tahun 1870, dulunya menjadi pusat pertunjukan seni dan budaya bagi warga Semarang. Namun, pada tahun 1994, bangunan ini roboh dan digantikan oleh Gedung Marabunta yang didirikan pada tahun 1997 di lokasi yang sama. Nama \"Marabunta,\" yang berarti \"semut raksasa\" dalam bahasa Jawa, kini dikenal sebagai destinasi wisata dan cagar budaya. Selain itu, beberapa bagian gedung dimanfaatkan sebagai kafe, restoran, dan toko.",
                location: "https://maps.app.goo.gl/K8w7mWZZHtPF58hS9",
                rating: 5.0,
                image: "/SKL/Gedung-Schouwburg.jpg",
            },
            // Add other data objects here...
        ];

        const itemsPerPage = 5;
        let currentPage = 1;
        let filteredData = [...foodData];

        function renderList(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const paginatedData = filteredData.slice(startIndex, endIndex);

            const foodList = document.getElementById("food-list");
            foodList.innerHTML = ""; // Clear previous items

            paginatedData.forEach(food => {
                const foodItem = document.createElement("div");
                foodItem.className = "bg-white p-6 rounded-lg shadow flex items-center hover-box";
                foodItem.innerHTML = `
                    <img alt="${food.name}" class="w-48 h-48 object-cover rounded-lg mr-4" src="${food.image}" />
                    <div class="text-left">
                        <h3 class="text-lg font-semibold">${food.name}</h3>
                        <p class="text-gray-600">${food.description}</p>
                        <a href="${food.location}" target="_blank" class="text-blue-500">View Location</a>
                    </div>
                `;
                foodList.appendChild(foodItem);
            });

            renderPagination();
        }

        function renderPagination() {
            const pagination = document.getElementById("pagination");
            pagination.innerHTML = "";

            const totalPages = Math.ceil(filteredData.length / itemsPerPage);

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement("button");
                button.className = `px-4 py-2 rounded ${i === currentPage ? "bg-red-800 text-white" : "bg-gray-200"}`;
                button.innerText = i;
                button.onclick = () => {
                    currentPage = i;
                    renderList(currentPage);
                };
                pagination.appendChild(button);
            }
        }

        function handleSearch() {
            const query = document.getElementById("search-bar").value.toLowerCase();
            filteredData = foodData.filter(
                food =>
                    food.name.toLowerCase().includes(query) ||
                    food.description.toLowerCase().includes(query)
            );
            currentPage = 1; // Reset to the first page
            renderList(currentPage);
        }

        // Initial render
        renderList(currentPage);
    </script>
</body>
</html>
