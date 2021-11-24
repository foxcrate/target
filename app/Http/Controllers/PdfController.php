<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

class PdfController extends Controller
{

    public function pdfs($company_id){
        $the_company = Company::find($company_id);
        $all_pdfs = $the_company->pdfs;
        return view('pdf.index')->with('all_pdfs',$all_pdfs) ;
    }

}
