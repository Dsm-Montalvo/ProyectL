<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alumno</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    i{color: #F00; }
</style>
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
    <br>
    <h1>Editar Alumno</h1>
    <hr>
    <br>
    <img src="{{ asset('img/'.$alumno->Foto) }}" width="300px">
    <br>
    <br>
    <form action="{{ route('salvar',['id' => $alumno->id_alumno]) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PUT') }}

    <div class=form-floating mb-3>  
        <input class="form-control" type="input" value="{{ $alumno->Nombre_alumno }}" name="nombre" id="floatingNombre" placeholder="ejemplo: Daniel" aria-describedby="NombreHelp">
        <label for="floatingNombre">Nombre del alumno:</label>
        <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre(s) no es correcto!!</i>@endif</div>            
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="app" value="{{ $alumno->App }}" id="floatingApp" placeholder="Ejemplo: Montalvo" aria-describedby="AppHelp">
        <label for="floatingApp">Apellido Paterno:</label>
        <div id="AppHelp" class="form-text">Coloque su Apellido Paterno</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="apm" value="{{ $alumno->Apm }}" id="floatingApm" placeholder="Ejemplo: Montalvo" aria-describedby="ApmHelp">
        <label for="floatingApm">Apellido_Materno:</label>
        <div id="ApmHelp" class="form-text">coloque su apellido Materno</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="date" name="fn" value="{{ $alumno->Fecha_de_nacimiento }}" id="floatingfn" placeholder="Ejemplo: 2000/05/14" aria-describedby="fnHelp">
        <label for="floatingfn">Fecha de Nacimiento:</label>
        <div id="fnhelp" class="form-text">Coloque su fecha de Nacimiento(<i>Formato</i>: dia/mes/año)</div>
    </div>
    <h5>Genero</h5>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gen" id="flexRadioDefault1" value="Masculino">
        <label class="form-check-label" for="flexRadioDefault1">
            Masculino
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gen" id="flexRadioDefault2" Value="Femenino" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Femenino
        </label>
    </div>
    <div class="form-text">indique su Genero</div>
    <br>

    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="clave" value="{{ $alumno->Matricula }}" id="floatingMatricula" placeholder="Ejemplo 222210568" aria-describedby="MatriculaHelp">
        <label for="floatingMatricula">Matricula:</label>
        <div id="MatriculaHelp" class="form-text">@if($errors->first('clave'))<i> {{$errors->first('clave') }}</i> @endif</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="direccion" value="{{ $alumno->Direccion }}" id="floatingDireccion" placeholder="Ejemplo: priv. Margaritas #3" aria-describedby="DireccionHelp">
        <label for="floatingDireccion">Direccion:</label>
        <div id="DireccionHelp" class="form-text">Coloque su direccion</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="email" name="email" value="{{ $alumno->Email }}" id="floatingemail" placeholder="Ejemplo: al222210568@gmail.com" aria-describedby="emailHelp">
        <label for="floatingemail">Email:</label>
        <div id="emailHelp" class="form-text">Coloque su correo Electronico (<i>Institucional</i>)</div>
    </div>
    <div class=form-floating mb-3>
        <input type="password" class="form-control" name="pass" value="{{ $alumno->Contraseña }}" id="floatingpass" placeholder="ejemplo: ******" aria-describedby="passHelp">
        <label for="floatingemail">Contraseña:</label>
        <div id="passHelp" class="form-text">Coloque su contraseña</div>
    </div>
    <div class=form-floating mb-3> 
        <input class="form-control" type="file" name="foto1" id="floatingfoto" placeholder="...." aria-describedby="fotoHelp">
        <input type="hidden" name="foto2" value="{{ $alumno->Foto }}">
        <label for="floatingfoto">Foto de Perfil:</label>
        <div id="fotoHelp" class="form-text">Busque una Imagen para su perfil(<i>Formatos</i>: jpg/png/bmp)</div>
    </div>
    <hr>
    <br>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('lista_alumnos') }}">
        <button type="button" class="btn btn-danger">Cancelar</button>
    </a>
    </form>
    <br><br><br>
</div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
