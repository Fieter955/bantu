<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <!-- Tambahkan tautan stylesheet Tailwind CSS -->
   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-2xl font-semibold">Portofolio</h1>
        <ul class="flex space-x-4">
            <li><a href="index.html" class="text-white">Home</a></li>
            <li><a href="#my-projek" class="text-white">Projects</a></li>
            <li><a href="#contact" class="text-white">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-gray-900 text-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold">Welcome to <span style="color: #6EE7B7;">My Portfolio</span></h2>
        <p class="mt-4 text-lg mx-4">Hello! My name is Fieter Brain Pasaribu, I am a Computer Science student at Universitas Pendidikan Ganesha who has an interest in programming, Machine Learning, and Math.</p>
        <a href="#my-projek" class="mt-8 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg">View My Work</a>
    </div>
</section>

<!-- Projects Section -->
<section class="py-16" id="my-projek">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold text-center">My Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">

            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <a href="projek/in.html">
                    <img src="img/project.jfif" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Calculator</h3>
                        <p class="text-gray-600">I used HTML, CSS, and JavaScript to create this project</p>
                    </div>
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <a href="statistik/index.html">
                    <img src="img/statistika.jpg" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Statistics Calculator</h3>
                        <p class="text-gray-600">I used HTML, Tailwind, and Vue Js to create this project</p>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="img/pengalaman.jfif" alt="pengalaman" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Experience</h3>
                    <p class="text-gray-600">I once participated in a division 1 gemastik competition. The competition gave me a fun experience about programming</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="img/sekolah.jfif" alt="pengalaman" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">SMK N 1 Purwakarta</h3>
                    <p class="text-gray-600">I am class of 2019 majoring in Computer and Network Engineering</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="img/hobi.jfif" alt="pengalaman" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Hobby</h3>
                    <p class="text-gray-600">I've loved playing guitar since I was 8 years old. I feel that I can reduce stress when playing hard</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20" id="contact">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-4">Contact Us</h2>
        <p class="text-gray-600 mx-4">Do you have a project you'd like to discuss? Feel free to contact us.</p>
        <a href="kontak.html" class="mt-8 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md">Contact Us</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto text-center">
        <p class="text-gray-600">&copy; 2023 fieterbrain955@gmail.com</p>
    </div>
</footer>

</body>
</html>
