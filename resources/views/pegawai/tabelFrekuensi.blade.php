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
                <a href="/data-pegawai" class="text-white hover:text-gray-400 ml-5">Data Tunggal</a>
                <a href="{{route('tabelFrekuensi')}}" class="text-yellow-400 hover:text-gray-400 ml-5">Data Distribusi Frekuensi</a>
                <a href="{{route('tabeldeskripsi')}}" class="text-white hover:text-gray-400 ml-5">Tabel Deskripsi Data</a>
                <a href="{{route('bergolong')}}" class="text-white hover:text-gray-400 ml-5">Data Bergolong</a>
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
                    <li><a href="{{route('tabelFrekuensi')}}" class="text-yellow-400 hover:text-white">Data Distribusi Frekuensi</a></li>
                    <li><a href="{{route('tabeldeskripsi')}}" class="text-gray-400 hover:text-white">Tabel Deskripsi Data</a></li>
                    <li><a href="{{route('bergolong')}}" class="text-gray-400 hover:text-white">Data Bergolong</a></li>
                    <li><a href="{{route('chi')}}" class="text-gray-400 hover:text-white">Table Z chi-kuadrat</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 p-8">
            <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-lg">
                <h1 class="text-3xl font-semibold mb-6 text-center">Tabel Distribusi Frekuensi</h1>

                <table class="w-full mb-6">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nomor</th>
                            <th class="py-2 px-4 border-b">Skor</th>
                            <th class="py-2 px-4 border-b">Frekuensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($scoreFrequencies as $scoreFrequency)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ $scoreFrequency->nomor }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $scoreFrequency->skor }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $scoreFrequency->count }}</td>
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
