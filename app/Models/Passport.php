<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'father_name', 'nrc', 'date_of_birth', 'passport', 'passport_date', 'local_agent_name', 'phone', 'address', 'gender', 'remark',
    ];


    public function labour_management_table()
    {
        return $this->belongsTo(LabourManagement::class, 'id', 'passport_id');
    }
}
