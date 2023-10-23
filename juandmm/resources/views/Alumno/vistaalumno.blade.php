<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
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
    <br>
    <h1>Informacion Alumnos</h1>
    <form action="{{ route('registrar') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class=form-floating mb-3>  
        <input class="form-control" type="input" value="{{old('nombre')}}" name="nombre" id="floatingNombre" placeholder="ejemplo: Daniel" aria-describedby="NombreHelp">
        <label for="floatingNombre">Nombre del alumno:</label>
        <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre(s) no es correcto!!</i>@endif</div>            
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="app" value="{{ old('app') }}" id="floatingApp" placeholder="Ejemplo: Montalvo" aria-describedby="AppHelp">
        <label for="floatingApp">Apellido Paterno:</label>
        <div id="AppHelp" class="form-text">Coloque su Apellido Paterno</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="apm" value="{{ old('apm') }}" id="floatingApm" placeholder="Ejemplo: Montalvo" aria-describedby="ApmHelp">
        <label for="floatingApm">Apellido Materno:</label>
        <div id="ApmHelp" class="form-text">coloque su apellido Materno</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="date" name="fn" value="{{ old('fn') }}" id="floatingfn" placeholder="Ejemplo: 2000/05/14" aria-describedby="fnHelp">
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
        <input class="form-control" type="input" name="clave" value="{{ old('clave') }}" id="floatingMatricula" placeholder="Ejemplo 222210568" aria-describedby="MatriculaHelp">
        <label for="floatingMatricula">Matricula:</label>
        <div id="MatriculaHelp" class="form-text">ingrese matricula</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="input" name="direccion" value="{{ old('direccion') }}" id="floatingDireccion" placeholder="Ejemplo: priv. Margaritas #3" aria-describedby="DireccionHelp">
        <label for="floatingDireccion">Direccion:</label>
        <div id="DireccionHelp" class="form-text">Coloque su direccion</div>
    </div>
    <div class=form-floating mb-3>
        <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="floatingemail" placeholder="Ejemplo: al222210568@gmail.com" aria-describedby="emailHelp">
        <label for="floatingemail">Email:</label>
        <div id="emailHelp" class="form-text">Coloque su correo Electronico (<i>Institucional</i>)</div>
    </div>
    <div class=form-floating mb-3>
        <input type="password" class="form-control" name="pass" id="floatingpass" placeholder="ejemplo: ******" aria-describedby="passHelp">
        <label for="floatingpass">Contraseña:</label>
        <div id="passHelp" class="form-text">Coloque su contraseña</div>
    </div>
    <br>
    <div class=form-floating mb-3>
        <div class="mb-3">
            <label for="floatingrupo" class="form-label">Grupo:</label>
            <select class="form-select form-select-lg" name="grupos" id="floatingrupo">
                <option value="">Elige tu grupo</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo['id'] }}">{{$grupo['Nombre']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class=form-floating mb-3> 
        <input class="form-control" type="file" name="foto" id="floatingfoto" placeholder="...." aria-describedby="fotoHelp">
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
