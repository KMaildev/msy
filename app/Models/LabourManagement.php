<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabourManagement extends Model
{
    public function passports_table()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'id');
    }
}
