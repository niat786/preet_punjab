<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front_page(){
        return view('preet.index');
    }

    public function poet(){
        return view('preet.poet-single');
    }

    public function poetry(){
        return view('preet.poetry');
    }

    public function punjabi_culture(){
        return view( 'preet.punjabiculture');
    }

    public function heritage_sites(){
        return view( 'preet.punjabheritage');
    }


    public function about(){
        return view('preet.about');
    }

    
    public function contact(){
        return view('preet.contact');
    }
}
