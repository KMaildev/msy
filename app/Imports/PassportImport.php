<?php

namespace App\Imports;

use App\Models\Passport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PassportImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Passport([
            'name'     => $row['name'],
            'father_name'    => $row['father_name'],
            'nrc'    => $row['nrc'],
            'date_of_birth'    => $row['date_of_birth'],
            'passport'    => $row['passport'],
            'passport_date'    => $row['passport_date'],
            'local_agent_name'    => $row['local_agent_name'],
            'phone'    => $row['phone'],
            'address'    => $row['address'],
            'gender'    => $row['gender'],
            'place_of_passport'    => $row['place_of_passport'],
            'remark'    => $row['remark'],
        ]);
    }
}
