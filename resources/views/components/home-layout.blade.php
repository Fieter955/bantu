<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>






<body class="bg-gray-100">


<!-- navbar -->

<div class="bg-gray-800 text-white p-4">
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <button class="lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </button>
            <a href="{{route('home/home')}}" class="text-xl font-bold ml-2">Dashboard</a>
        </div>
        <div class="hidden lg:flex space-x-4">
            <a href="{{route('home/home')}}" class="hover:text-gray-300">Home</a>
            <a href="{{route('about')}}" class="hover:text-gray-300">About</a>
            <a href="{{route('portofolio')}}" class="hover:text-gray-300">Portofolio</a>
            <a href="{{route('contact')}}" class="hover:text-gray-300">Contact</a>
        </div>
        <div>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Button</a>
        </div>
    </div>
</div>



<!-- main -->


    {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js"></script>
    <script>
    const app = Vue.createApp({
        data() {
            return {
                data: '',
                hasil: [],
            };
        },
        methods: {
            keranjang() {
                // Menambahkan nilai this.data ke dalam array hasil
                this.hasil.push(this.data);
                // Mengosongkan input setelah ditambahkan ke hasil
                this.data = '';
            }
        }
    });

    app.mount('#app');
</script>
</body>

</html>
