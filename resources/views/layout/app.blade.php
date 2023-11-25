<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clínica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <!-- Agrega más estilos o enlaces a CSS según tus necesidades -->
    <style>
        body {
            padding-top: 56px;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 56px;
            left: -250px;
            background-color: #f8f9fa;
            padding-top: 20px;
            transition: all 0.3s;
        }

        #sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: #000;
            display: block;
            transition: all 0.3s;
        }

        #sidebar a:hover {
            color: #007bff;
        }

        #sidebar .close-btn {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 24px;
            margin-left: 40px;
        }

        #content {
            transition: margin-left .3s;
            padding: 16px;
        }

        @media (min-width: 768px) {
            #sidebar {
                left: 0;
            }

            #content {
                margin-left: 250px;
            }
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <a href="#" class="close-btn" onclick="closeNav()">&times;</a>
        <a href="{{ route('citas.index') }}">Citas</a>
        <a href="{{ route('pacientes.index') }}">Pacientes</a>
        <a href="{{ route('medicos.index') }}">Médicos</a>
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
        @endguest
    </div>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#" onclick="openNav()">
                <img src="https://marketplace.canva.com/EAFWjOMB_2g/1/0/1600w/canva-logotipo-centro-de-salud-clinica-estilo-minimalista-simple-elegante-color-azul-verde-menta-blanco-celeste-NtusAgQX0K0.jpg" alt="Logo Clínica" width="50" height="50" class="d-inline-block align-top">
                CLINICA EMPRESARIAL
            </a>
            <button class="navbar-toggler" type="button" onclick="openNav()">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("sidebar").style.left = "0";
            document.getElementById("content").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("sidebar").style.left = "-250px";
            document.getElementById("content").style.marginLeft= "0";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Agrega más scripts o enlaces a JavaScript según tus necesidades -->
</body>
</html>


