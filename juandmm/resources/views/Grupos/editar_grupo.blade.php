<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <style>
                i{color:#f00;}
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
                                    <a class="nav-link" aria-current="page" href="{{ route('lista_alumnos') }}">Alumnos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('lista_grup') }}">Grupos</a>
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
            <h1>Editar Grupo</h1>
            <hr>
            <br>
            <br>
            <form action="{{ route('salvar_grup',['id_grup'=> $grupo->id])}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <h3>Datos personales</h3>
                <div class="form-floating mb-3">
                    <input class="form-control" type="input" name="clave" value="{{$grupo->Clave}}" id="floatingClave" placeholder="Ejepmlo: DSM-41" aria-describedby="ClaveHelp">
                    <label for="floatingClave">Clave del grupo</label>  
                    <div id="ClaveHelp" class="form-text">@if($errors->first('clave')) <i>{{$errors->first('clave')}}</i>@endif</div>
                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" type="input" name="nombre" value="{{$grupo->Nombre}}" id="floatingNombre" placeholder="Ejemplo: Desarrollo de software Multiplataforma" aria-describedby="NombreHelp">
                    <label for="floatingNombre">Nombre del grupo:</label>
                    <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo nombre no es correcto</i>@endif</div>
                </div>  
                <button type="submit" class="btn btn-primary" >Guardar</button>
                <a href="{{ route('lista_grup')}}">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            </form>

            <br><br><br>
        </div>
    </body>
</html>