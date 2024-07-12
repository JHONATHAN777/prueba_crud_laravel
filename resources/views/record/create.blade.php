<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Record</h3>
                    </div>
                    <div class="card-body">

                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('records.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="first_name">Nombre</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Apellidos</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="id_number">Numero de Cedula</label>
                                <input type="text" name="id_number" class="form-control" id="id_number" value="{{ old('id_number') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Numero telefonico</label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
