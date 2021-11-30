<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Image;

class ImageController extends Controller
{
    public function index($company_id){

        $the_company = Company::find($company_id);
        $all_images = $the_company->images;
        //return $all_images;
        return view('image.index')->with(['all_images'=>$all_images , 'company_id'=>$the_company->id ]) ;
    }

    public function add(Request $request){

        if ($request->hasFile('file')) {

            $extension = $request->file('file')->extension();
            $file = $request->file;
            $code = rand(1111111, 9999999);
            $file_new_name=time().$code ."if".'.'.$extension;
            $file->move('uploads/images/', $file_new_name);
            $the_file = 'uploads/images/' . $file_new_name ;
        }
        else{
            $the_file = null;
        }

        $the_image = Image::create([
            'title'=> $request->name,
            'file'=> $the_file,
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

    public function delete($image_id){

        $the_image = Image::find($image_id);

        $the_image->delete();
        return redirect()->back();
    }

}
