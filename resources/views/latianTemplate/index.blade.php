<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <title>Landing Page</title>
</head>

<body class="bg-gray-200 font-sans">
    <!-- Navbar -->
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">My Website</div>
            <div class="hidden md:flex space-x-4">
                <a href="#" class="hover:text-gray-300">Home</a>
                <a href="#" class="hover:text-gray-300">About</a>
                <a href="#" class="hover:text-gray-300">Services</a>
                <a href="#" class="hover:text-gray-300">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="bg-gray-800 text-white h-screen w-64 fixed top-0 left-0">
        <div class="p-4">
            <h2 class="text-2xl font-bold mb-4">Sidebar</h2>
            <ul>
                <li><a href="#" class="block py-2 hover:text-gray-300">Dashboard</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Analytics</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Reports</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Settings</a></li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-4xl font-bold">Welcome to My Website</h1>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis non arcu vehicula lacinia.</p>
        </header>

        <!-- Main Content Section -->
        <section class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis non arcu vehicula lacinia.</p>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js"></script>
</body>

</html>
