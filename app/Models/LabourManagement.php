<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabourManagement extends Model
{
    public function passports_table()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'id');
    }

    public function overseas_agencies_table()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencies_id', 'id');
    }

    public function contract_table()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }


    public function sendings_table()
    {
        return $this->belongsTo(Sending::class, 'contract_id', 'contract_id');
    }
}
