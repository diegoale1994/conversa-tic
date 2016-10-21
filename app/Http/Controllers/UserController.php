<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Redirect;
use DB;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$users = DB::table('users')->Where('rol','<>','Estudiante-UDEC')
                ->orderBy('fecha', 'desc')
                ->get();
$users_grupo = DB::table('users')->Where('rol','=','Estudiante-UDEC')
                ->orderBy('fecha', 'desc')
                ->get();
    
    $users_count = DB::table('users')->Where('rol','<>','Estudiante-UDEC')->count();
    $users_count_no = DB::table('users')->where('estado', 'N')->Where('rol','<>','Estudiante-UDEC')->count();
    $users_count_ubication =DB::select("select ubicacion, count(ubicacion) cantidad from users WHERE rol <> 'Estudiante-UDEC' group by ubicacion");
    $users_count_age =DB::select("select edad, count(edad) cantidad from users WHERE rol <> 'Estudiante-UDEC' group by edad");
    $users_count_genre =DB::select("select genero, count(genero) cantidad from users WHERE rol <> 'Estudiante-UDEC' group by genero");
    $users_count_rol =DB::select("select rol, count(rol) cantidad from users WHERE rol <> 'Estudiante-UDEC' group by rol");

    $users_count_grupo = DB::table('users')->Where('rol','=','Estudiante-UDEC')->count();
    $users_count_no_grupo = DB::table('users')->where('estado', 'N')->Where('rol','=','Estudiante-UDEC')->count();
    $users_count_ubication_grupo =DB::select("select ubicacion, count(ubicacion) cantidad from users WHERE rol = 'Estudiante-UDEC' group by ubicacion");
    $users_count_age_grupo =DB::select("select edad, count(edad) cantidad from users WHERE rol = 'Estudiante-UDEC' group by edad");
    $users_count_genre_grupo =DB::select("select genero, count(genero) cantidad from users WHERE rol = 'Estudiante-UDEC' group by genero");
    $users_count_rol_grupo =DB::select("select rol, count(rol) cantidad from users WHERE rol = 'Estudiante-UDEC' group by rol");

    return view('users.index',compact('users','users_count','users_count_ubication','users_count_genre','users_count_age','users_count_rol','users_count_no','users_grupo',
        'users_count_grupo',
        'users_count_no_grupo',
        'users_count_ubication_grupo',
        'users_count_age_grupo',
        'users_count_genre_grupo',
        'users_count_rol_grupo'



        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    


     public function new_index()
    {
  
          return view('registro.new_register');
      
    }

    public function ingreso($id){
        $user = User::find($id);
        $user -> arrivo = 'S';
        $user -> save();

        $users = DB::table('users')->Where('arrivo','<>','S')
                ->orderBy('fecha', 'desc')
                ->get();
          return view('registro.index',compact('users'));
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_new(Request $request)
    {
       $mensaje = "Registro Exitoso!";

     try { 


        $token = str_random(100);
        $data['token']= $token;
        $data['nombre']= $request->name;

              User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'edad' => $request['edad'],
                    'rol' => $request['rol'],
                    'genero' => $request['genero'],
                    'ubicacion' => strtolower($request['ubicacion']),
                    'twitter' => $request['twitter'],
                    'telefono' => $request['telefono'],
                    'fecha' => \Carbon\Carbon::today()->toDateString(),
                    'token' => $token,
                    'estado' => 'A',
                    'arrivo' => 'S'

            ]);
            
             /* Mail::send('email.plantilla',['data'=>$data],function($msg) use ($request){
                $msg -> subject('CONFIRMA TU REGISTRO');
                $msg->to($request->email);
            });   */

    
    } catch(\Illuminate\Database\QueryException $ex){ 
      $mensaje = "Este correo ya se encuentra Registrado !! ";
    }   
        
    //$numeroRegistrados = DB::table('users')->count();
    return redirect('/new_event_register')->with('message',$mensaje);
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$mensaje = "Registro Exitoso! INGRESA A TU CORREO PARA CONFIRMAR TU INSCRIPCION ! ";

     try { 

$respuesta_c=$request['g-recaptcha-response'];
if ($respuesta_c != '') {
    $secret='6LcQWgkUAAAAAGEEyaeTmQUp6GBCCiJ4FEfuftID';
    $id=$_SERVER["REMOTE_ADDR"];
    $var= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$respuesta_c&remoteip=$id");
    $arreglo= json_decode($var, true);

    if ($arreglo['success']) {

        $token = str_random(100);
        $data['token']= $token;
        $data['nombre']= $request->name;

              User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'edad' => $request['edad'],
                    'rol' => $request['rol'],
                    'genero' => $request['genero'],
                    'ubicacion' => strtolower($request['ubicacion']),
                    'twitter' => $request['twitter'],
                    'telefono' => $request['telefono'],
                    'fecha' => \Carbon\Carbon::today()->toDateString(),
                    'token' => $token,
                    'estado' => 'N'

            ]);
            
             /* Mail::send('email.plantilla',['data'=>$data],function($msg) use ($request){
                $msg -> subject('CONFIRMA TU REGISTRO');
                $msg->to($request->email);
            });   */
    }else{
         $mensaje = "";     
         return redirect('/')->with(compact('numeroRegistrados'))->with('message',$mensaje);
    }
    
}else{
   $mensaje = "llene en catcha !! ";
}



} catch(\Illuminate\Database\QueryException $ex){ 
  $mensaje = "Este correo ya se encuentra Registrado !! ";
}   
        

        $numeroRegistrados = DB::table('users')->count();

    return redirect('/')->with(compact('numeroRegistrados'))->with('message',$mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show_form(){


        $users = DB::table('users')->Where('arrivo','<>','S')
                ->orderBy('fecha', 'desc')
                ->get();
          return view('registro.index',compact('users'));
    }

    public function winner(){
        $users = DB::table('users')->Where('arrivo','=','S')->Where('rol','<>','Estudiante-UDEC')
                ->orderBy('fecha', 'desc')
                ->get();
        $final_users = array();
        foreach ($users as $user) {
            $final_users[]= $user->name;
        }
        return view('winner.index',compact('final_users'));
    }
    public function confirm_user($token){

        $users = DB::table('users')->where('token', '=', $token)->where('estado', '=', 'N')->count();
        if ($users==1) {
           DB::table('users')
            ->where('token', $token)
            ->update(['estado' => 'A']);
             return redirect('/')->with('message','FELICIDADES ACABAS DE CONFIRMAR TU REGISTRO');
        }else{
             return redirect('/');
        }
    }


}
