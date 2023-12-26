<!-- uplodimage/index.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Image Upload</h1>

    <!-- Form untuk mengunggah gambar dan informasi lainnya -->
    <form action="{{ route('store.tekweb') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input class="form-control" type="text" name="penulis" id="penulis" required>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input class="form-control" type="text" name="pengarang" id="pengarang" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input class="form-control" type="date" name="tanggal" id="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input class="form-control" type="text" name="judul" id="judul" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input class="form-control" type="text" name="category" id="category" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input class="form-control" type="file" name="image" id="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
