<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function all_packages(){
        //return "Alo";
        $all_packages = Package::all();
        return view('package.index')->with('all_packages',$all_packages);
    }
}
