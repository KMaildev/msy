<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    public function overseas_agencies_table()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencie_id', 'id');
    }

    public function contracts_table()
    {
        return $this->belongsTo(Contract::class, 'id', 'demand_id');
    }

    public function sendings_table()
    {
        return $this->belongsTo(Sending::class, 'id', 'demand_id');
    }
}
