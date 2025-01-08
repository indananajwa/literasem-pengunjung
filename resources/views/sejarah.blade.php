<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenal Kota Semarang</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-sans antialiased">

    <!-- Include Header -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-center text-white"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/hero-bg.jpg');">
        <div>
            <h2 class="text-4xl md:text-5xl font-bold mb-2">YUK KENALAN SAMA KOTA SEMARANG</h2>
            <p class="text-lg">Kota Semarang adalah Ibu Kota Provinsi Jawa Tengah</p>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section class="bg-white py-12 px-4 md:px-16 mt-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-red-800">SEJARAH BERDIRINYA KOTA SEMARANG</h2>
        </div>
        <div class="md:flex md:space-x-8">
            <div class="md:w-1/2 text-justify mb-4 md:mb-0">
                <p>
                    Sejarah Kota Semarang bermula pada abad ke-8 M sebagai daerah pesisir bernama Pragota, bagian dari <strong>Kerajaan Mataram Kuno</strong>. 
                    Saat itu, daerah ini merupakan pelabuhan penting dengan gugusan pulau kecil yang kini menjadi daratan akibat pengendapan. 
                    Pelabuhan ini diduga berada di sekitar Pasar Bulu hingga Pelabuhan Simongan, tempat Laksamana Cheng Ho bersandar pada 1405 M.
                </p>
            </div>
            <div class="md:w-1/2 text-justify">
                <p>
                    Pada abad ke-15, Kerajaan Demak menugaskan Pangeran Made Pandan untuk menyebarkan Islam di Pragota. Nama "Semarang" berasal dari pohon asam yang jarang tumbuh di daerah ini. 
                    Semarang ditetapkan sebagai kabupaten oleh Sultan Hadiwijaya pada 2 Mei 1547—tanggal yang kini diperingati sebagai Hari Jadi Kota Semarang.
                </p>
            </div>
        </div>
    </section>

</body>
</html>
