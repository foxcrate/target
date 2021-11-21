<?php

namespace App\Imports;

use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompaniesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Company|null
     */
    public function model(array $row)
    {
        return new Company([
           'title'     => $row['title'],
           'phone_number'    => $row['phone_number'],
           'email' => $row['email'],
        ]);
    }
}
