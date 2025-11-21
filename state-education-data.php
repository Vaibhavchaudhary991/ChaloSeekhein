<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>State-Wise Education Data - EduRural</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .animate-fadeIn {
      animation: fadeIn 1.2s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-900">
  <nav class="bg-green-800 bg-opacity-90 backdrop-blur-md shadow-lg sticky top-0 z-50 transition duration-300">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="/ChaloSeekhein/image/EduR.png" alt="EduRural Logo" class="h-10 w-10">
        <div class="text-xl font-bold text-white">EduRural</div>
      </div>
      <div class="hidden md:flex space-x-6">
        <a href="index.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Home</a>
        <a href="learning-materials.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Materials</a>
        <a href="video-classes.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Video Classes</a>
        <a href="teacher-signup.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Volunteer</a>
        <a href="community.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Community</a>
        <a href="contact.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Contact</a>
        <a href="state-education-data.php" class="relative text-white hover:text-blue-200 transition duration-300 after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Education Stats</a>
      </div>
      <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
        <svg id="menu-icon" class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 4h16M2 10h16M2 16h16"/></svg>
      </button>
    </div>
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

  <header class="bg-red-600 text-white p-4 text-center text-2xl font-bold shadow-md">
    State-Wise Education Data
  </header>

  <main class="p-6 max-w-6xl mx-auto">
    <section class="mb-8 animate-fadeIn">
      <h2 class="text-xl font-semibold mb-2">Why This Matters</h2>
      <p class="text-gray-700">
        This page highlights disparities in education across different states of India, showcasing the need for targeted educational
        development in rural areas.
      </p>
    </section>

    <section class="mb-8">
      <img src="../ChaloSeekhein/image/educ5.jpg" alt="Education Awareness" class="rounded-lg shadow-md w-full max-w-4xl mx-auto mb-6 animate-fadeIn" />
      <img src="../ChaloSeekhein/image/download.jpeg" alt="Classroom in rural area" class="rounded-lg shadow-md w-full max-w-4xl mx-auto animate-fadeIn" />
    </section>

    <section class="mb-8 animate-fadeIn">
      <h2 class="text-xl font-semibold mb-4">Literacy Rates (State-wise)</h2>
      <canvas id="literacyChart" class="w-full max-w-4xl mx-auto"></canvas>
    </section>

    <section class="mb-8 animate-fadeIn">
      <h2 class="text-xl font-semibold mb-4">Dropout Rates (State-wise)</h2>
      <canvas id="dropoutChart" class="w-full max-w-4xl mx-auto"></canvas>
    </section>

    <section class="mb-8 animate-fadeIn">
      <h2 class="text-xl font-semibold mb-4">School Infrastructure by State</h2>
      <p class="text-gray-700">This data represents the availability of essential infrastructure in schools across India.</p>
      <ul class="list-disc list-inside text-blue-600">
        <li>Electricity Availability</li>
        <li>Internet Access</li>
        <li>Toilets and Sanitation Facilities</li>
      </ul>
    </section>

    <section class="mb-8 animate-fadeIn">
      <h2 class="text-xl font-semibold mb-4">Gross Enrollment Ratio (GER)</h2>
      <canvas id="enrollmentChart" class="w-full max-w-4xl mx-auto"></canvas>
    </section>

    <section class="mb-8 animate-fadeIn">
      <h2 class="text-xl font-semibold mb-4">Useful Sources</h2>
      <ul class="list-disc list-inside text-blue-600">
        <li><a href="https://data.gov.in/sector/Education" target="_blank">Open Government Data Platform - Education</a></li>
        <li><a href="https://www.education.gov.in/statistics-new" target="_blank">Ministry of Education Statistics</a></li>
        <li><a href="https://www.mospi.gov.in" target="_blank">Ministry of Statistics and Programme Implementation</a></li>
        <li><a href="https://www.indiastat.com" target="_blank">Indiastat</a></li>
      </ul>
    </section>
  </main>

  <script>
    const literacyChart = new Chart(document.getElementById('literacyChart').getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Kerala', 'Delhi', 'Maharashtra', 'Bihar', 'Uttar Pradesh', 'Rajasthan'],
        datasets: [{
          label: 'Literacy Rate (%)',
          data: [94, 89, 87, 70, 73, 69],
          backgroundColor: 'rgba(59, 130, 246, 0.7)',
          borderColor: 'rgba(59, 130, 246, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: { y: { beginAtZero: true, max: 100 } }
      }
    });

    const dropoutChart = new Chart(document.getElementById('dropoutChart').getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Kerala', 'Delhi', 'Maharashtra', 'Bihar', 'Uttar Pradesh', 'Rajasthan'],
        datasets: [{
          label: 'Dropout Rate (%)',
          data: [6, 4, 5, 15, 10, 12],
          backgroundColor: 'rgba(255, 99, 132, 0.7)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: { y: { beginAtZero: true, max: 20 } }
      }
    });

    const enrollmentChart = new Chart(document.getElementById('enrollmentChart').getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Kerala', 'Delhi', 'Maharashtra', 'Bihar', 'Uttar Pradesh', 'Rajasthan'],
        datasets: [{
          label: 'Enrollment Rate (%)',
          data: [95, 88, 92, 75, 80, 77],
          backgroundColor: 'rgba(75, 192, 192, 0.7)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: { y: { beginAtZero: true, max: 100 } }
      }
    });
  </script>
  <script>
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      menuIcon.innerHTML = mobileMenu.classList.contains('hidden')
        ? '<path d="M2 4h16M2 10h16M2 16h16"/>'
        : '<path d="M4.293 4.293l11.414 11.414m0-11.414L4.293 15.707"/>';
    });
  </script>
</body>

</html>