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
        <h1>Alumnos del DSM-40</h1>
        <hr><hr><br>
        <img src="{{ asset('img/'.$alumno->Foto) }}" width="200px"><br>
        <a href="{{ asset('img/'.$alumno->Foto) }}">
            <button type="button" class="btn btn-success">Archivo</button>
        </a><br>
        {{ $alumno->id_alumno }} <br>
        {{ $alumno->Matricula }} <br>
        {{ $alumno->App . "  " . $alumno->Apm . "  " . $alumno->Nombre_alumno }} <br>
        {{ $alumno->Fecha_de_nacimiento }} <br>
        {{ $alumno->Email }} <br>
        <br>
        <a href="{{ route('lista_alumnos') }}">
            <button type="button" class="btn btn-success">regresar</button>
        </a>
    </div>
</body>
</html>