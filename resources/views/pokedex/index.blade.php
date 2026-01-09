<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Pokedex List</h2>
                <a href="{{ route('pokedex.create') }}" class="btn btn-primary">Add New Pokemon</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Species</th>
                            <th>Stats (HP/ATK/DEF)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pokemons as $pokemon)
                        <tr>
                            <td>
                                <img src="{{ $pokemon->image_url }}" alt="{{ $pokemon->name }}" width="60" class="img-thumbnail">
                            </td>
                            <td class="align-middle fw-bold">{{ $pokemon->name }}</td>
                            <td class="align-middle">
                                <span class="badge bg-info text-dark">{{ $pokemon->type }}</span>
                            </td>
                            <td class="align-middle">{{ $pokemon->species }}</td>
                            <td class="align-middle">
                                <small>
                                    HP: {{ $pokemon->hp }} |
                                    ATK: {{ $pokemon->attack }} |
                                    DEF: {{ $pokemon->defense }}
                                </small>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('pokedex.edit', $pokemon->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('pokedex.destroy', $pokemon->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ลบข้อมูลโปเกมอนตัวนี้ใช่ไหม?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($pokemons->isEmpty())
                    <div class="text-center py-4">
                        <p class="text-muted">ยังไม่มีข้อมูลโปเกมอนในระบบ</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
