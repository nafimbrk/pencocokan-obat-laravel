<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencocokan Obat</title>
    <link href="{{ asset('bootstrap-5.3.3/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
        }

        .navbar-nav {
            margin-left: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Pencocokan Obat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="{{ route('penyakit.index') }}">Penyakit</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="{{ route('obat.index') }}">Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pengecekan.index') }}">Pengecekan Obat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <script src="{{ asset('bootstrap-5.3.3/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
