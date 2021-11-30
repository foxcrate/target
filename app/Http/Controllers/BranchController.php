<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Branch;

class BranchController extends Controller
{

    public function index($company_id){
        //return view('branch.index');
        $the_company = Company::find($company_id);
        $all_branches = $the_company->branches;
        //return $all_images;
        return view('branch.index')->with(['all_branches'=>$all_branches , 'company_id'=>$the_company->id ]) ;
    }

    public function add(Request $request){
        //return $request;
        if ($request->hasFile('image')) {

            $extension = $request->file('image')->extension();
            $image = $request->image;
            $code = rand(1111111, 9999999);
            $image_new_name=time().$code ."bi".'.'.$extension;
            $image->move('uploads/branches/', $image_new_name);
            $the_image = 'uploads/branches/' . $image_new_name ;
        }
        else{
            $the_image = null;
        }

        $the_branch = Branch::create([
            'title'=> $request->title,
            'mobile_number'=> $request->mobile_number,
            'whats_number'=> $request->whats_number,
            'email'=> $request->email,
            'image'=> $the_image,
            'address'=> $request->address,
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

    public function edit($branch_id){
        $the_branch = Branch::find($branch_id);

        return view('branch.edit')->with(['branch'=>$the_branch ]) ;
    }

    public function delete($branch_id){

        $the_branch = Branch::find($branch_id);

        $the_branch->delete();
        return redirect()->back();
    }

    Public function edit_post(Request $request){

        //return $request;
        $the_branch = Branch::find($request->branch_id);
        if ($request->hasFile('image')) {

            $extension = $request->file('image')->extension();
            $image = $request->image;
            $code = rand(1111111, 9999999);
            $image_new_name=time().$code ."bi".'.'.$extension;
            $image->move('uploads/branches/', $image_new_name);
            $the_image = 'uploads/branches/' . $image_new_name ;

            $the_branch->title = $request->title;
            $the_branch->mobile_number = $request->mobile_number;
            $the_branch->whats_number = $request->whats_number;
            $the_branch->email = $request->email;
            $the_branch->image = $the_image;
            $the_branch->address = $request->address;
            $the_branch->company_id = $request->company_id;
        }
        else{
            $the_branch->title = $request->title;
            $the_branch->mobile_number = $request->mobile_number;
            $the_branch->whats_number = $request->whats_number;
            $the_branch->email = $request->email;
            $the_branch->address = $request->address;
            $the_branch->company_id = $request->company_id;
        }

        $the_branch->save();

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

}
