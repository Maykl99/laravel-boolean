<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#estendo controller, le mie funzioni ritornano le view, dopo aver superato eventuali controlli, logica del controller
class StudentsController extends Controller
{
    public function studenti(){
        $data=config('students'); # dati presi dalla cartella config, nome cartella 'students'
        return view('studenti',compact('data')); #['data' => $data]
    }
}
