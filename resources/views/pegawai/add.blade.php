<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Skor</title>
    <!-- Tambahkan link stylesheet Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <form method="POST">
            @csrf
            <!-- Label Skor -->
            <label for="skor" class="block text-gray-700 font-bold mb-2">Skor:</label>
            <!-- Input Field -->
            <input type="number" id="skor" name="skor" class="w-full px-4 py-2 border rounded-md mb-4" placeholder="Masukkan skor...">
            <!-- Tombol Tambah -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah
            </button>
        </form>
    </div>
</body>

</html>
