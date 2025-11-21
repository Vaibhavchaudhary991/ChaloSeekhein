<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rural Education Initiative</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/rural-edu/image/favicon.png">
  <!-- Styles & Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <style>
    /* Custom Animations */
    .animated-gradient {
      background: linear-gradient(-45deg, #3b82f6, #10b981, #6366f1);
      background-size: 400% 400%;
      animation: gradient 8s ease infinite;
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .flip-card {
      perspective: 1000px;
    }

    .flip-card-inner {
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
      backface-visibility: hidden;
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .flip-card-back {
      transform: rotateY(180deg);
    }

    .progress-ring__circle {
      transition: stroke-dashoffset 0.35s;
      transform: rotate(-90deg);
      transform-origin: 50% 50%;
    }

    .parallax {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .emotional-quote {
      position: relative;
    }

    .emotional-quote::before {
      content: '"';
      position: absolute;
      font-size: 120px;
      font-family: Georgia, serif;
      color: rgba(59, 130, 246, 0.1);
      top: -40px;
      left: -20px;
      line-height: 0;
    }

    .emotional-quote::after {
      content: '"';
      position: absolute;
      font-size: 120px;
      font-family: Georgia, serif;
      color: rgba(59, 130, 246, 0.1);
      bottom: -80px;
      right: -20px;
      line-height: 0;
    }

    .hover-zoom {
      transition: transform 0.3s ease;
    }

    .hover-zoom:hover {
      transform: scale(1.03);
    }

    .story-card {
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .story-card:hover {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      transform: translateY(-5px);
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">

  <!-- Navigation -->
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

  <!-- Hero Section with Emotional Video Background -->
  <header class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
      <video autoplay muted loop class="w-full h-full object-cover">
        <source src="/rural-edu/video/hero-video.mp4" type="video/mp4">
        <img src="/rural-edu/image/hero-fallback.jpg" alt="Children learning" class="w-full h-full object-cover">
      </video>
      <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="relative z-10 text-center px-4" data-aos="fade-up">
      <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Every Child Deserves a Chance</h1>
      <p class="text-xl md:text-2xl text-white mb-8 max-w-3xl mx-auto">Together, we're breaking barriers to education in rural communities</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="teacher-signup.php" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg">
          <i class="fas fa-hands-helping mr-2"></i> Become a Volunteer
        </a>
        <a href="#stories" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-blue-600 transition duration-300 transform hover:scale-105">
          <i class="fas fa-heart mr-2"></i> Hear Their Stories
        </a>
      </div>
    </div>
    <a href="#mission" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
      <i class="fas fa-chevron-down text-white text-3xl"></i>
    </a>
    <img src="/ChaloSeekhein\image\img4.png" alt="Inspiring Education" class="absolute inset-0 w-full h-full object-cover opacity-100">
  </header>

  <!-- Emotional Quote Section -->
  <section class="py-16 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4 text-center" data-aos="fade-up">
      <blockquote class="emotional-quote text-2xl md:text-3xl font-light text-blue-800 italic">
        Education is the most powerful weapon which you can use to change the world.
        In rural India, this weapon is often out of reach. We're here to change that.
      </blockquote>
      <p class="mt-8 text-blue-600 font-semibold">— EduRural, Founder</p>
    </div>
  </section>

  <!-- Mission Section -->
<!-- Mission Section -->
<section id="mission" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">Our Mission</h2>
      <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
      <p class="text-lg text-gray-600 max-w-4xl mx-auto">
        We're committed to transforming rural education through technology, teacher training, and community engagement.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div data-aos="fade-right" class="rounded-xl overflow-hidden shadow-xl hover-zoom">
        <div class="relative aspect-w-16 aspect-h-9">
          <iframe class="w-full" height="315" src="https://www.youtube.com/embed/QYgr_p_AXRA?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
      </div>

      <div data-aos="fade-left">
        <div class="space-y-6">
          <div class="flex items-start">
            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full mr-4">
              <i class="fas fa-book-open text-blue-600 text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Quality Education</h3>
              <p class="text-gray-600 mt-1">Providing access to world-class learning materials tailored for rural contexts.</p>
            </div>
          </div>

          <div class="flex items-start">
            <div class="flex-shrink-0 bg-green-100 p-3 rounded-full mr-4">
              <i class="fas fa-laptop-code text-green-600 text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Digital Literacy</h3>
              <p class="text-gray-600 mt-1">Bridging the technology gap with innovative digital solutions.</p>
            </div>
          </div>

          <div class="flex items-start">
            <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full mr-4">
              <i class="fas fa-chalkboard-teacher text-yellow-600 text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Teacher Empowerment</h3>
              <p class="text-gray-600 mt-1">Training educators to deliver impactful lessons in low-resource settings.</p>
            </div>
          </div>

          <div class="flex items-start">
            <div class="flex-shrink-0 bg-purple-100 p-3 rounded-full mr-4">
              <i class="fas fa-hands-helping text-purple-600 text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Community Engagement</h3>
              <p class="text-gray-600 mt-1">Working with local communities to create sustainable education models.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Impact Stats Section -->
  <section class="py-20 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Impact</h2>
        <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
        <p class="text-lg max-w-4xl mx-auto opacity-90">
          Transforming lives through education in rural communities across the country
        </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="flex justify-center mb-4">
            <svg class="progress-ring w-24 h-24" viewBox="0 0 100 100">
              <circle class="progress-ring__circle-bg" stroke="#EFF6FF" stroke-width="6" fill="transparent" r="40" cx="50" cy="50" />
              <circle class="progress-ring__circle" stroke="#FFFFFF" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="75.36" fill="transparent" r="40" cx="50" cy="50" />
            </svg>
            <div class="absolute flex flex-col justify-center h-24">
              <span class="text-3xl font-bold counter" data-target="12500">0</span>
              <span class="text-sm">+</span>
            </div>
          </div>
          <h3 class="text-xl font-semibold">Students Reached</h3>
          <p class="text-sm opacity-80 mt-2">That's 12500 dreams we're helping to nurture</p>
        </div>

        <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
          <div class="flex justify-center mb-4">
            <svg class="progress-ring w-24 h-24" viewBox="0 0 100 100">
              <circle class="progress-ring__circle-bg" stroke="#EFF6FF" stroke-width="6" fill="transparent" r="40" cx="50" cy="50" />
              <circle class="progress-ring__circle" stroke="#FFFFFF" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="100.48" fill="transparent" r="40" cx="50" cy="50" />
            </svg>
            <div class="absolute flex flex-col justify-center h-24">
              <span class="text-3xl font-bold counter" data-target="850">0</span>
              <span class="text-sm">+</span>
            </div>
          </div>
          <h3 class="text-xl font-semibold">Teachers Trained</h3>
          <p class="text-sm opacity-80 mt-2">Empowering educators to change lives</p>
        </div>

        <div class="text-center" data-aos="zoom-in" data-aos-delay="300">
          <div class="flex justify-center mb-4">
            <svg class="progress-ring w-24 h-24" viewBox="0 0 100 100">
              <circle class="progress-ring__circle-bg" stroke="#EFF6FF" stroke-width="6" fill="transparent" r="40" cx="50" cy="50" />
              <circle class="progress-ring__circle" stroke="#FFFFFF" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="125.6" fill="transparent" r="40" cx="50" cy="50" />
            </svg>
            <div class="absolute flex flex-col justify-center h-24">
              <span class="text-3xl font-bold counter" data-target="150">0</span>
              <span class="text-sm">+</span>
            </div>
          </div>
          <h3 class="text-xl font-semibold">Schools Supported</h3>
          <p class="text-sm opacity-80 mt-2">Creating havens of learning</p>
        </div>

        <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
          <div class="flex justify-center mb-4">
            <svg class="progress-ring w-24 h-24" viewBox="0 0 100 100">
              <circle class="progress-ring__circle-bg" stroke="#EFF6FF" stroke-width="6" fill="transparent" r="40" cx="50" cy="50" />
              <circle class="progress-ring__circle" stroke="#FFFFFF" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="175.84" fill="transparent" r="40" cx="50" cy="50" />
            </svg>
            <div class="absolute flex flex-col justify-center h-24">
              <span class="text-3xl font-bold counter" data-target="25">0</span>
              <span class="text-sm">+</span>
            </div>
          </div>
          <h3 class="text-xl font-semibold">Villages Impacted</h3>
          <p class="text-sm opacity-80 mt-2">Transforming entire communities</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Emotional Story Section -->
  <section id="stories" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">Their Stories, Our Inspiration</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-4xl mx-auto">
          Real lives changed through education
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Story 1 -->
        <div class="bg-white rounded-xl overflow-hidden story-card" data-aos="fade-up" data-aos-delay="100">
          <div class="h-64 overflow-hidden relative">
            <img src="/ChaloSeekhein\image\rahulimg1.png" alt="Rahul's story" class="w-full h-100 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-xl font-bold text-white">Rahul's Journey</h3>
              <p class="text-blue-200">From farm to first in class</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">"I used to help my father in the fields before school. Now I have a tablet with all my study materials and scored 95% in my 10th boards!"</p>
            <div class="flex items-center">
              <img src="/ChaloSeekhein\image\rahulimg1.png" alt="Rahul" class="w-10 h-10 rounded-full mr-3">
              <div>
                <p class="font-semibold">Rahul Kumar</p>
                <p class="text-sm text-gray-500">Class 10 Student, Bihar</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 2 -->
        <div class="bg-white rounded-xl overflow-hidden story-card" data-aos="fade-up" data-aos-delay="200">
          <div class="h-64 overflow-hidden relative">
            <img src="/ChaloSeekhein\image\priyaimg2.png" alt="Priya's story" class="w-full h-55 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-xl font-bold text-white">Priya's Transformation</h3>
              <p class="text-blue-200">A teacher's revolution</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">"After the training, my students' pass rate went from 45% to 92%. I never knew I could make such a difference with these new teaching methods."</p>
            <div class="flex items-center">
              <img src="/ChaloSeekhein\image\priyaimg2.png" alt="Priya" class="w-10 h-10 rounded-full mr-3">
              <div>
                <p class="font-semibold">Priya Sharma</p>
                <p class="text-sm text-gray-500">Teacher, Rajasthan</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 3 -->
        <div class="bg-white rounded-xl overflow-hidden story-card" data-aos="fade-up" data-aos-delay="300">
          <div class="h-64 overflow-hidden relative">
            <img src="/ChaloSeekhein\image\vijayimg3.png" alt="Village story" class="w-full h-45 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-xl font-bold text-white">A Village Changed</h3>
              <p class="text-blue-200">Education transforms all</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">"Our village used to have 70% dropout rate. Now we have our first college students and a digital center that serves 200 families."</p>
            <div class="flex items-center">
              <img src="/ChaloSeekhein\image\vijayimg3.png" alt="Village elder" class="w-10 h-10 rounded-full mr-3">
              <div>
                <p class="font-semibold">Vijay Patel</p>
                <p class="text-sm text-gray-500">Village Elder, Gujarat</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-12" data-aos="fade-up">
        <a href="community.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
          <i class="fas fa-book-open mr-2"></i> Read More Stories
        </a>
      </div>
    </div>
  </section>

  <!-- Interactive Map Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">Our Reach</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-4xl mx-auto">
          See where we're making an impact across rural India
        </p>
      </div>

      <!-- <div class="bg-gray-100 rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
        <div id="map" class="h-96 w-full"></div>
      </div> -->

      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up">
        <div class="bg-blue-50 p-6 rounded-lg hover-zoom">
          <div class="flex items-center mb-3">
            <div class="bg-blue-100 p-2 rounded-lg mr-4">
              <i class="fas fa-map-marker-alt text-blue-600"></i>
            </div>
            <h3 class="font-bold text-lg text-blue-800">Northern Region</h3>
          </div>
          <p class="text-gray-600">25 schools in Uttar Pradesh and Bihar</p>
          <p class="text-gray-600">3,200 students impacted</p>
        </div>
        <div class="bg-green-50 p-6 rounded-lg hover-zoom">
          <div class="flex items-center mb-3">
            <div class="bg-green-100 p-2 rounded-lg mr-4">
              <i class="fas fa-map-marker-alt text-green-600"></i>
            </div>
            <h3 class="font-bold text-lg text-green-800">Western Region</h3>
          </div>
          <p class="text-gray-600">18 schools in Rajasthan and Gujarat</p>
          <p class="text-gray-600">2,500 students impacted</p>
        </div>
        <div class="bg-yellow-50 p-6 rounded-lg hover-zoom">
          <div class="flex items-center mb-3">
            <div class="bg-yellow-100 p-2 rounded-lg mr-4">
              <i class="fas fa-map-marker-alt text-yellow-600"></i>
            </div>
            <h3 class="font-bold text-lg text-yellow-800">Southern Region</h3>
          </div>
          <p class="text-gray-600">12 schools in Karnataka and Tamil Nadu</p>
          <p class="text-gray-600">1,800 students impacted</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Emotional Call to Action -->
  <section class="py-20 bg-blue-600 text-white relative overflow-hidden">
    <div class="absolute inset-0">
      <img src="/rural-edu/image/cta-bg.jpg" alt="Children smiling" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">You Can Change a Life Today</h2>
        <p class="text-xl max-w-3xl mx-auto mb-8">
          For just ₹500 a month, you can sponsor a child's education and give them the gift of a brighter future
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
          <div class="bg-white bg-opacity-10 p-6 rounded-xl border border-white border-opacity-20 backdrop-blur-sm" data-aos="fade-up" data-aos-delay="100">
            <div class="flex justify-center mb-4">
              <i class="fas fa-book text-3xl text-blue-300"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Sponsor a Child</h3>
            <p class="mb-4">Provide school supplies and digital access for one student</p>
            <button class="bg-white text-blue-600 px-6 py-2 rounded-full font-bold hover:bg-gray-100 transition duration-300 w-full">
              ₹500/month
            </button>
          </div>

          <div class="bg-white bg-opacity-20 p-6 rounded-xl border border-white border-opacity-20 backdrop-blur-sm transform scale-105" data-aos="fade-up" data-aos-delay="200">
            <div class="flex justify-center mb-4">
              <i class="fas fa-chalkboard-teacher text-3xl text-blue-300"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Train a Teacher</h3>
            <p class="mb-4">Sponsor professional development for rural educators</p>
            <button class="bg-white text-blue-600 px-6 py-2 rounded-full font-bold hover:bg-gray-100 transition duration-300 w-full">
              ₹2,500/month
            </button>
          </div>

          <div class="bg-white bg-opacity-10 p-6 rounded-xl border border-white border-opacity-20 backdrop-blur-sm" data-aos="fade-up" data-aos-delay="300">
            <div class="flex justify-center mb-4">
              <i class="fas fa-school text-3xl text-blue-300"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Equip a Classroom</h3>
            <p class="mb-4">Provide digital tools for an entire class</p>
            <button class="bg-white text-blue-600 px-6 py-2 rounded-full font-bold hover:bg-gray-100 transition duration-300 w-full">
              ₹10,000/month
            </button>
          </div>
        </div>

        <p class="text-sm opacity-80 mt-8">All donations are tax-exempt under 80G of the Income Tax Act</p>
      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="bg-blue-50 rounded-xl p-8 shadow-md" data-aos="fade-up">
        <h2 class="text-2xl md:text-3xl font-bold text-blue-800 mb-4">Join Our Movement</h2>
        <p class="text-gray-600 mb-6">Subscribe to receive inspiring stories of change and updates on our work</p>

        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
          <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 whitespace-nowrap">
            <i class="fas fa-envelope mr-2"></i> Subscribe
          </button>
        </form>

        <p class="text-sm text-gray-500 mt-4">We respect your privacy. Unsubscribe at any time.</p>
      </div>
    </div>
  </section>

  Footer
  <footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
        <div>
          <div class="flex items-center mb-4">
            <img src="/ChaloSeekhein\image\EduR.png" alt="EduRural Logo" class="h-10 w-10 mr-2">
            <div class="text-xl font-bold">EduRural</div>
          </div>
          <p class="text-gray-400 mb-4">Empowering rural communities through education since 2015.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Programs</h3>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Digital Classrooms</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Teacher Training</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Community Centers</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Girl Child Education</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Vocational Training</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Get Involved</h3>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Volunteer</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Donate</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Partner With Us</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Careers</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Internships</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
          <address class="not-italic text-gray-400">
            <p class="mb-2">EduRural Foundation</p>
            <p class="mb-2">123 Education Lane</p>
            <p class="mb-2">Bangalore, Karnataka 560001</p>
            <p class="mb-2">India</p>
            <p class="mb-2"><a href="mailto:info@edurural.org" class="hover:text-white transition duration-300">info@edurural.org</a></p>
            <p><a href="tel:+919876543210" class="hover:text-white transition duration-300">+91 98765 43210</a></p>
          </address>
        </div>
      </div>

      <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2025 EduRural Foundation. All rights reserved.</p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Privacy Policy</a>
          <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Terms of Service</a>
          <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    // Initialize AOS animations
    AOS.init({
      duration: 800,
      easing: 'ease-in-out-quad',
      once: true,
      offset: 120
    });

    // Mobile menu toggle
    $('#mobile-menu-button').click(function() {
      $('#mobile-menu').slideToggle();
    });

    // Animated counters
    $('.counter').each(function() {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).data('target')
      }, {
        duration: 2000,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('opacity-0', 'invisible');
        backToTopButton.classList.add('opacity-100', 'visible');
      } else {
        backToTopButton.classList.remove('opacity-100', 'visible');
        backToTopButton.classList.add('opacity-0', 'invisible');
      }
    });
    backToTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Google Maps with error handling
    function initMap() {
      try {
        const indiaCenter = {
          lat: 20.5937,
          lng: 78.9629
        };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 5,
          center: indiaCenter,
          styles: [{
              "featureType": "poi",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "transit",
              "stylers": [{
                "visibility": "off"
              }]
            }
          ]
        });

        // Sample markers - replace with your actual locations
        const locations = [{
            lat: 19.0760,
            lng: 72.8777,
            title: "Mumbai Center",
            icon: "/rural-edu/image/map-marker-blue.png"
          },
          {
            lat: 28.6139,
            lng: 77.2090,
            title: "Delhi Center",
            icon: "/rural-edu/image/map-marker-green.png"
          },
          {
            lat: 12.9716,
            lng: 77.5946,
            title: "Bengaluru Center",
            icon: "/rural-edu/image/map-marker-red.png"
          },
          {
            lat: 22.5726,
            lng: 88.3639,
            title: "Kolkata Center",
            icon: "/rural-edu/image/map-marker-yellow.png"
          },
          {
            lat: 17.3850,
            lng: 78.4867,
            title: "Hyderabad Center",
            icon: "/rural-edu/image/map-marker-purple.png"
          }
        ];

        const bounds = new google.maps.LatLngBounds();

        locations.forEach(loc => {
          const marker = new google.maps.Marker({
            position: loc,
            map: map,
            title: loc.title,
            icon: loc.icon
          });
          bounds.extend(marker.getPosition());
        });

        // Fit map to markers
        map.fitBounds(bounds);

      } catch (error) {
        console.error("Map initialization error:", error);
        document.getElementById("map").innerHTML = `
          <div class="flex flex-col items-center justify-center h-full text-center p-8">
            <i class="fas fa-map-marked-alt text-4xl text-gray-400 mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">Map Unavailable</h3>
            <p class="text-gray-500">We couldn't load the map at this time. Please check back later.</p>
          </div>
        `;
      }
    }

    function loadGoogleMaps() {
      if (!document.querySelector('script[src*="maps.googleapis.com"]')) {
        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap`;
        script.async = true;
        script.defer = true;
        script.onerror = () => {
          document.getElementById("map").innerHTML = `
            <div class="flex flex-col items-center justify-center h-full text-center p-8">
              <i class="fas fa-exclamation-triangle text-4xl text-red-400 mb-4"></i>
              <h3 class="text-xl font-semibold text-gray-700 mb-2">Failed to Load Map</h3>
              <p class="text-gray-500">Please check your internet connection and try again.</p>
            </div>
          `;
        };
        document.body.appendChild(script);
      }
    }

    // Load map when other content is ready
    window.addEventListener('load', loadGoogleMaps);
  </script>

  <!-- Tawk.to Chat Widget -->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/67fd580403705119092a7310/1ioqpvlcc';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
</body>

</html>