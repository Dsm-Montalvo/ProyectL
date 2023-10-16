<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Alumnos;

class ControllerSystem extends Controller
{
    public function perfil(){
        return view('perfil2');
    }

    //logica : index
    public function index(){
        return view("index");
    }
    //logica : login
    public function login(){
        return view("login");
    }

    public function ingresar(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'pass' => 'required',
        ]);

        $email= $request->input('email');
        $pass= $request->input('pass');

        $query= Alumnos::where('email','=',$email)
            ->where('contraseña','=',$pass)
            ->get();

        if(count($query)==0){
            return redirect()->route('lista_alumnos');
        }
        else {
            //variables de session: Crear
            $request->session()->put('session_id',$query[0]->id_alumno);
            $request->session()->put('session_name',$query[0]->nombre);

            //variables de session: Consultar
            $session_id =$request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');

            return redirect()->route('/lista');
        }

    }

    public function logout(Request $request){
        //variables de session:borrar
        $request ->session()->forget('session_id');
        $request ->session()->forget('session_name');

        return redirect()->route('index');

    }

    //logica:lista de alumnos
    public function lista(){
        $query = Alumnos::all();
        return view('lista')
            ->with(['alumnos' =>$query]);
    }

    //logica:detalle Alumno
    public function detalle($id){
        $query= Alumnos::find($id);
        return view('detalle')
        ->with (['alumno'=> $query]);
    }

    //logica:Alta Alumno

    public function alta(){
        return view("vistaalumno");
    }

    public function registrar (Request $request){

        $this->validate($request,[
            
            'nombre' => 'required',
            'app' => 'required',
            'fn' => 'required',
            'direccion' => 'required',
            'clave' => 'required',
            'email' => 'required',
            'pass' => 'required',
        ]);

        //Alumnos::create($request->only('clave','nombre','app','fn','gen','foto','email','pass','activo'));

        //
        if ($request->file('foto') != ''){
            //obtener el campo file definido en el formulario
            $file = $request->file('foto');
            //obtenemos el nombre del archivo(file)
            $img=$file->getClientOriginalName();
                //$img = $request->file('img')->getClientOriginalName();
            //obtener fecha y hora
            $ldate = date('Ymd_His_');  //obtenermos fecha y hora
            $img2 = $ldate . $img;  //concatena la fecha y hora con el nombre del archivo (file)
            //indicamos el nombre y la ruta donde se almacena el Archivo(file)
            \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
            $img2 = "logo_utvt.png";
        }
        //
        Alumnos::create(array(
            'Nombre_alumno' => $request->input('nombre'),
            'App' => $request->input('app'),
            'Apm' => $request->input('apm'),
            'Fecha_de_nacimiento' => $request->input('fn'),
            'Genero' => $request->input('gen'),
            'Matricula' => $request->input('clave'),
            'Direccion' => $request->input('direccion'),
            'Foto' => $img2,
            'Email' => $request->input('email'),
            'Contraseña' => $request->input('pass'),
            
        ));

        return redirect()->route('lista_alumnos');

    }
    //------------------------------------------------editar------------------------------------------------------------------------------

    public function editar($id){
        $query = Alumnos::find($id);
        return view("editar_alumnos")
            ->with(['alumno' => $query]);
    }

    public function salvar(Alumnos $id, Request $request){
        if($request->file('foto1') !=''){
                //-------------------------------------------
                    //obtener el campo file definido en el formulario
                    $file = $request->file('foto1');
                    //obtenemos el nombre del Archivo (file)
                        $img = $file->getClientOriginalName();
                        //$img = $request->file('img1')->getCleintOriginalName();
                    //obtener Fecha y hora
                        $ldate = date('Ymd_His_');          //obtenemos fecha y hora
                        $img2= $ldate . $img;               //concatena la fehca y gora con el nombre del archivo(file)
                    //indciamos el nombre y la ruta donde se almacena el Archivo (file)
                        \Storage::disk('local')->put($img2, \File::get($file));
                //---------------------------------------------------
            }
        else{
                $img2 = $request->foto2;
            }

            //dd($request->all());
        $query =Alumnos::find($id->id_alumno);
            $query -> Nombre_alumno = $request -> nombre;
            $query -> App = $request -> app;
            $query -> Apm = $request -> apm;
            $query -> Fecha_de_nacimiento = $request -> fn;
            $query -> Genero = $request -> gen;
            $query -> Matricula = $request -> clave;
            $query -> Direccion = $request -> direccion;
            $query -> Foto = $img2;
            $query -> Email = $request -> email;
            $query -> Contraseña = $request -> pass;
        
        $query -> save();
        
        return redirect()->route("lista_alumnos");
    }

    public function borrar(Alumnos $id){
        $id->delete();
        return redirect()->route('lista_alumnos');
    }

}
