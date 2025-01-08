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
      color: #b91c1c; /* Tailwind color red-800 */
    }
  </style>
</head>
<body class="bg-white">
  <header id="header" class="header bg-red-800 text-white fixed w-full p-4 flex items-center z-50">
    <img alt="Logo Dinas Arsip dan Perpustakaan Kota Semarang" class="mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/msW3ZDDmI5JwMlfvm9V9QqeE9f2pmX03unf1Wpz0q1xG9mLQB.jpg" width="50"/>
    <h1 class="text-lg font-bold">DINAS ARSIP DAN PERPUSTAKAAN KOTA SEMARANG</h1>
  </header>
  <section class="pt-20 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white"></div>
    <div class="flex">
      <img alt="Image of a traditional building in Semarang" class="w-1/3 h-64 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/r5XZFCHieTTlRq3B5cWkyVkeqZ0VMY42Z3tetwhmGDVf8mLQB.jpg" width="400"/>
      <img alt="Image of a monument in Semarang" class="w-1/3 h-64 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/Ss8PD1fgxNyMJy2S7RDCreb8bD4rIoIxt1W9FeJlGdDmemLQB.jpg" width="400"/>
      <img alt="Image of a government building in Semarang" class="w-1/3 h-64 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/nqVu3c2GsFLNEpB7Y1KxESBluCeMt4IfmXNVkrRE1M0Vv5CUA.jpg" width="400"/>
    </div>
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center p-4">
      <h2 class="text-4xl font-bold">YUK KENALAN SAMA KOTA SEMARANG</h2>
      <p class="text-lg">Kota Semarang adalah Ibu kota Provinsi Jawa Tengah</p>
    </div>
  </section>
  <section class="p-8">
    <h2 class="text-3xl font-bold text-center text-red-800 mb-4">SEJARAH BERDIRINYA KOTA SEMARANG</h2>
    <div class="flex flex-col md:flex-row md:space-x-8">
      <p class="text-justify mb-4 md:mb-0">
        Sejarah Kota Semarang bermula pada abad ke-8 M sebagai daerah pesisir bernama Pragota, bagian dari Kerajaan Mataram Kuno. Saat itu, daerah ini merupakan pelabuhan penting dengan gugusan pulau kecil yang kini menjadi daratan akibat pengendapan. Pelabuhan ini diduga berada di sekitar Pasar Bulu hingga Pelabuhan Simongan, tempat Laksamana Cheng Ho bersandar pada 1405 M dan mendirikan Kelenteng Sam Po Kong.
      </p>
      <p class="text-justify">
        Pada abad ke-15, Kerajaan Demak menugaskan Pangeran Made Pandan untuk menyebarkan Islam di Pragota. Nama "Semarang" berasal dari pohon asam yang jarang tumbuh di daerah ini (Asem Arang). Pendiri desa, Kyai Ageng Pandan Arang I, digantikan putranya, Pandan Arang II, yang membawa kemajuan hingga Semarang ditetapkan sebagai kabupaten oleh Sultan Hadiwijaya pada 2 Mei 1547—tanggal yang kini diperingati sebagai Hari Jadi Kota Semarang.
      </p>
    </div>
  </section>
  <script>
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  </script>
</body>
</html>