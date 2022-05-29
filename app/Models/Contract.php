<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function demands_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }
}
