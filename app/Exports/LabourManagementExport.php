<?php

namespace App\Exports;

use App\Models\LabourManagement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LabourManagementExport implements FromView
{
    public function __construct($contract_labours)
    {
        $this->contract_labours = $contract_labours;
    }

    public function view(): View
    {
        return view('labour_management.export.index', [
            'contract_labours' => $this->contract_labours,
        ]);
    }
}
