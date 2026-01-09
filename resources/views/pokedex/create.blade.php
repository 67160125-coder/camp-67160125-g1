<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white"><h3>Add New Pokemon</h3></div>
        <div class="card-body">
            <form action="{{ route('pokedex.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3"><label>Name</label><input type="text" name="name" class="form-control" required></div>
                    <div class="col-md-6 mb-3"><label>Type</label><input type="text" name="type" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Species</label><input type="text" name="species" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Height</label><input type="number" name="height" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Weight</label><input type="number" name="weight" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>HP</label><input type="number" step="0.1" name="hp" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Attack</label><input type="number" step="0.1" name="attack" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Defense</label><input type="number" step="0.1" name="defense" class="form-control" required></div>
                    <div class="col-12 mb-3"><label>Image URL</label><input type="text" name="image_url" class="form-control" placeholder="https://..." required></div>
                </div>
                <button type="submit" class="btn btn-success">Save Pokemon</button>
                <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
