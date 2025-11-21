<!DOCTYPE html>
<html>
<head>
  <title>Video Classes</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-green-800 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="/ChaloSeekhein\image\EduR.png" alt="EduRural Logo" class="h-10 w-10">
        <div class="text-xl font-bold text-white">EduRural</div>
      </div>
      <div class="hidden md:flex space-x-6">
        <a href="index.php" class="text-white hover:text-blue-200 transition duration-300">Home</a>
        <a href="learning-materials.php" class="text-white hover:text-blue-200 transition duration-300">Materials</a>
        <a href="video-classes.php" class="text-white hover:text-blue-200 transition duration-300">Video Classes</a>
        <a href="teacher-signup.php" class="text-white hover:text-blue-200 transition duration-300">Volunteer</a>
       
        <a href="community.php" class="text-white hover:text-blue-200 transition duration-300">Community</a>
        <a href="contact.php" class="text-white hover:text-blue-200 transition duration-300">Contact</a>
        <a href="state-education-data.php" class="text-white hover:text-blue-200 transition duration-300">Education Stats</a>
      </div>
      <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-blue-700" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="index.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Home</a>
        <a href="learning-materials.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Materials</a>
        <a href="teacher-signup.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Volunteer</a>
        <a href="video-classes.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Video Classes</a>
        <a href="community.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Community</a>
        <a href="contact.php" class="block px-3 py-2 text-white hover:bg-blue-600 rounded-md">Contact</a>
      </div>
    </div>
  </nav>

<!-- Hero Section -->
<header class="bg-gradient-to-r from-blue-400 to-teal-500 text-white p-16 text-center">
  <h1 class="text-4xl font-extrabold">📺 Recorded Video Classes</h1>
  <p class="text-lg text-gray-200 mt-2">Learn anytime, anywhere — curated lessons for Class 6 to 10</p>
</header>

<!-- Class Filter (Static for now) -->
<section class="text-center mt-8">
  <h2 class="text-xl font-semibold text-gray-800 mb-4">Select Class</h2>
  <div class="flex justify-center space-x-4">
    <button class="filter-btn bg-white border px-4 py-2 rounded-lg shadow hover:bg-blue-100" data-filter="6">Class 6</button>
    <button class="filter-btn bg-white border px-4 py-2 rounded-lg shadow hover:bg-blue-100" data-filter="7">Class 7</button>
    <button class="filter-btn bg-white border px-4 py-2 rounded-lg shadow hover:bg-blue-100" data-filter="8">Class 8</button>
    <button class="filter-btn bg-white border px-4 py-2 rounded-lg shadow hover:bg-blue-100" data-filter="9">Class 9</button>
    <button class="filter-btn bg-white border px-4 py-2 rounded-lg shadow hover:bg-blue-100" data-filter="10">Class 10</button>
  </div>
</section>

<!-- Video Grid -->
<section class="max-w-7xl mx-auto mt-10 px-4">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Class 8 Videos -->
    <div class="bg-white rounded-xl shadow-md p-4" data-class="8">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhVOsmCnhoLeUZ-bUFLM0Ijy" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 8 - Math Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="8">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhV8K8NiJrFoMSwa_34UDMdg" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 8 - Science Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="8">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhWWdPx33Fo55ivvR1K-NyDS" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 8 - English Full Playlist</h3>
    </div>

    <!-- Other Classes' Videos -->
    <!-- Class 6 Videos -->
    <div class="bg-white rounded-xl shadow-md p-4" data-class="6">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhVW0kq-KxnSKh5P3OEN9eYD" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 6 - Math Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="6">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLt3jBqzh-BOrn7bK5cl3lG6gIQcjs1hPd" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 6 - Science Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="6">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/iuVibieyLug" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 6 - English: Who Did Patrick's Homework?</h3>
    </div>

    <!-- Class 7 Videos -->
    <div class="bg-white rounded-xl shadow-md p-4" data-class="7">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhVgT5aM-GRuQHnzthwllEHq" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 7 - Math Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="7">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhX0al4r0kMB03thG0YJU4ER" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 7 - Science Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="7">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhXDLfV1D9jLkfcCuIpdsLXE" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 7 - English Full Playlist</h3>
    </div>

    <!-- Class 9 Videos -->
    <div class="bg-white rounded-xl shadow-md p-4" data-class="9">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhW1YSpUGOUrqAu7SvJCaZNQ" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 9 - Math Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="9">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhUgNkSyuuyuE1ex8CiDhffJ" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 9 - Science Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="9">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhWvnzQBSVOj14dJlH6YeoQc" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 9 - English Full Playlist</h3>
    </div>

    <!-- Class 10 Videos -->
    <div class="bg-white rounded-xl shadow-md p-4" data-class="10">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhWWrcBpiObFgt4srjavj-Gz" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 10 - Math Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="10">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhUsgGOhJ4d0x5Ya9dT_W-7A" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 10 - Science Full Playlist</h3>
    </div>
    <div class="bg-white rounded-xl shadow-md p-4" data-class="10">
      <iframe class="w-full h-56 rounded-lg" src="https://www.youtube.com/embed/videoseries?list=PLVLoWQFkZbhVGeoo-eZSYwbd-zHpjxKSu" allowfullscreen></iframe>
      <h3 class="mt-2 text-lg font-semibold text-gray-700">Class 10 - English Full Playlist</h3>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center text-gray-500 text-sm mt-16">
  <p>© 2025 EduRural. All rights reserved.</p>
</footer>

<script>
  document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
      const selectedClass = button.getAttribute('data-filter');
      document.querySelectorAll('[data-class]').forEach(card => {
        card.style.display = card.getAttribute('data-class') === selectedClass ? 'block' : 'none';
      });
    });
  });
</script>
</body>
</html>