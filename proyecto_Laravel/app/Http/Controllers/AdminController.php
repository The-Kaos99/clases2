<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show($id)
    {

       $admin= Admin::where('id', $id)->firstOrFail();
       return view('admins',['admin'=>$admin]);
    }
}
