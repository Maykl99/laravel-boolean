<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#estendo controller, le mie funzioni ritornano le view, dopo aver superato eventuali controlli, logica del controller
class StudentsController extends Controller
{

    protected $students;

    public function __construct()
    {
        $this->students = config('students');  
    }

    public function studenti()
    {
        $data=$this->students; # dati presi dalla cartella config, nome cartella 'students'
        return view('studenti',compact('data')); #['data' => $data]
    }

    public function show($id){
        if(!array_key_exists($id,$this->students)){
            abort(404);
        }else{
            $item = $this->students[$id];
            return view('show',compact('item'));
        }
    }

    /* public function slug($slug){
        $trovato=false;
        foreach($this->students as $student){
            if($student['slug'] == $slug){
                $item = $student;
                $trovato = true;
            }
        }

        if($trovato){
            return view('slug',compact('item'));
        }else{
            abort(404);
        }
    } */
}
