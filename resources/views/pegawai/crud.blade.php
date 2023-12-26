<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md w-full md:w-2/3 lg:w-1/2">
        <a href="/add"><button type="submit" class="mt-4 bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded block">Tambah Pengguna</button></a>
        <h1 class="text-2xl font-semibold mb-6 text-center">Data Pengguna</h1>

        
    

        <!-- Tabel untuk menampilkan data pengguna -->
<!-- Tabel untuk menampilkan data pengguna -->
<table class="mt-6 min-w-full">
    <thead>
        <tr>
            <th class="border-b py-2 text-center">No</th>
            <th class="border-b py-2 text-center">Skor</th>
            <th class="border-b py-2 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data pengguna akan ditampilkan di sini -->
        @foreach ($scores as $score)
        <tr>
            <td class="border-b py-2 text-center">{{ $loop->iteration}}</td>
            <td class="border-b py-2 text-center">{{ $score->skor }}</td>
            <td class="border-b py-2 flex justify-center">
             
                 <a href="{{ route('edit', $score->id) }}">
                 <button class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded mr-2">Edit</button>
                 </a>
                <!-- Formulir penghapusan data -->
                <form action="{{ route('scores.destroy', $score) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
</body>

</html>
