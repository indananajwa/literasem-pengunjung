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
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Arsitektur Kota Semarang</h1>
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
                name: "Gedung Papak",
                description: "Gedung Papak, yang dibangun pada 1919 dengan arsitektur kolonial Belanda, awalnya berfungsi sebagai markas tentara Belanda dan tempat penyiksaan bagi pribumi yang melawan. Dengan desain kokoh dan sederhana, gedung ini akhirnya dikuasai oleh tentara Jepang.",
                rating: 5.0,
                image: 'arsi/GedungPapak.jpg',
            },
            {
                name: "Lawang Sewu",
                description: 'Lawang Sewu, ikon wisata Semarang, dikenal karena arsitektur kolonialnya yang megah dan kisah sejarahnya yang kaya. Dibangun tahun 1904 sebagai kantor perusahaan kereta api NIS, nama "Lawang Sewu" merujuk pada banyaknya pintu dan jendela besar di bangunan ini. Selain menikmati keindahan arsitekturnya, pengunjung bisa belajar tentang sejarah transportasi kereta api Indonesia dan masa kelam saat bangunan ini menjadi penjara di era pendudukan Jepang. Lawang Sewu juga terkenal dengan cerita-cerita mistisnya, seperti ruang bawah tanah yang memikat pencinta wisata horor. Tempat ini kerap menjadi lokasi acara seni dan budaya, menjadikannya destinasi unik yang memadukan sejarah, seni, dan misteri.',
                rating: 5.0,
                image: 'arsi/LawangSewu40.jpg',
            },
            {
                name: "Tangsi Militer",
                description: "Tangsi militer Belanda yang dibangun pada 1743 bernama De Werttenbergse Kazerne. Tempat ini menjadi markas bagi tentara bayaran dari berbagai daerah dan negara yang direkrut oleh penguasa Belanda, yang berawal dari pemberontakan orang Tionghoa di Batavia (Jakarta) pada 1740. Dalam peristiwa tersebut, banyak orang Tionghoa melarikan diri ke arah timur sepanjang jalur utara Pulau Jawa, sambil terus melawan tentara Belanda. Saat ini, lokasi ini telah menjadi Gedung Plaza Semarang.",
                rating: 5.0,
                image: 'arsi/TangsiMiliter.jpg',
            },

            {
                name: "Javashe Bank",
                description: "Javasche Bank, yang sekarang dikenal sebagai Bank Indonesia, merupakan kantor cabang pertama De Javasche Bank N.V di seluruh Hindia Belanda, yang dibuka pada 1 Maret 1829. Terletak di Jl. Letjen Suprapto, pembangunan gedung ini didasari oleh pertimbangan bahwa Kota Semarang, sebagai kota besar dengan pelabuhan utama di Jawa, memiliki potensi ekonomi dan perdagangan yang strategis. Setelah kemerdekaan Indonesia, pada 30 Juni 1958, DJB dinasionalisasi menjadi Bank Indonesia.",
                rating: 5.0,
                image: 'arsi/JavascheBank.jpg',
            },
            {
                name: "RSUP DR Kariyadi",
                description: 'Pada 1919, dr. N.F. Liem mengusulkan untuk mengganti dan menggabungkan Rumah Sakit Kota di Tawang dengan Rumah Sakit Kota Pembantu di Alun-alun Semarang. Rencana ini diwujudkan dengan membangun rumah sakit yang lebih besar di Semarang. Pembangunannya dimulai pada 1920 dan selesai lima tahun kemudian. Pada 9 September 1925, lahirlah "Centrale Burgerlijke Ziekeninrichting" yang lebih dikenal dengan nama CBZ. Awalnya, rumah sakit ini fokus pada pelayanan medis berupa pengobatan kuratif dan pendidikan paramedis.',
                rating: 5.0,
                image: 'arsi/RSUPKariadi.jpg',
            },
            {
                name: "RSU ST. Elisabeth",
                description: "Pada tanggal 3 September 1923 dana tersebut digunakan untuk membeli sebidang tanah bekas kuburan Tionghoa seluas 34.000 m2 di daerah perbukitan candi baru, dengan pemandangan yang sangat indah, suatu kawasan yang tenang. Pembangunan dilaksanakan oleh 3 kontraktor yaitu Ir.Karsten, Ir.Zoetmulder, Ir.Peters dan Ir. Keliverda dan selesai pada tanggal 8 Agustus 1927. Pada masa pendudukan Jepang, RS St. Elisabeth diambil alih dan dijadikan kantor militer",
                rating: 5.0,
                image: 'arsi/RsuElisabeth.jpg',
            },

            {
                name: "Gedung Balaikota Semarang",
                description: "Gedung Balai Kota Semarang, yang awalnya merupakan villa milik keluarga Gimberg, terletak di Jalan Pemuda No. 148. Gedung ini digunakan sebagai kantor utama Stadsgemeente (Kotapraja) Semarang, tempat Burgemeester (Walikota) Semarang berkantor. Pada 1960-an, gedung ini beralih fungsi menjadi Dinas Pekerjaan Umum (DPU) Kotamadya Semarang, dengan renovasi penambahan dinding berjendela di bagian depan. Kemudian, pada 1980-an, dilakukan perombakan besar dengan menutup pilar-pilar dan menambahkan kanopi bergaya Romawi kuno di bagian depan gedung.",
                rating: 5.0,
                image: '',
            },
            {
                name: "GEDUNG PERTAMINA",
                description: 'Gedung Pertamina, yang sebelumnya dikenal sebagai Gedung BP Migas, adalah salah satu bangunan bersejarah yang terletak di Jalan Pemuda 114, Semarang. Bangunan ini masih terjaga keasliannya dengan baik. Meskipun di sisi kirinya telah dibangun Mall Paragon dan Hotel Crowne Plaza, sebagai bangunan tua, keberadaannya masih terlihat serasi berdampingan dengan bangunan-bangunan modern di sekitarnya.',
                rating: 5.0,
                image: 'arsi/GedungPertamina1938.jpg',
            },
            {
                name: "Pasar Pedamaran",
                description: "Pasar Pedamaran Semarang Pasar Pedamaran Johar Semarang, Pada foto tahun 1910. Situasi Pasar Pedamaran ini sebelum dibagunnya Pasar Johar pada tahun 1931. Pasar ini memiliki 240 buah dasarn sehingga pemerintah pada saat itu meminta Ir. Herman Thomas Karsten mendirikan pasar gede Semarang yang menggabungkan Pasar Pedamaran, Johar, Beteng, Jurnatan dan Pekojan",
                rating: 5.0,
                image: '',
            },
            {
                name: "Pasar Johar",
                description: 'Pasar Johar adalah salah satu pasar tradisional di Kota Semarang yang pernah menjadi Pasar Terbesar se-Asia Tenggara. Karena lokasinya berdekatan dengan Penjara sehingga sering dijadikan tempat transit bagi orang yang sedang menjenguk kerabat di penjara. Nama Johar dipilih karena pada saat itu di sebelah timur Alun-alun Kota Semarang dan lokasinya dipagari pohon Johar di tepi jalan. Pasar Johar Kota Semarang dimulai tahun 1860 dan baru diresmikan kembali pada tahun 2022 setelah masa pemulihan karena sebelumnya mengalami kebakaran pada tahun 2015 dan baru di bangun kembali tahun 2017 dan selesai pada tahun 2021. Pasar Johar dirancang oleh insinyur Belanda, Ir. Thomas Kristen',
                rating: 5.0,
                image: 'arsi/PasarDjohar1928.jpg',
            },
            {
                name: "Pasar Bulu",
                description: "Penjara bulu adalah tempat terjadinya pembantaian Penjara Bulu pada Perang Dunia II. Saat itu Dr. Kariadi sebagai kepala laboratorium Rumah Sakit Purusara (Sekarang Rumah Sakit Kariadi) dipanggil untuk membuktikan kebenaran adanya racun pada tandon air Siranda, Candi Baru. Namun, Dr. Kariadi dan sopirnya ditembak oleh Jepang saat melewati Jl. Pandanaran. Hal ini memicu perlawanan dari warga Semarang untuk menyerang tahanan-tahanan jepang yang berada di penjara bulu",
                rating: 5.0,
                image: 'arsi/TangsiMiliter.jpg',
            },

            {
                name: "Gedung Chinese English School Bodjong 1930",
                description: 'Chinese English School "Hwa Ing" terletak di Bodjong Straat, yang kini dikenal sebagai Jalan Pemuda Semarang. Thio menjabat sebagai ketua sekolah ini pada tahun 1928. Saat ini, gedung tersebut digunakan sebagai SMA Negeri 5 Semarang.',
                rating: 5.0,
                image: 'arsi/GedungChineseBodjong.jpg',
            },
            {
                name: "Gedung GRIS",
                description: 'GRIS, yang dulunya merupakan sebuah Sositet de Harmonie milik seorang Belanda, dibeli oleh masyarakat pribumi dengan membentuk panitia Fonds GRIS. Di masa keemasannya, GRIS selalu ramai dikunjungi masyarakat untuk menyaksikan pertunjukan Wayang Orang Ngesti Pandowo. Selain digunakan untuk menimba ilmu tentang kesenian serta hiburan murah, GRIS juga digunakan untuk acara resepsi, perpustakaan rakyat, gedung bioskop, kampus sebuah akademi bahasa, dan sebagainya (Gedung GRIS sekarang menjadi Paragon Mall).',
                rating: 5.0,
                image: 'arsi/GedungGRIS1925.jpg',
            },
            {
                name: "Gedung Mega Eltra",
                description: "Gedung Mega Eltra, dibangun sekitar tahun 1897. Penghuni gedung ini dulunya NV. Lindeteves yang menyediakan kelistrikan di wilayah pelabuhan Semarang. Pada masa pendudukan Jepang, gedung ini dikenal dengan nama Semarang Kikei Sesaku Syo. Mega Eltra sendiri adalah perusahaan yang bermula dari perusahaan Belanda yang kegiatan usaha di bidang listrik, mesin dan peralatan tehnik yang telah eksis sejak tahun 1930, dikenal dengan nama Electro Import NV . Perusahaan ini merupakan anak perusahaan Jacobson Vanden Berg & Co, sebuah perusahaan Belanda yang pada zamannya dikenal dalam kelompok perusahaan “The Big Five”",
                rating: 5.0,
                image: 'arsi/GedungMegaEltra.jpg',
            },
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