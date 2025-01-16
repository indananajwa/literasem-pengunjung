  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    .header {
      transition: background-color 0.3s, color 0.3s;
    }
    .header.scrolled {
      background-color: white;
      color: #b91c1c; /* Tailwind color red-800 */
    }
  </style>

  <header id="header" class="header bg-red-800 text-white fixed w-full p-4 flex justify-between items-center z-50 shadow-md">
    <!-- Logo dan Judul -->
    <div class="flex items-center space-x-3">
      <img alt="Logo Dinas Arsip dan Perpustakaan Kota Semarang" class="w-12" src="/img/logo.png" />
      <a class="text-sm md:text-lg font-bold leading-tight" href="/">
        DINAS ARSIP DAN <br> PERPUSTAKAAN KOTA SEMARANG
      </a>
    </div>

    <!-- Tombol Burger Menu -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-white focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>

    <!-- Navigasi untuk Desktop -->
    <nav class="hidden md:flex space-x-8 text-sm font-medium">
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Pemerintahan</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Arsitektur</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Tempat Ibadah</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Budaya</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Tokoh</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Situs Kota Lama</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Makanan</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Pariwisata</a>
    </nav>

    <!-- Navigasi untuk Mobile -->
    <nav id="mobile-menu" class="hidden bg-red-800 text-white fixed top-16 left-0 w-full flex flex-col space-y-2 px-4 py-2 z-40">
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Pemerintahan</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Arsitektur</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Tempat Ibadah</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Budaya</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Tokoh</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Situs Kota Lama</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Makanan</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="#">Pariwisata</a>
    </nav>

    <!-- Tombol Kontak -->
    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md transition-transform transform hover:scale-105 hidden md:block">
      Contact
    </button>
  </header>

  <script>
    // Menangani scroll untuk menambahkan kelas .scrolled
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Menangani toggle menu mobile
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

