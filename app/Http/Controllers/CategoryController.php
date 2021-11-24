<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_index(){

        $all_categories = Category::all();

        return view('category.index')->with('all_categories',$all_categories);
    }
}
