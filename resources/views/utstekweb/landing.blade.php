<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <h1 class="text-2xl font-bold text-center mb-4">Perpustakaan</h1>
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 gap-4">

        @foreach($datas as $data)
            <div class="card border bg-white rounded-lg flex flex-row w-4/5 justify-center  mx-auto p-5">
                <img src="{{asset('images/'. $data->Gambar)}}" class="card-img-top h-64 w-1/3 object-cover" alt="Buku 1">
                <div class="card-body p-4 w-2/3 flex flex-col justify-between items-stretch h-full">
                    <div>
                    <h5 class="card-title text-xl font-bold mb-2">{{ $data->Judul_Buku}}</h5>
                    <p class="card-text text-gray-700">Deskripsi buku 1. Informasi lebih lanjut tentang buku ini.</p>
                    </div>
                    <a href="{{route('detail', ['slug'=>$data->id])}}" class="btn btn-primary mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 ease-in-out"> Pinjam</a>
                </div>

            </div>
        @endforeach  

        </div>
    </div>

    <form method="POST" action="{{ route('logout') }}">
            @csrf
            <h2 class="text-2xl font-semibold mb-4">Logout</h2>
            <button type="submit"
                class="w-full bg-red-500 text-white p-2 rounded hover:bg-red-600 focus:outline-none focus:shadow-outline-red">
                Logout
            </button>
        </form>

    <a href="{{route('inputbuku')}}" class="btn btn-primary mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 ease-in-out">Input Buku Baru</a>
</body>

</html>
