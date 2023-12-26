<x-home-layout>
<div  id="app">


<main class="flex-1 p-8">
            <div class="max-w-lg mx-auto bg-white p-6 rounded shadow-lg">
                <h1 class="text-2xl font-semibold mb-4">Statistik Calculator</h1>
                <div class="mb-4">
                    <label for="data" class="block text-sm font-medium text-gray-600">Masukkan Data (pisahkan dengan
                        koma)</label>
                    <input v-model="data" id="data" type="text"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <button @click="hitung"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Hitung
                </button>
                <div v-if="hasil.length > 0" class="mt-4">
                    <h2 class="text-lg font-semibold mb-2">Hasil</h2>
                  
                </div>
            </div>
        </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js"></script>
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    data: '',
                    hasil: [],
                    mean: 0,
                    median: 0,
                    modus: 0,
                    sidebarVisible: false
                };
            },
            methods: {
                hitung() {
                    if (this.data.trim() === '') {
                        alert('Silakan masukkan data sebelum menghitung.');
                        return; // Menghentikan perhitungan jika input kosong
                    }

                    // Memisahkan data dan mengonversi ke dalam bentuk array
                    let dataArray = this.data.split(',').map(item => parseFloat(item.trim()));

                    // Menghitung mean
                    let sum = dataArray.reduce((acc, num) => acc + num, 0);
                    this.mean = sum / dataArray.length;

                    // Menghitung median
                    dataArray.sort((a, b) => a - b);
                    let middle = Math.floor(dataArray.length / 2);

                    if (dataArray.length % 2 === 0) {
                        this.median = (dataArray[middle - 1] + dataArray[middle]) / 2;
                    } else {
                        this.median = dataArray[middle];
                    }

                    // Menghitung modus
                    let counter = {};
                    dataArray.forEach(num => {
                        counter[num] = (counter[num] || 0) + 1;
                    });

                    let maxFrequency = Math.max(...Object.values(counter));
                    this.modus = Object.keys(counter).filter(key => counter[key] === maxFrequency).join(', ');

                    this.hasil = dataArray;
                            },
                            toggleSidebar() {
                                this.sidebarVisible = !this.sidebarVisible;
                            }
            }
        });

        app.mount('#app');
    </script>
</body>

</x-home-layout>