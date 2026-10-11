<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        return view('contact1', ['name' => 'ander']);
    }
}
