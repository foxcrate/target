<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CompaniesImport;
use App\Exports\CompaniesExport;
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

}
