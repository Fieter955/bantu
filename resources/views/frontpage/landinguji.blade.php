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

<div class="container mx-auto py-8 flex justify-center items-center" id="app">
        <!-- Card Produk -->
        <div class="bg-white p-8 shadow-md rounded-md max-w-screen-xl flex">
            <!-- Foto Produk (Di sisi kiri) -->
            <img id="productImage" alt="Produk" class="w-48 h-48 mr-8 object-cover rounded-md">
            <!-- Deskripsi Produk (Di sisi kanan) -->
            <div>
                <h2 id="productName" class="text-xl font-semibold mb-4">Sweater</h2>
                <p id="productDescription" class="text-gray-700 mb-4">Deskripsi singkat produk. Deskripsi singkat produk. Deskripsi singkat produk. Deskripsi singkat produk.</p>
                <p id="productModel" class="text-gray-700 mb-4">Model: A</p>
                <p id="productColor" class="text-gray-700 mb-4">Color: Gray</p>
                <p id="productDelivery" class="text-gray-700 mb-4">Delivery: US</p>
                <label for="data" class="block text-sm font-medium text-gray-600">Quantity</label>
                <input v-model="data" id="data" type="text"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:ring focus:border-blue-500">
                <p id="productPrice" class="text-red-500 font-semibold">$100</p>
                <div class="flex">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">Buy Now</button>
                    <button @click="keranjang" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">Add To Cart</button>
                    <div v-if="hasil.length > 0">
                        {{data}}
                    </div>
                </div>
            </div>
        </div>
    </div>
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
