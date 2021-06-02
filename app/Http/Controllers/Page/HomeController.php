<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('page.index');
    }
    public function textil(){
        return view('page.textil');
    }
    public function chicha(){
        return view('page.chicha');
    }
    public function casa(){
        return view('page.casa');
    }
    public function hospedaje(){
        return view('page.hospedaje');
    }
}
