<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoradoConfController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('profesor');
        return 'profesor';
    }
}
