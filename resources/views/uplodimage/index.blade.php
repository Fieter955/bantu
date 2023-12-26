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

    <!-- Form untuk mengunggah gambar -->
    <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <!-- Tampilkan gambar jika ada -->
    @if($image->count() > 0)
        <h2>Gambar yang Diunggah</h2>
        <div class="row">
            @foreach($image as $gambar)
                <div class="col-md-3 mb-3">
                    <img src="{{ asset('images/' . $gambar->image) }}" alt="Deskripsi Gambar" class="img-fluid">
                </div>
            @endforeach
        </div>
    @else
        <p>Tidak ada gambar yang diunggah.</p>
    @endif




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
