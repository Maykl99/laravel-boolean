<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#estendo controller, le mie funzioni ritornano le view, dopo aver superato eventuali controlli, logica del controller
class NomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function chisiamo(){
        return view('chisiamo');
    }
}
