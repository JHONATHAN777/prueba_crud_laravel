<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Detalles del registro</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="first_name" value="{{ $record->first_name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="last_name" value="{{ $record->last_name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" value="{{ $record->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" id="phone" value="{{ $record->phone }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Estado:</label>
                    <input type="text" class="form-control" id="status" value="{{ $record->status }}" readonly>
                </div>
                <a href="{{ route('records.index') }}" class="btn btn-primary">Atras</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
