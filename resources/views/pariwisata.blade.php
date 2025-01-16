<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Travel Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-900 text-white">
  <!-- Header Section -->
  <header class="relative h-screen bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080');">
   <div class="absolute inset-0 bg-black opacity-50">
   </div>
   <div class="relative z-10 flex flex-col items-center justify-center h-full text-center">
    <nav class="absolute top-0 left-0 w-full p-4 flex justify-between items-center">
     <div class="text-white font-bold text-lg">
      yakimova
     </div>
     <ul class="flex space-x-4">
      <li>
       <a class="text-white" href="#">
        Все туры
       </a>
      </li>
      <li>
       <a class="text-white" href="#">
        О нас
       </a>
      </li>
      <li>
       <a class="text-white" href="#">
        Отзывы
       </a>
      </li>
      <li>
       <a class="text-white" href="#">
        Контакты
       </a>
      </li>
     </ul>
    </nav>
    <h1 class="text-5xl font-bold">
     ОЗЕРО БРАЙЕС
    </h1>
    <h2 class="text-3xl">
     ИТАЛИЯ
    </h2>
    <p class="mt-4">
     Авторские
     <span class="text-teal-400">
      туры
     </span>
     по экзотическим местам от студии yakimova
    </p>
    <button class="mt-4 px-6 py-2 bg-teal-400 text-black font-bold rounded">
     Оставить заявку
    </button>
   </div>
  </header>
  
  <!-- Tours Section -->
<section class="py-16 bg-gray-800">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold mb-8">
      ОТКРОЙ ДЛЯ СЕБЯ
      <span class="text-teal-400">ЦЕЛЫЙ МИР</span>
    </h2>
    <p class="mb-8">Смотреть видео из наших туров</p>
    <div class="relative overflow-hidden">
      <!-- Scrolling Container -->
      <div
        class="flex space-x-4 overflow-x-scroll scrollbar-hide snap-x snap-mandatory"
      >
        <!-- Tour Items -->
        <div class="bg-gray-700 p-4 rounded snap-center flex-shrink-0 w-80">
          <img
            alt="Tour 01"
            class="w-full h-48 object-cover rounded mb-4"
            src="https://placehold.co/300x200"
          />
          <h3 class="text-xl font-bold">Тур 01</h3>
          <p>Описание тура</p>
        </div>
        <div class="bg-gray-700 p-4 rounded snap-center flex-shrink-0 w-80">
          <img
            alt="Tour 02"
            class="w-full h-48 object-cover rounded mb-4"
            src="https://placehold.co/300x200"
          />
          <h3 class="text-xl font-bold">Тур 02</h3>
          <p>Описание тура</p>
        </div>
        <div class="bg-gray-700 p-4 rounded snap-center flex-shrink-0 w-80">
          <img
            alt="Tour 03"
            class="w-full h-48 object-cover rounded mb-4"
            src="https://placehold.co/300x200"
          />
          <h3 class="text-xl font-bold">Тур 03</h3>
          <p>Описание тура</p>
        </div>
        <div class="bg-gray-700 p-4 rounded snap-center flex-shrink-0 w-80">
          <img
            alt="Tour 04"
            class="w-full h-48 object-cover rounded mb-4"
            src="https://placehold.co/300x200"
          />
          <h3 class="text-xl font-bold">Тур 04</h3>
          <p>Описание тура</p>
        </div>
      </div>
    </div>
    <button class="mt-8 px-6 py-2 bg-teal-400 text-black font-bold rounded">
      Заказать индивидуальный тур
    </button>
  </div>
</section>


  <!-- Gallery Section -->
  <section class="py-16 bg-gray-900">
   <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold mb-8">
     ГАЛЕРЕЯ
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
     <div class="bg-gray-700 p-4 rounded">
      <img alt="Gallery Image 1" class="w-full h-48 object-cover rounded mb-4" src="https://placehold.co/300x200"/>
     </div>
     <div class="bg-gray-700 p-4 rounded">
      <img alt="Gallery Image 2" class="w-full h-48 object-cover rounded mb-4" src="https://placehold.co/300x200"/>
     </div>
     <div class="bg-gray-700 p-4 rounded">
      <img alt="Gallery Image 3" class="w-full h-48 object-cover rounded mb-4" src="https://placehold.co/300x200"/>
     </div>
     <div class="bg-gray-700 p-4 rounded">
      <img alt="Gallery Image 4" class="w-full h-48 object-cover rounded mb-4" src="https://placehold.co/300x200"/>
     </div>
     <div class="bg-gray-700 p-4 rounded">
      <img alt="Gallery Image 5" class="w-full h-48 object-cover rounded mb-4" src="https://placehold.co/300x200"/>
     </div>
     <div class="bg-gray-700 p-4 rounded">
      <img alt="Gallery Image 6" class="w-full h-48 object-cover rounded mb-4" src="https://placehold.co/300x200"/>
     </div>
    </div>
    <button class="mt-8 px-6 py-2 bg-teal-400 text-black font-bold rounded">
     Загрузить ещё
    </button>
   </div>
  </section>
  <!-- Contact Section -->
  <section class="py-16 bg-gray-800">
   <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold mb-8">
     ЗАПИСАТЬСЯ В ТУР
    </h2>
    <form class="bg-gray-700 p-8 rounded">
     <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <input class="p-4 bg-gray-800 text-white rounded" placeholder="Ваше имя" type="text"/>
      <input class="p-4 bg-gray-800 text-white rounded" placeholder="Выбрать тур" type="text"/>
     </div>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <input class="p-4 bg-gray-800 text-white rounded" placeholder="Телефон" type="text"/>
      <input class="p-4 bg-gray-800 text-white rounded" type="date"/>
     </div>
     <button class="px-6 py-2 bg-teal-400 text-black font-bold rounded">
      Оставить заявку
     </button>
     <button class="px-6 py-2 bg-gray-600 text-white font-bold rounded ml-4">
      Задать вопрос
     </button>
    </form>
   </div>
  </section>
  <!-- Footer Section -->
  <footer class="py-8 bg-gray-900">
   <div class="container mx-auto text-center">
    <div class="text-white font-bold text-lg mb-4">
     yakimova
    </div>
    <ul class="flex justify-center space-x-4 mb-4">
     <li>
      <a class="text-white" href="#">
       Все туры
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       О нас
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Отзывы
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Контакты
      </a>
     </li>
    </ul>
    <div class="text-white">
     <a class="text-white mx-2" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-white mx-2" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a class="text-white mx-2" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
    </div>
   </div>
  </footer>
 </body>
</html>
