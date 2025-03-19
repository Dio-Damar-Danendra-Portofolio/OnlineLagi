<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row p-2 bg-warning d-flex flex-wrap justify-content-center align-self-center fixed-top">
                <div class="col-md-2 p-2">
                    <a href="{{ url('/') }}" class="text-decoration-none">
                        <img src="" alt="logo" loading="eager">
                    </a>
                </div>
                    <div class="col-md-2 p-2">
                        {{-- <h1>@yield('title')</h1> --}}
                        <a href="{{ url('/') }}" class="btn btn-primary btn-md">Home</a>
                    </div>
                    <div class="col-md-2 p-2">
                        {{-- <h1>@yield('title')</h1> --}}
                        <a href="{{ url('/') }}" class="btn btn-primary btn-md">Tombol A</a>
                    </div>
                    <div class="col-md-2 p-2">
                        {{-- <h1>@yield('title')</h1> --}}
                        <a href="{{ url('/') }}" class="btn btn-primary btn-md">Tombol B</a>
                    </div>
                    <div class="col-md-2 p-2">
                        {{-- <h1>@yield('title')</h1> --}}
                        <a href="{{ url('/') }}" class="btn btn-primary btn-md">Tombol C</a>
                    </div>
                    <div class="col-md-2 p-2">
                        {{-- <h1>@yield('title')</h1> --}}
                        <a href="{{ url('/') }}" class="btn btn-primary btn-md">Tombol D</a>
                    </div>
            </div>
        </div>
    </header>
    <main class="bg-danger">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row p-2 d-flex flex-wrap justify-content-center align-self-center">
                <div class="col-lg-8 text-center bg-warning w-100 align-items-center fixed-bottom">
                    <h4>&copy; Onlinelagi.id</h4>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
