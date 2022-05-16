<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OverseasAgency extends Model
{
    public function countries_table()
    {
        return $this->belongsTo(Country::class, 'countrie_id', 'id');
    }
}
