<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Plant Hive') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</head>

<body>
    <div id="app">
    <nav class="navbar navbar-expand-md shadow-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Plant Hive') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        <!-- Mostrar opciones de inicio de sesión/registro -->
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('lista') }}">{{ __('Lista') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aniadir') }}">{{ __('Añadir') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Mensajes') }}</a>
                        </li>
                        
                        <!-- Opción para usuarios normales -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('verDatosUsuario', ['id' => Auth::user()->id]) }}">{{ Auth::user()->name }}</a>
                        </li>

                        <!-- Opción solo para usuarios administradores -->
                        @can('toggleAdmin', App\Models\User::class)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users.index') }}">{{ __('Administracion') }}</a>
                            </li>
                        @endcan
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

        <br>
        <main class="content">
            @yield('content')
        </main>

        <footer>
            <p>Copyright &copy; <a href="https://github.com/dbengar">Github</a></p>
        </footer>
    </div>

  



</html>