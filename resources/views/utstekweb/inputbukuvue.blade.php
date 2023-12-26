<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div id="app" class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold mb-6">Formulir Buku</h1>

        
        <form @submit.prevent="saveBook">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Judul:</label>
                <input type="text" id="title" v-model="newBook.title" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-600">Penulis:</label>
                <input type="text" id="author" v-model="newBook.author" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-600">Tahun Terbit:</label>
                <input type="number" id="year" v-model="newBook.year" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-6">
                <label for="pages" class="block text-sm font-medium text-gray-600">Jumlah Halaman:</label>
                <input type="number" id="pages" v-model="newBook.pages" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 ease-in-out">Simpan</button>
        </form>

        <h2 class="text-2xl font-semibold mt-8 mb-4">Daftar Buku</h2>
        <table class="w-full border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Judul</th>
                    <th class="border px-4 py-2">Penulis</th>
                    <th class="border px-4 py-2">Tahun Terbit</th>
                    <th class="border px-4 py-2">Jumlah Halaman</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="book in books" :key="book.title">
                    <td class="border px-4 py-2" {{!! book.title !!}} </td>
                    <td class="border px-4 py-2">{{!! book.author !!}}</td>
                    <td class="border px-4 py-2">{{!! book.year !!}}</td>
                    <td class="border px-4 py-2">{{!! book.pages !!}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                newBook: { title: '', author: '', year: null, pages: null },
                books: []
            },
            methods: {
                saveBook() {
                    this.books.push({ ...this.newBook });
                    this.newBook = { title: '', author: '', year: null, pages: null };
                }
            }
        });
    </script>
</body>

</html>
