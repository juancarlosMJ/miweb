<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonajesController extends Controller
{
    public function personajes(){
        return view ('/personajes');

    }
}
