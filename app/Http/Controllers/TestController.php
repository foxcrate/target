<?php

namespace App\Http\Controllers;


use App\Models\Ad;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Category;

class TestController extends Controller
{

    public function test()
    {

       $c1 =Category::find(1);
       $c2 = Category::find(2);

       $a1 = Ad::find(1);
       $a2 = Ad::find(2);

       $a2->categories()->attach( [$c1->id,$c2->id] );

       return $c1->ads;

    }

}
