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
           'title' => $row['title'],
           'city' => $row['city'],
           'address' => $row['address'],
           'contact_person' => $row['contact_person'],
           'phone_number' => $row['phone_number'],
           'email' => $row['email'],
           'website' => $row['website'],
           'description' => $row['description'],
           'category_id' => $row['category_id'],
           'whatsapp_number' => $row['whatsapp_number'],
           'ceo_number' => $row['ceo_number'],
           'purchasing_manager_number' => $row['purchasing_manager_number'],
           'sales_manager_number' => $row['sales_manager_number'],
           'ceo_name' => $row['ceo_name'],
           'sales_manager_name' => $row['sales_manager_name'],
           'purchases_manager_name' => $row['purchases_manager_name'],
        //    'marketing_manager_name' => $row['marketing_manager_name'],
           'area' => $row['area'],
        ]);
    }
}
