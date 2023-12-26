<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokoOnline extends Controller
{
    public function index(){
        return view('utstekweb.landing');
    }

    public function template(){
        return view('latianTemplate.index');
    }
}
