<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JefesController extends Controller
{
    public function jefes()
    {
        return view('personajes.jefes');
    }
}
