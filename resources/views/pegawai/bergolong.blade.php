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
                <a href="/data-pegawai" class="text-white-400 hover:text-gray-400 ml-5">Data Tunggal</a>
                <a href="{{ route('tabelFrekuensi')}}" class="text-white hover:text-gray-400 ml-5">Data Distribusi Frekuensi</a>
                <a href="#" class="text-white hover:text-gray-400 ml-5">Tabel Deskripsi Data</a>
                <a href="{{route('bergolong')}}" class="text-yellow-400 hover:text-gray-400 ml-5">Data Bergolong</a>
                <a href="{{route('chi')}}" class="text-white hover:text-gray-400 ml-5">Table Z chi-kuadrat</a>
            </div>
            <!-- Tombol Menu untuk Menampilkan/Sembunyikan Sidebar -->
            <button @click="toggleSidebar" class="lg:hidden text-white focus:outline-none z-10 hover:text-gray-400">
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
                    <li><a href="/data-pegawai" class="text-gray-400 hover:text-white">Data Tunggal</a></li>
                    <li><a href="{{ route('tabelFrekuensi') }}" class="text-gray-400 hover:text-white">Data Distribusi Frekuensi</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Tabel Deskripsi Data</a></li>
                    <li><a href="{{route('bergolong')}}" class="text-yellow-400 hover:text-white">Data Bergolong</a></li>
                    <li><a href="{{route('chi')}}" class="text-gray-400 hover:text-white">Table Z chi-kuadrat</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 p-8">
            <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-lg">
                <h1 class="text-3xl font-semibold mb-6 text-center">Tabel Data Bergolong</h1>

                <table class="w-full mb-6">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">No</th>
                            <th class="py-2 px-4 border-b">Interval</th>
                            <th class="py-2 px-4 border-b">Mean</th>
                            <th class="py-2 px-4 border-b">Frek</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($scoreGroups as $index => $group)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ $index + 1 }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $group['kelas_interval'] }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $group['nilai_tengah'] }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $group['frekuensi'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

             
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
                            <td class="py-2 px-4 border-b text-center">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $score->skor }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2 class="text-xl font-semibold mb-4">Cari Skor</h2>
                <form method="post" action="/data-pegawai/search" class="mb-6">
                    @csrf
                    <div class="mb-4">
                        <label for="skor" class="mr-4 self-center block">Skor:</label>
                        <input type="text" name="skor" class="py-2 px-4 border rounded focus:outline-none focus:ring focus:border-blue-300 w-full">
                        <button type="submit" class="py-2 px-6 mt-4 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Cari</button>
                    </div>
                </form>

                <h2 class="text-xl font-semibold mb-4">Tambah Skor Baru</h2>
                <a href="/crud"><button type="submit" class="mt-4 bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded block">Tambahs</button></a>
            </div>
        </div>