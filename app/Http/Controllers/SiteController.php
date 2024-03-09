<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contato(){
        return view('contato');
    }
}
