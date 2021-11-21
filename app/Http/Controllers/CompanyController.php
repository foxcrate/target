<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CompaniesImport;
use App\Exports\CompaniesExport;
use App\Models\Company;
use App\Models\Compnay;
use Maatwebsite\Excel\Facades\Excel;

class CompanyController extends Controller
{

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
        return "Alo";
    }

    public function all_companies(){
        $all_companies = Company::orderBy('id','desc')->get();
        return view('company.index')->with('all_companies',$all_companies);
    }

}
