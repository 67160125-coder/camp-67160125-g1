<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white"><h3>Edit: {{ $pokedex->name }}</h3></div>
        <div class="card-body">
            <form action="{{ route('pokedex.update', $pokedex->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3"><label>Name</label><input type="text" name="name" value="{{ $pokedex->name }}" class="form-control" required></div>
                    <div class="col-md-6 mb-3"><label>Type</label><input type="text" name="type" value="{{ $pokedex->type }}" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Height</label><input type="number" name="height" value="{{ $pokedex->height }}" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>HP</label><input type="number" step="0.1" name="hp" value="{{ $pokedex->hp }}" class="form-control" required></div>
                    <div class="col-12 mb-3"><label>Image URL</label><input type="text" name="image_url" value="{{ $pokedex->image_url }}" class="form-control" required></div>
                    {{-- เพิ่มคอลัมน์อื่นๆ ให้ครบตามหน้า create ได้เลยครับ --}}
                </div>
                <button type="submit" class="btn btn-primary">Update Pokemon</button>
                <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
