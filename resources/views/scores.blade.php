<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex flex-col min-h-screen" id="app" :class="{ 'overflow-hidden max-h-screen': sidebarVisible }">


    <!-- Navbar section -->
    <nav class="bg-gray-800 p-4 text-white">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-white font-semibold text-xl">Fieter Statistik</div>
            <div class="hidden lg:flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-400">Data Tunggal</a>
                <a href="#" class="text-white hover:text-gray-400">Data Kelompok</a>
            </div>
            <!-- Tombol Menu untuk Menampilkan/Sembunyikan Sidebar -->
            <button @click="toggleSidebar" class="lg:hidden text-white focus:outline-none z-10">
                ☰ Menu
            </button>
        </div>
    </nav>

    <!-- Sidebar and main content section -->
    <div class="flex flex-col lg:flex-row flex-1 h-full" >
        <!-- Sidebar -->
        <aside :class="{ 'fixed inset-0 overflow-hidden z-9': sidebarVisible, 'hidden': !sidebarVisible }" class="bg-gray-900 text-white flex flex-col h-full w-full lg:w-64">
            <div class="p-4">
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Dashboard</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Data Tunggal</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Data Kelompok</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 p-8">
            <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-lg">
                <h1 class="text-3xl font-semibold mb-6 text-center">Daftar Skor</h1>

                <table class="w-full mb-6">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nomer</th>
                            <th class="py-2 px-4 border-b">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($scores as $score)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ $score->number }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $score->skor }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2 class="text-xl font-semibold mb-4">Cari Skor</h2>
                <form method="post" action="/scores/search" class="mb-6">
                    @csrf
                    <div class="mb-4">
                        <label for="skor" class="mr-4 self-center block">Skor:</label>
                        <input type="text" name="skor" class="py-2 px-4 border rounded focus:outline-none focus:ring focus:border-blue-300 w-full">
                        <button type="submit" class="py-2 px-6 mt-4 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Cari</button>
                    </div>
                </form>

                <h2 class="text-xl font-semibold mb-4">Tambah Skor Baru</h2>
                <form method="post" action="/scores/add" class="mb-6">
                    @csrf
                    <div class="flex flex-col mb-4">
                        <div class="mb-4">
                            <label for="nomor" class="block mb-1">Nomer:</label>
                            <input type="number" name="nomor" class="w-full py-2 px-4 border rounded focus:outline-none focus:ring focus:border-blue-300">
                        </div>
                        <div>
                            <label for="skor" class="block mb-1">Skor:</label>
                            <input type="number" name="skor" class="w-full py-2 px-4 border rounded focus:outline-none focus:ring focus:border-blue-300">
                        </div>
                    </div>

                    <button type="submit" class="py-2 px-6 bg-green-500 text-white rounded hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">Tambah Skor</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer section -->
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">&copy; 2023 fieterbrain955@gmail.com</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js"></script>
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    sidebarVisible: false
                };
            },
            methods: {
                toggleSidebar() {
                    this.sidebarVisible = !this.sidebarVisible;
                }
            }
        });

        app.mount('#app');
    </script>

</body>

</html>
