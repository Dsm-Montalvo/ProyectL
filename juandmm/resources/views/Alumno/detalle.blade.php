<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno Detalle</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route ('inicio') }}">
                    <img src="{{ asset('img/logo_utvt.png') }}" alt="" width="50px" height="50px">
                    TSU-DSM-41
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
                                <a class="nav-link active" aria-current="page" href="{{ route('lista_alumnos') }}">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('lista_grup') }}">Grupos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('union') }}">Tablas unificadas</a>
                            </li>
                            <li class="nav-item">
                                @if(session('session_id') !='')
                                <meta http-equiv="Refresh" content="0;URL={{ route('login') }}">
                                @else
                                <a class="navbar-brand" href="{{ route('logout') }}" style="color:rgb(221, 124, 50);">Cerrar Sesion</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         </nav>
         <br>
         <br><br><br>
        <h1>Alumnos del DSM-40</h1>
        <hr><hr><br>
        <img src="{{ asset('img/'.$alumno->Foto) }}" width="200px"><br>
        <a href="{{ asset('img/'.$alumno->Foto) }}">
            <button type="button" class="btn btn-success">Archivo</button>
        </a><br>
        ID: {{ $alumno->id_alumno }} <br>
        Matricula: {{ $alumno->Matricula }} <br>
        Nombre Completo: {{ $alumno->App . "  " . $alumno->Apm . "  " . $alumno->Nombre_alumno }} <br>
        Fecha de Nacimiento: {{ $alumno->Fecha_de_nacimiento }} <br>
        Genero: {{ $alumno->Genero }}  <br>
        Direccion: {{ $alumno->Direccion}} <br>
        Correo Electronico: {{ $alumno->Email }} <br>
        Grupo: {{ $alumno->grupos->Nombre }} <br>
        <br>
        <a href="{{ route('lista_alumnos') }}">
            <button type="button" class="btn btn-success">regresar</button>
        </a>
    </div>
</body>
</html>