<?php

namespace App\Http\Controllers;
use App\Padre;
use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío
use App\Mail\PassPadres;

class PadresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $padres=Padre::all();
        return view('administracion.padres.index',compact('padres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.padres.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $padre= new Padre();
        $padre->nombre=$request->input('nombre');
        $padre->apellidos=$request->input('apellidos');
        $padre->email=$request->input('email');
        $padre->telefono=$request->input('telefono');
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $password = "";
        for ($i = 0; $i < 8; $i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $password .= substr($str, rand(0, 62), 1);
        }
        $padre->pass=md5($password);
        $padre->save();
        Mail::to($padre->email)->send(new PassPadres($password , $padre));
        $padres=Padre::all();
        return view('administracion.padres.index',compact('padres'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   /*
        Hago esto para que si alguien intenta ir a mano al link que lo lleve al inicio 
        */
        return view('administracion.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $padre=Padre::find($id);
        return view('administracion.padres.edit',compact('padre'));
   
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
        $padre=Padre::find($id);
        $padre->fill($request->except('pass'));
        $pass=md5($request->input('contra'));
        if($padre->pass!=$pass){
            $padre->pass=$pass;
        }
        $padre->save();
        $padres=Padre::all();
        return view('administracion.padres.index',compact('padres'));
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $padre=Padre::find($id);
        $padre->delete();
        $padres=Padre::all();
        return view('administracion.padres.index',compact('padres'));
    }
}
