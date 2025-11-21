<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Materials</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="bg-gray-100">
  <nav class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-lg p-1 w-full fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-1">
      <div class="text-base font-semibold text-white">EduRural</div>
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

  <header class="max-w-7xl mx-auto bg-gradient-to-r from-blue-400 to-teal-500 text-white p-16 text-center mb-8">
    <h1 class="text-4xl font-extrabold">Learning Resources for Students</h1>
  </header>

  <div class="max-w-7xl mx-auto p-4">
    <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Upload Learning Materials</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-lg mb-8">
      <input type="file" name="file" class="mb-4 p-3 border border-gray-300 rounded-lg w-full" required>
      <button type="submit" class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white px-6 py-3 rounded-lg hover:bg-indigo-400 transition ease-in-out duration-300">Upload</button>
    </form>

    <h3 class="text-2xl font-semibold text-center mb-4">Available Materials</h3>
    <div class="bg-white rounded-lg shadow-lg p-6">
      <ul class="space-y-4">
        <?php
          $files = scandir("uploads/");
          foreach($files as $file) {
            if ($file != "." && $file != "..") {
              echo "<li><a href='uploads/$file' class='text-indigo-600 hover:underline'>$file</a></li>";
            }
          }
        ?>
      </ul>
    </div>

    <h3 class="text-2xl font-semibold text-center mt-8 mb-4">Download NCERT Textbooks</h3>
    <form action="" method="post" class="bg-white p-8 rounded-lg shadow-lg mb-8">
      <label for="class" class="block text-lg text-indigo-600 mb-2">Select Class:</label>
      <select name="class" id="class" class="mb-4 p-3 border border-gray-300 rounded-lg w-full">
        <option value="6">Class 6</option>
        <option value="7">Class 7</option>
        <option value="8">Class 8</option>
        <option value="9">Class 9</option>
        <option value="10">Class 10</option>
      </select>

      <button type="submit" class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white px-6 py-3 rounded-lg hover:bg-indigo-400 transition ease-in-out duration-300 w-full">Show Textbooks</button>
    </form>

    <?php
    if (isset($_POST['class'])) {
        $class = $_POST['class'];
        echo "<h4 class='text-xl font-semibold text-center mb-4'>Class $class Textbooks</h4>";
        echo "<div class='bg-white p-6 rounded-lg shadow-lg'>";
        echo "<ul class='space-y-4'>";
        $ncert_books = [
            "6" => [
                "Maths" => "path/to/class6-maths.pdf",
                "Science" => "path/to/class6-science.pdf",
                "English" => "path/to/class6-english.pdf"
            ],
            "7" => [
                "Maths" => "path/to/class7-maths.pdf",
                "Science" => "path/to/class7-science.pdf",
                "English" => "path/to/class7-english.pdf"
            ],
            "8" => [
                "Maths" => "path/to/class8-maths.pdf",
                "Science" => "path/to/class8-science.pdf",
                "English" => "path/to/class8-english.pdf"
            ],
            "9" => [
                "Maths" => "path/to/class9-maths.pdf",
                "Science" => "path/to/class9-science.pdf",
                "English" => "path/to/class9-english.pdf"
            ],
            "10" => [
                "Maths" => "path/to/class10-maths.pdf",
                "Science" => "path/to/class10-science.pdf",
                "English" => "path/to/class10-english.pdf"
            ]
        ];

        foreach ($ncert_books[$class] as $subject => $link) {
            echo "<li><a href='$link' class='text-indigo-600 hover:underline' download>$subject - Class $class</a></li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
  </div>

  <footer class="bg-white p-4 mt-8 shadow-lg text-center">
    <p class="text-gray-600">© 2023 EduRural. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>