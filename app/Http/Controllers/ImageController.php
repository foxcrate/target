<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class ImageController extends Controller
{
    public function index($company_id){
        return view('image.index');
        $the_company = Company::find($company_id);
        $all_images = $the_company->images;
        return view('image.index')->with(['all_images'=>$all_images , 'company_id'=>$the_company->id ]) ;
    }



}
