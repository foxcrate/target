<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Pdf;

class PdfController extends Controller
{

    public function index($company_id){
        $the_company = Company::find($company_id);
        $all_pdfs = $the_company->pdfs;
        return view('pdf.index')->with(['all_pdfs'=>$all_pdfs , 'company_id'=>$the_company->id ]) ;
    }

    public function add(Request $request){
        return $request;
        if ($request->hasFile('file')) {

            $extension = $request->file('file')->extension();
            $file = $request->file;
            $code = rand(1111111, 9999999);
            $file_new_name=time().$code ."pf".'.'.$extension;
            $file->move('uploads/pdfs/', $file_new_name);
            $the_file = 'uploads/pdfs/' . $file_new_name ;
        }
        else{
            $the_file = null;
        }

        $the_pdf = Pdf::create([
            'title'=> $request->name,
            'file'=> $the_file,
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('msg','File Uploaded Successfully');

    }

    public function delete($pdf_id){

        $the_pdf = Pdf::find($pdf_id);

        $the_pdf->delete();
        return redirect()->back();
    }

}
