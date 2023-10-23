<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Union</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
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
                                <a class="nav-link" aria-current="page" href="{{ route('lista_alumnos') }}">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('lista_grup') }}">Grupos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('union') }}">Tablas unificadas</a>
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
        

         <h1>Tabla unificada</h1>
        <hr>
        
        <br><br>
        <table class="table">
            <tr>
                <th>Foto</th>
                <th>N°</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Genero</th>
                <th>F.N</th>
                <th>E-Mail</th>
                <th>Grupo</th>
                <th>Id del Grupo</th>
                <th>Clave de Grupo</th>
            </tr>
            @foreach($alumnos as $alumno)
                <tr>
                    <td><img src="{{ asset('img/' .$alumno->Foto) }}" width="30px"></td>
                    <td>{{$alumno->id_alumno }}</td>
                    <td>{{$alumno->Matricula}}</td>
                    <td>{{$alumno->App."  ".$alumno->Apm . "  " . $alumno->Nombre_alumno }}</td>
                    <td>{{$alumno->Genero}}</td>
                    <td>{{$alumno->Fecha_de_nacimiento }}</td>
                    <td>{{$alumno->Email }}</td>
                    <td>{{$alumno->grupos->Nombre}}</td>
                    <td>{{$alumno->grupos->id}}</td>
                    <td>{{$alumno->grupos->Clave}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>