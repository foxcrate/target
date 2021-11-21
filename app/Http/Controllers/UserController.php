<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

    public function user_import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return "Done";
    }

    public function user_export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}
