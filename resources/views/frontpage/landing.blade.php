<x-home-layout>

<div class="container mx-auto py-8 flex justify-center items-center">
        <!-- Card Produk -->
        <div class="bg-white p-8 shadow-md rounded-md max-w-screen-xl flex">
            <!-- Foto Produk (Di sisi kiri) -->
            <img src="/1.jpg" id="productImage" alt="Produk" class="w-48 h-48 mr-8 object-cover rounded-md">
            <!-- Deskripsi Produk (Di sisi kanan) -->
            <div>
                <h2 id="productName" class="text-xl font-semibold mb-4">Sweater</h2>
                <p id="productDescription" class="text-gray-700 mb-4">Deskripsi singkat produk. Deskripsi singkat produk. Deskripsi singkat produk. Deskripsi singkat produk.</p>
                <p id="productModel" class="text-gray-700 mb-4">Model: A</p>
                <p id="productColor" class="text-gray-700 mb-4">Color: Gray</p>
                <p id="productDelivery" class="text-gray-700 mb-4">Delivery: US</p>
                <label for="data" class="block text-sm font-medium text-gray-600">Quantity</label>
                <input  id="inp" type="text"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:ring focus:border-blue-500">
                <p id="productPrice" class="text-red-500 font-semibold">$100</p>
                <div class="flex">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">Buy Now</button>
                    <button  id="btn" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">Add To Cart</button>
                    <div >
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    var inp = document.getElementById('inp');
    var btn = document.getElementById('btn');

    btn.addEventListener("click", function() {
        console.log(inp.value);
    });
</script>



</x-home-layout>