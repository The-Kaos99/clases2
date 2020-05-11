<?php

namespace App\Http\Controllers;
use App\Alumno;
use \Milon\Barcode\DNS1D;
use \Milon\Barcode\DNS2D; 
use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::all();
        return view('administracion.alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.alumnos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->hasFile('img_alumno')) {
            $file= $request->file('img_alumno');            
            $alumno= new Alumno();
            $alumno->nombre=$request->input('nombre_alumno');
            $alumno->apellidos=$request->input('apellidos_alumno');
            $alumno->fech_nac=$request->input('fech_nac');
            $alumno->curso=$request->input('curso');
            $alumno->grupo=$request->input('grupo');
            $name= $alumno->nombre."_".$alumno->apellidos."_".time().".png";
            $file->move(public_path().'/images',$name);
            $alumno->imagen=$name;
            $alumno->slug=time();
            $alumno->save(); 
        }
        $alumnos=Alumno::all();
        $subject = "Inside or Outside";
        $for = "mariansomesa@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("prueba@gmail.com","Inside or Outside Validation System");
            $msj->subject($subject);
            $msj->to($for);
        });
        return view('administracion.alumnos.index', compact('alumnos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $alumno =ALumno::where('slug','=',$slug)->firstOrFail();
        
        /*$alumno= Alumno::find($id);*/
      
       return view('administracion.alumnos.show',compact('alumno'));
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
        return 'Borrado este recurso con id : '.$id;
    }
}
