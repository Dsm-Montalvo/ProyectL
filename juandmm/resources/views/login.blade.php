<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .form-signin{
            max-width: 530;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"]{
            margin-bottom:-1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"]{
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>    
</head>
<body>
    <div class="container"> 
        <!-- navbar -->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route ('index') }}">
                    <img src="{{ asset('img/logo_utvt.png') }}" alt="" width="50px" height="50px">
                    TSU-DSM
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('index') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>        
        </nav>
        <!-- Navbar: fin -->
        <br><br><br>
        <main class="form-signin w-100 m-auto">
        <h2><img src=" {{ asset('img/logo_utvt.png') }}" alt="" width="100"> Acceso al sistema</h2>
        <hr>
        <form action="{{ route ('ingresar') }}" method="GET">
            {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="floatingemail" placeholder="ejemplo: al222210568@gmail.com" aria-describedby="emailHelp">
                <label for="floatingemail"><i style="color: #F00;">*</i>Correo Electronico</label>
                <div id="emailHelp" class="form-text">
                    @if($errors->first('email')) <i>{{ $errors->first('email') }}</i>
                    @else Coloque su Correo Electronico (<i>Institucional</i>)
                    @endif
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="pass" id="floatingpass" placeholder="ejemplo: *******" aria-describedbhy="passHelp">
                <label for="floatingemail"><i style="color: #f00;">*</i> Contraseña</label>
                <div id="passHelp" class="form-text">
                    @if($errors->first('pass')) <i>{{$errors->first('pass') }}</i>
                    @else Coloque su Contraseña
                    @endif
                </div>
            </div>

            Los Campos con <i style="color: #F00;">*</i> son requeridos. <br>
            <br>

            <button type="submit" class="btn btn-primary">Ingresar</button>
            <a href="{{ route('index') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
        </main>
    </div>     
</body>
</html>