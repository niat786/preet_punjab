<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poetry;
use App\Models\Poet;
use App\Models\CulturalContent;
use App\Models\HeritageSite;


class FrontController extends Controller
{
    public function front_page(){
        $poets = Poet::take(4)->get();
        $poetries = Poet::take(10)->get();
        $culture = CulturalContent::take(1)->get();
        return view('preet.index', ['poets'=>$poets, 'poetries'=>$poetries, 'culture'=>$culture]);
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
        $pc = CulturalContent::take(5)->get();
        return view( 'preet.punjabiculture', ['pc'=>$pc]);
    }

    public function punjabi_culture_view($slug){
        $pc = CulturalContent::where('slug', $slug)->firstOrFail();
        return view( 'preet.punjabi_sub', ['pc'=>$pc]);
    }
    public function heritage_sites(){
        $hr = HeritageSite::take(5)->get();
        return view( 'preet.punjabheritage', ['hr'=>$hr]);
    }
    public function heritage_sites_view($slug){
        $hr = HeritageSite::where('slug', $slug)->firstOrFail();
        return view( 'preet.heritage_sub', ['hr'=>$hr]);
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
