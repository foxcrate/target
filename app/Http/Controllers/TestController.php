<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

class TestController extends Controller
{

    public function test()
    {

       $u1 = User::find(4);
       $u2 = User::find(2);

       return $u1->company->pdfs;

    }

}
