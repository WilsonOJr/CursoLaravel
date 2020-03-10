<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        //return 'jashdjhasdkjhaskjdhkjasd';
        //return view('Layouts/LayoutFull');
        $teste = [
            '1' => 2
        ];
        dd($teste);
    }
}
