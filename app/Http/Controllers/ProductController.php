<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;

class ProductController extends Controller
{

    public function index($company_id){
        //return view('branch.index');
        $the_company = Company::find($company_id);
        $all_products = $the_company->products;
        //return $all_images;
        return view('product.index')->with(['all_products'=>$all_products , 'company_id'=>$the_company->id ]) ;
    }

    public function add(Request $request){
        //return $request;
        if ($request->hasFile('image')) {

            $extension = $request->file('image')->extension();
            $image = $request->image;
            $code = rand(1111111, 9999999);
            $image_new_name=time().$code ."pi".'.'.$extension;
            $image->move('uploads/products/', $image_new_name);
            $the_image = 'uploads/products/' . $image_new_name ;
        }
        else{
            $the_image = null;
        }

        $the_product = Product::create([
            'title'=> $request->title,
            'abstract_description'=> $request->abstract_content,
            'image'=> $the_image,
            'price'=> $request->price,
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

}
