<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sending extends Model
{
    public function demands_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }
}
