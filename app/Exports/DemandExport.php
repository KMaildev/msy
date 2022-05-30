<?php

namespace App\Exports;

use App\Models\Demand;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DemandExport implements FromView
{
    public function __construct($demands)
    {
        $this->demands = $demands;
    }

    public function view(): View
    {
        return view('new_demand.export.demand_export', [
            'demands' => $this->demands,
        ]);
    }
}
