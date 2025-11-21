<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volunteer Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white shadow-lg fixed top-0 left-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-4 py-2 flex justify-between">
    <div class="text-lg font-semibold text-white">EduRural</div>
    <div class="space-x-6 text-lg">
      <a href="index.php" class="hover:text-gray-200">Home</a>
      <a href="learning-materials.php" class="hover:text-gray-200">Materials</a>
      <a href="teacher-signup.php" class="hover:text-gray-200">Volunteer</a>
      <a href="video-classes.php" class="hover:text-gray-200">Video Classes</a>
      <a href="community.php" class="hover:text-gray-200">Community</a>
      <a href="contact.php" class="hover:text-gray-200">Contact</a>
    </div>
  </div>
</nav>
<div class="h-20"></div>

<!-- Hero Section -->
<header class="bg-gradient-to-r from-blue-400 to-teal-500 text-white p-16">
  <h1 class="text-4xl font-extrabold text-center">Become a Volunteer Teacher</h1>
  <p class="text-lg text-center mt-4">Your knowledge can change lives! Join us in empowering students in rural areas.</p>
</header>

<!-- Form Section -->
<div class="max-w-3xl mx-auto p-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Sign up as a Teacher</h2>
  <form id="signupForm" class="bg-white p-8 rounded-xl shadow-xl space-y-6">
    <div class="space-y-2">
      <label for="name" class="block text-lg font-medium text-gray-700">Full Name</label>
      <input type="text" name="name" id="name" placeholder="Enter your full name" class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
      <label for="subject" class="block text-lg font-medium text-gray-700">Teaching Subject</label>
      <input type="text" name="subject" id="subject" placeholder="Enter the subject you wish to teach" class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
      <label for="email" class="block text-lg font-medium text-gray-700">Email Address</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
      <label for="phone" class="block text-lg font-medium text-gray-700">Phone Number</label>
      <input type="tel" name="phone" id="phone" placeholder="Enter your contact number" class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
      <label for="timing" class="block text-lg font-medium text-gray-700">Preferred Time Slot</label>
      <select name="timing" id="timing" class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300">
        <option value="morning">Morning</option>
        <option value="afternoon">Afternoon</option>
        <option value="evening">Evening</option>
        <option value="flexible">Flexible</option>
      </select>
    </div>

    <div class="space-y-2">
      <label for="qualification" class="block text-lg font-medium text-gray-700">Qualification</label>
      <input type="text" name="qualification" id="qualification" placeholder="Enter your educational qualification" class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
      <label class="block text-lg font-medium text-gray-700">Available Days</label>
      <div class="flex flex-wrap gap-3">
        <label><input type="checkbox" name="days[]" value="Monday"> Monday</label>
        <label><input type="checkbox" name="days[]" value="Tuesday"> Tuesday</label>
        <label><input type="checkbox" name="days[]" value="Wednesday"> Wednesday</label>
        <label><input type="checkbox" name="days[]" value="Thursday"> Thursday</label>
        <label><input type="checkbox" name="days[]" value="Friday"> Friday</label>
        <label><input type="checkbox" name="days[]" value="Saturday"> Saturday</label>
        <label><input type="checkbox" name="days[]" value="Sunday"> Sunday</label>
      </div>
    </div>

    <div class="space-y-2">
      <label for="reason" class="block text-lg font-medium text-gray-700">Why do you want to volunteer?</label>
      <textarea name="reason" id="reason" rows="3" placeholder="Share a few lines..." class="block w-full p-4 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300"></textarea>
    </div>

    <div class="text-center">
      <button type="submit" class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-lg rounded-lg shadow-sm transition duration-300">
        Submit
      </button>
    </div>
  </form>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white text-center p-4 mt-10">
  <p>© 2025 EduRural. All rights reserved.</p>
</footer>

<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#signupForm').on('submit', function(e) {
    e.preventDefault();
    $.post('save-teacher.php', $(this).serialize(), function(data) {
      alert(data);
    });
  });
</script>

</body>
</html>