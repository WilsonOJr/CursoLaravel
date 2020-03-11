<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        return view('Clients/index');

        for($x = 1;$x <= 10;$x++){
                $y = $x .' - '. $x;
        }
        return $y;
    }

    public function create(){
        //codigo

    }
}
