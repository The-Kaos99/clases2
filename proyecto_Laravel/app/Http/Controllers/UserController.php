<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function show($id)
    {
        /*$user=\DB::table('profesores')->where('id',$id)->first();*/
       
       $profesor= Profesor::where('id', $id)->first();
       return view('users',['user'=>$user]);
    }
}