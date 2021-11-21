<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

class TestController extends Controller
{

    public function test()
    {

        $u = User::find(1);
        $c = Company::find(1);

        return $c->user;

    }

}
