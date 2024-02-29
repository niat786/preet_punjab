<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poetry;
use App\Models\Poet;


class FrontController extends Controller
{
    public function front_page(){
        return view('preet.index');
    }

    public function poet(){
        return view('preet.poet-single');
    }

    public function poetry(Request $request){
        $poetries = Poetry::paginate(10);
        $poets = Poet::take(10)->get();
        return view('preet.poetry', ['poetries'=>$poetries, 'poets'=>$poets]);
    }

    public function showPoet($slug)
    {
        // Fetch the poet based on the slug
        $poet = Poet::where('slug', $slug)->firstOrFail();

        // Pass the poet data to the view
        return view('preet.poet-single', compact('poet'));
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

    public function sign_up(){
        return view('preet.signup');
    }
    
    public function login(){
        return view('preet.login');
    }
}
