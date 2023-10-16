<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista de Alumnos</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route ('index') }}">
                    <img src="{{ asset('img/logo_utvt.png') }}" alt="" width="50px" height="50px">
                    TSU-DSM-41
                </a>
                
                @if(session('session_id') !='')
                <meta http-equiv="Refresh" content="0;URL={{ route('login') }}">
                @else
                <a class="navbar-brand" href="{{ route('logout') }}" style="color:rgb(221, 124, 50);">Cerrar Sesion</a>
                @endif
            </div>
         </nav>
         <br>
         <br><br><br>
        <h1>Lista de Alumnos del DSM-41</h1>
        <hr>
        <p style="text-align: right;">
            <a href="{{ route('alta') }}">
                <button type="button" class="btn btn-primary btn-sm">Nuevo Registro Alumno</button>
            </a>
        </p>
        <hr><br>
        <table class="table">
            <tr>
                <th>Foto</th>
                <th>N°</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>F.N</th>
                <th>E-Mail</th>
                <th>Otros</th>
            </tr>
            @foreach($alumnos as $alumno)
                <tr>
                    <td><img src="{{ asset('img/' .$alumno->Foto) }}" width="30px"></td>
                    <td>{{$alumno->id_alumno }}</td>
                    <td>{{$alumno->Matricula}}</td>
                    <td>{{$alumno->App."  ".$alumno->Apm . "  " . $alumno->Nombre_alumno }}</td>
                    <td>{{$alumno->Fecha_de_nacimiento }}</td>
                    <td>{{$alumno->Email }}</td>
                    <td>
                        <a href="{{ route('detalle', ['id' => $alumno->id_alumno]) }}">
                            <button type="button" class="btn btn-primary btn-sm">Detalle</button>
                        </a>
                        <a href="{{ route('editar', ['id' => $alumno->id_alumno]) }}">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>
                        <a href="{{ route('borrar', ['id' => $alumno->id_alumno]) }}">
                            <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>