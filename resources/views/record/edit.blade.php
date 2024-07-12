<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Registro</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('records.update', $record->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $record->first_name }}" required>
            </div>

            <div class="form-group">
                <label for="last_name">Apellidos</label>
                <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $record->last_name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $record->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Número telefónico</label>
                <input type="text" name="phone" class="form-control" id="phone" value="{{ $record->phone }}" required>
            </div>

            <div class="form-group">
                <label for="status">Estado</label>
                <select name="status" class="form-control" id="status" required>
                    <option value="sale" {{ $record->status == 'sale' ? 'selected' : '' }}>Venta</option>
                    <option value="not_completed" {{ $record->status == 'not_completed' ? 'selected' : '' }}>No Concretado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
