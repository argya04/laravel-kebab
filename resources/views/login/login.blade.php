<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('/') }}asset/img/logo-bang-aji.png">

    <link href="{{ asset('/') }}asset/css/bootstrap.css" rel="stylesheet" >

    <style>
        .login-container {
            max-width: 330px;
        }
    </style>

</head>
    <body class="d-flex align-items-center justify-content-center vh-100">
        <div class="container login-container rounded-4 pt-1 shadow">
            <h1 class="text-center fw-semibold mt-4">Selamat Datang</h2>
            <div class="d-flex justify-content-center align-items-center mb-3 mt-2">
                <img src="{{ asset('/') }}asset/img/logo-bang-aji.png" alt="Logo" width="200px" height="200px">
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ( $errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ url('proseslogin') }}" method="POST" class="mx-3 pb-5" >
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username')is-invalid @enderror" placeholder="Masukkan Username">
                    {{-- @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>
                <div class="my-4">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Masukkan password">
                    {{-- @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Login</button>
            </form>
        </div>

        <script src="{{ asset('/') }}asset/js/bootstrap.bundle.min.js"></script>
    </body>
</html>