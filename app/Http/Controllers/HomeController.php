<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        //$companies = Company::all();
        //where('id','>',0)->
        $companies = Company::inRandomOrder()->limit(4)->get();
        $categories = Category::inRandomOrder()->limit(4)->get();

        return view('index')->with(['companies'=>$companies , 'categories'=>$categories]);
    }

}
