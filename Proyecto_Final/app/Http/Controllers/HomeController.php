<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->authorizeRoles('admin')) {
            return redirect()->action('AdministracionController@index');
         }elseif ($request->user()->authorizeRoles('profesor')) {
             return redirect()->action('ProfesoradoConfController@index');
         }elseif($request->user()->authorizeRoles('padre')){
             return 'eres padre';
         }
         return redirect('/home');
        return view('home');
    }
}
