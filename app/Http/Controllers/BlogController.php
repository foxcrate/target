<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index($company_id){
        //return view('branch.index');
        $the_company = Company::find($company_id);
        $all_blogs = $the_company->blogs;
        //return $all_images;
        return view('blog.index')->with(['all_blogs'=>$all_blogs , 'company_id'=>$the_company->id ]) ;
    }

    public function add(Request $request){
        //return $request;
        if ($request->hasFile('image')) {

            $extension = $request->file('image')->extension();
            $image = $request->image;
            $code = rand(1111111, 9999999);
            $image_new_name=time().$code ."bli".'.'.$extension;
            $image->move('uploads/blogs/', $image_new_name);
            $the_image = 'uploads/blogs/' . $image_new_name ;
        }
        else{
            $the_image = null;
        }

        $the_blog = Blog::create([
            'title'=> $request->title,
            'abstract_content'=> $request->abstract_content,
            'full_content'=> $request->full_content,
            'image'=> $the_image,
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

}
