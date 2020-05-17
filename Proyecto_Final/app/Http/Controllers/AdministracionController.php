<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use App\Alumno;
use App\Padre;

class AdministracionController extends Controller
{
    public function index()
    {
        return view("administracion.index");
    }
   
    public function deleteAll()
    {
        Alumno::truncate();     
        Profesor::truncate();   
        Padre::truncate();      
        return view('administracion.index');      
    }
    
    
}