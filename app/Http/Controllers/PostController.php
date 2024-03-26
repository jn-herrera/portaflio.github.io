<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Asegúrate de tener esta línea importada

class PostController extends Controller
{
    public function __construct()
    {
       
    }
    //
    public function index(){

       // dd(auth()->user());
       return view('layouts.dashboard');

    }
}
