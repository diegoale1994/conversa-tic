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
$users = DB::table('users')
                ->orderBy('fecha', 'desc')
                ->get();
    
    $users_count = user::count();
     $users_count_no = DB::table('users')->where('estado', 'N')->count();
    $users_count_ubication =DB::select("select ubicacion, count(ubicacion) cantidad from users group by ubicacion");
    $users_count_age =DB::select("select edad, count(edad) cantidad from users group by edad");
      $users_count_genre =DB::select("select genero, count(genero) cantidad from users group by genero");
 $users_count_rol =DB::select("select rol, count(rol) cantidad from users group by rol");
    return view('users.index',compact('users','users_count','users_count_ubication','users_count_genre','users_count_age','users_count_rol','users_count_no'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$mensaje = "Registro Exitoso! ";
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
        'estado' => 'N'

]);

  Mail::send('email.plantilla',['data'=>$data],function($msg) use ($request){
    $msg -> subject('CONFIRMA TU REGISTRO');
    $msg->to($request->email);
  });
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
