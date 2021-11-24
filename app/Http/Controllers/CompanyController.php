<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CompaniesImport;
use App\Exports\CompaniesExport;
use App\Models\Company;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{

    public function rate(Request $request){

        //return $request;
        $new_rate = $request->rate;
        $the_company = Company::find($request->company_id);
        $the_company->rate= ( ( $the_company->rate * $the_company->number_of_ratings ) + ( 1 * $request->rate ) ) / ( $the_company->number_of_ratings + 1 )  ;
        $the_company->save();
        return redirect()->back()->with('message','Rating Sent Successfully');

    }

    public function company_import(Request $request)
    {
        Excel::import(new CompaniesImport, $request->file('file')->store('temp'));
        return "Done";
    }

    public function company_export()
    {
        return Excel::download(new CompaniesExport, 'companies.xlsx');
    }

    public function company_profile($company_id){
        $the_company = Company::find($company_id);

        return view('company.profile')->with('company',$the_company);
    }

    public function all_companies(){
        $all_companies = Company::orderBy('id','desc')->get();
        return view('company.index')->with('all_companies',$all_companies);
    }

    public function add(Request $request){
        //return Auth::user()->id ;
        // $c = Company::find(5);
        // $c->user_id = 4;
        // $c->save();
        // return "Done";
        // $this->validate($request, [
        //     'name' => 'required',
        //     'image_1' => 'mimes:jpeg,jpg,bmp,png|max:5242880',
        // ]);

        if ($request->hasFile('image_1')) {

            $extension = $request->file('image_1')->extension();
            $image_1 = $request->image_1;
            $code = rand(1111111, 9999999);
            $image_1_new_name=time().$code ."i1".'.'.$extension;
            $image_1->move('uploads/companies/', $image_1_new_name);
            $the_image_1 = 'uploads/companies/' . $image_1_new_name ;
        }
        else{
            $the_image_1 = null;
        }

        $c = Company::create([
            'title' => $request->title ,
            'phone_1' => $request->phone_1 ,
            'whatsapp_number' => $request->whatsapp_number ,
            'activity' => $request->activity ,
            'postcode' => $request->postcode ,
            'address' => $request->address ,
            'website' => $request->website ,
            'facebook_url' => $request->facebook_url ,
            'categories_1' => $request->categories_1 ,
            'ceo_name' => $request->ceo_name ,
            'contact_person' => $request->contact_person ,
            'email' => $request->email ,
            'fax' => $request->fax ,
            'youtube_url' => $request->youtube_url ,
            'city' => $request->city ,
            'image_1' => $the_image_1 ,
            'description' => $request->description ,
        ]);
        $c->user_id = Auth::user()->id;
        $c->save();

        return redirect()->back();

    }

}
