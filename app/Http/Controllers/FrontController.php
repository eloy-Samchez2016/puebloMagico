<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller{
    public function index(){
        return view('index');
    }

    public function atractivo(){
        return view('atractivo');    
    }

    public function eventos(){
        return view('eventos');
    }

    public function servicios(){
        return view('servicios');
    }

    public function contacto(){
        return view('contacto');
    }

    public function admin(){
        return view('admin.index');
    }
}
