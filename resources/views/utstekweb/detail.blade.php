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

    <div class="container mx-auto py-8 w-4/5 h-4/5 bg-red-100">
        <div class="bg-white h-full">
            <div class="card border border-gray-300 rounded-lg shadow-md overflow-hidden flex">
                <img src="{{asset('images/' . $data->Gambar)}}" class="card-img-top object-cover h-64 w-full" alt="Buku 1">
                <div class="card-body p-4">
                    <div class="flex mb-2">
                        <h5 class="card-title text-lg font-semibold inline">Judul</h5>
                        <p class="ml-2">: {{$data->Judul_Buku}}</p>
                    </div>

                    <div class="flex mb-2">
                        <h5 class="card-title text-lg font-semibold inline">Penulis</h5>
                        <p class="ml-2">: {{$data->Penulis}}</p>
                    </div>
                    <div class="flex mb-2">
                        <h5 class="card-title text-lg font-semibold inline">Penerbit</h5>
                        <p class="ml-2">: {{$data->Pengarang}}</p>
                    </div>
                    <div class="flex mb-2">
                        <h5 class="card-title text-lg font-semibold inline">Tahun Terbit</h5>
                        <p class="ml-2">: {{$data->Tanggal_Terbit}}</p>
                    </div>
                    <p class="card-text text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa qui rerum deleniti voluptate soluta aperiam ipsa, dolorum quos ratione illum autem aut fugit, accusantium exercitationem. Atque praesentium alias libero laboriosam ullam ipsum cumque quisquam vitae dolore quia in ad soluta magnam suscipit pariatur velit laborum, vero aut provident incidunt?.</p>
                    <a href="{{ route('detail', ['slug' => $data->id]) }}" class="btn btn-primary mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 ease-in-out w-1/7">
                        <p>Pinjam</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
