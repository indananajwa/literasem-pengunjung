<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Kota Semarang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    .header {
      transition: background-color 0.3s, color 0.3s;
    }
    .header.scrolled {
      background-color: white;
      color: #c42217; /* Tailwind color red-800 */
    }
  </style>
</head>
<body class="bg-white">
  <header id="header" class="header bg-red-800 text-white fixed w-full p-4 flex justify-between items-center z-50 shadow-md">
    <!-- Logo dan Judul -->
    <div class="flex items-center space-x-3">
      <img alt="Logo Dinas Arsip dan Perpustakaan Kota Semarang" class="w-12" src="/img/logo.png" />
      <a class="text-x font-bold leading-tight" href="/">
        DINAS ARSIP DAN <br> PERPUSTAKAAN KOTA SEMARANG
      </a>
    </div>

    <!-- Navigasi -->
    <nav class="hidden md:flex space-x-8 text-sm font-medium">
      <a class="hover:text-gray-300 transition-colors duration-200" href="/pemerintahan">Pemerintahan</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/arsitektur">Arsitektur</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/tempatibadah">Tempat Ibadah</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/budaya">Budaya</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/tokoh">Tokoh</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/situs-kota-lama">Situs Kota Lama</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/makan">Makanan</a>
      <a class="hover:text-gray-300 transition-colors duration-200" href="/wisatasmg">Pariwisata</a>
    </nav>

    <!-- Tombol Kontak -->
    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md transition-transform transform hover:scale-105">
      Contact
    </button>
  </header>